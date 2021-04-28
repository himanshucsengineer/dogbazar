<?php
class Doglist extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/Doglistmodel');
    // $this->load->model('frontend/invoicedatamodel');
  }

  public function index()
  {


    $data['list']=$this->Doglistmodel->fetchinventory_api();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/doglist',$data);
    $this->load->view('admin/template/footer');
  }



  





  public function deleteuserdetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->Doglistmodel->deleteuserdata($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'Gallery  deleted successfully');
          redirect(base_url() . "admin/doglist");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/doglist");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/doglist");
      }
    }
  }
}
