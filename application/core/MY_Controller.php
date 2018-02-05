<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//  application/core/MY_Controller.php
class MY_Controller extends CI_Controller {

    public $data = array();

    public function __construct() {

        parent::__construct();

        $this->data['styles'] = array('assets/css/bootstrap.min.css', 'assets/css/style.min.css');
        $this->data['scripts'] = array('assets/js/jquery-3.3.1.min.js', 'assets/js/tether.min.js', 'assets/js/bootstrap.min.js', 'assets/js/jquery.cookie.min.js', 'assets/js/script.min.js');
    }

}
