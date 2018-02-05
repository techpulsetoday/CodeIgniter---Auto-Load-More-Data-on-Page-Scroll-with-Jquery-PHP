<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('posts_model');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index($slug = 'home') {
        $this->data['container'] = 'templates/includes/container/' . $slug;
        $this->load->view('templates/home', $this->data);
    }

    public function load_more_data() {
        if (isset($_POST["limit"], $_POST["start"])) {
            $start = $_POST["limit"];
            $end = $_POST["start"];
            $posts = $this->posts_model->locad_more($start, $end);
            foreach ($posts as $post) {
                echo '<div class="col-sm-4">';
                echo heading($post->post_title, 3);
                echo '<p>' . character_limiter($post->post_content, 100) . '</p>';
                echo '<button type="button" class="btn btn-outline-info btn-sm">';
                echo anchor($post->guid, $this->lang->line('read_more'), array('target' => '_blank'));
                echo '</button>';
                echo '</div>';
            }
        }
    }

}
