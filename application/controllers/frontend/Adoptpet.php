<?php
class Adoptpet extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Listmydogmodel');
        $this->load->helper('url');
    }

    public function index($slug = "")
    {

        $data['list'] = $this->Listmydogmodel->blog_detail($slug);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/adoptpet',$data);
        $this->load->view('frontend/template/footer');
    }
}
