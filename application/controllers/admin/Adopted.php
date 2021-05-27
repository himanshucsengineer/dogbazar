<?php
class Adopted extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/Adoptionmodel');
    // $this->load->model('frontend/invoicedatamodel');
  }

  public function index()
  {


    $data['list']=$this->Adoptionmodel->fetch_adopted();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/adopted',$data);
    $this->load->view('admin/template/footer');
  }



  

 

  

  
}
