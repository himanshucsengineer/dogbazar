<?php
class Aboutidb extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {


        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/aboutidb');
        $this->load->view('frontend/template/footer');
    }
}
