<?php
class Gallary extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Gallarymodel');
    }
    public function index()
    {
        $data['dogss'] = $this->Gallarymodel->fetch_data();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/gallary',$data);
        $this->load->view('frontend/template/footer');
    }
    
    
}
