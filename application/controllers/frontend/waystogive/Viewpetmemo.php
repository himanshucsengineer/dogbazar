<?php
class Viewpetmemo extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('frontend/dogcare/Behavemodel');
        //$this->load->helper('url');
    }

    public function index()
    {

        //$data['blogs'] = $this->Behavemodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/waystogive/viewpetmemo');
        $this->load->view('frontend/template/footer');
    }
}
