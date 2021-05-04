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
    public function getCityDepartment()
    {
        // POST data 
        $postData = $this->input->post();

        // load model 
        $this->load->model('frontend/Listmydogmodel');

        // get data 
        if($postData==null){
            $data = $this->Listmydogmodel->fetch_adopt_all();
            echo json_encode($data);
        }else{
            $data = $this->Listmydogmodel->getCityDepartment($postData);
        echo json_encode($data);
        }
        
    }
}
