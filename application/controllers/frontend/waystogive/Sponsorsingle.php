<?php
class Sponsorsingle extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/dogcare/behave/Allpostmodel');
        $this->load->helper('url');
    }

    public function index($slug = "")
    {

        $data['list'] = $this->Allpostmodel->blog_detail($slug);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/waystogive/sponsorsingle',  $data);
        $this->load->view('frontend/template/footer');
    }
}
