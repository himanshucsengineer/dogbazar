<?php
class Getting extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Gettingmodel');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Gettingmodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/getting/behave', $data);
        $this->load->view('frontend/template/footer');
    }
}
