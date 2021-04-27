<?php
class Nutrition extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Nutritionmodel');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Nutritionmodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/nutrition/nutrition',$data);
        $this->load->view('frontend/template/footer');
    }
}
