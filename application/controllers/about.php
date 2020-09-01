<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class about extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_session();
    }

    public function index() {
        $this->template->display('about/about_us');
    }
}