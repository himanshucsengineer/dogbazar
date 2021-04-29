<?php
class Breed extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Breedmodel');
         $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Breedmodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/breed/breed',$data);
        $this->load->view('frontend/template/footer');
    }
}
