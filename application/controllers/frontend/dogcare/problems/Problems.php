<?php
class Problems extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Problemmodel');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Problemmodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/problems/problems', $data);
        $this->load->view('frontend/template/footer');
    }
}
