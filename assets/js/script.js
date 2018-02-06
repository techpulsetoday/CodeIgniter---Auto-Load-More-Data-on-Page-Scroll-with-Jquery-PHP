$(document).ready(function () {
    var limit = 12;
    var start = 0;
    var action = 'inactive';
    function load_user_data(limit, start) {
        $.ajax({
            url: CIURLS.siteurl + 'index/load_more_data',
            method: "POST",
            data: {
                csrf_test_name: $.cookie('csrf_cookie_name'),
                limit: limit,
                start: start
            },
            cache: false,
            success: function (data) {
                $('#load_data').append(data);
                if (data === '') {
                    $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
                    action = 'active';
                } else {
                    $('#load_data_message').html("<button type='button' class='btn btn-info'>Please wait...</button>");
                    action = 'inactive';
                }
            }
        });
    }
    if (action === 'inactive') {
        action = 'active';
        load_user_data(limit, start);
    }
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action === 'inactive') {
            action = 'active';
            start = start + limit;
            setTimeout(function () {
                load_user_data(limit, start);
            }, 1000);
        }
    });
    /* Back To Top */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    /* scroll body to 0px on click */
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    $('#back-to-top').tooltip('show');
});