<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo doctype('html5') ?>
<html lang="en">
    <?php $this->load->view('templates/includes/head'); ?>
    <body>
        <?php $this->load->view('templates/includes/header'); ?>
        <div class="clear"></div>
        <?php $this->load->view($container); ?>
        <div class="clear"></div>
        <?php $this->load->view('templates/includes/footer'); ?>
        <?php $this->load->view('templates/includes/scripts'); ?>
    </body>
</html>