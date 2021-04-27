<?php
class Petcare extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Petcaremodel');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Petcaremodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/petcare/petcare', $data);
        $this->load->view('frontend/template/footer');
    }
}
