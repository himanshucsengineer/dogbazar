<?php
class Adopt extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Listmydogmodel');
    }

    public function index()
    {
        $data['adopt'] = $this->Listmydogmodel->fetch_adopt_all();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/adopt' , $data);
        $this->load->view('frontend/template/footer');
    }
}
