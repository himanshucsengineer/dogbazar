<?php
class Adoption extends CI_controller
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


    $data['list']=$this->Adoptionmodel->fetchinventory_api();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/adoption',$data);
    $this->load->view('admin/template/footer');
  }



  





  public function deleteuserdetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->Adoptionmodel->deleteuserdata($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'Gallery  deleted successfully');
          redirect(base_url() . "admin/adoption");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/adoption");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/adoption");
      }
    }
  }
}
