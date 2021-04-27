<?php
class Training extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Trainingmodel');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Trainingmodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/training/training',$data);
        $this->load->view('frontend/template/footer');
    }
}
