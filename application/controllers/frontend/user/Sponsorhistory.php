<?php
class Sponsorhistory extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Donatemodel');
        //$this->load->helper('url');
    }

    public function index()
    {

        $data['sponsor_history'] = $this->Donatemodel->fetch_user_sponsor_data($_SESSION["email"]);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/desh');

        $this->load->view('frontend/user/sponsorhistory',$data);
    
    }

        
    
}
