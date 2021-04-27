<?php
class Givingup extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Givingupmodel');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Givingupmodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/givingup/givingup',$data);
        $this->load->view('frontend/template/footer');
    }
}
