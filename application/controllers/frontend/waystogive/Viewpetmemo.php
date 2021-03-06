<?php
class Viewpetmemo extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/donatemodel');
        $this->load->helper('url');
    }

    public function index($slug = "")
    {
        $data['blog'] = $this->donatemodel->blog_detail($slug);
        //$data['blogs'] = $this->Behavemodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/waystogive/viewpetmemo',$data);
        $this->load->view('frontend/template/footer');
    }
}
