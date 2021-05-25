<?php
class Events extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Eventmodel');
    }

    public function index()
    {

        $data['events']=$this->Eventmodel->fetch_data();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/news/events',$data);
        $this->load->view('frontend/template/footer');
    }
}
 