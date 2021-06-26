<?php
class Gallary extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Gallarymodel');
    
        $this->load->helper('url');
    }
    public function index($slug = "")
    { $data['dogss'] = $this->Gallarymodel->fetch_data($slug);
       
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/gallary',$data);
        $this->load->view('frontend/template/footer');
    }
    
    
}
