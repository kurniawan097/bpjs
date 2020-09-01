<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        chek_session();
    }

    function index() {
        $data['title'] = "Home";
        $uid = $this->session->userdata('user_id');
        if ($this->ion_auth->is_admin()) {
          
            $this->template->display('dashboard/member', $data);
        }
        else  {
          
            $this->template->display('dashboard/admin', $data);
    }

}
}
