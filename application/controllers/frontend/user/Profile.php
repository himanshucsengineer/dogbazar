<?php
class Profile extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/desh');

        $this->load->view('frontend/user/profile');
       //$this->load->view('frontend/template/footer');
    }
}
