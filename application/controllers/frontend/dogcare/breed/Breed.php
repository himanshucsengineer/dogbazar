<?php
class Breed extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('frontend/dogcare/Groomingmodel');
       // $this->load->helper('url');
    }

    public function index()
    {

        //$data['blogs'] = $this->Groomingmodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/breed/breed');
        $this->load->view('frontend/template/footer');
    }
}
