<?php
class Mydogs extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Listmydogmodel');
    }

    public function index()
    {

        $data['fetch_dogs'] = $this->Listmydogmodel->fetch_dogs($_SESSION["email"]);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/user/mydogs', $data);
        $this->load->view('frontend/template/footer');
    }
}
