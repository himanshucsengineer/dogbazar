<?php
class Events extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    //$this->load->model('admin/Adoptionmodel');
    // $this->load->model('frontend/invoicedatamodel');
  }

  public function index()
  {


   // $data['list']=$this->Adoptionmodel->fetchinventory_api();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/even/events');
    $this->load->view('admin/template/footer');
  }

  public function insert_data()
    {
        $this->load->model('admin/eventmodel');
        $this->input->post('formSubmit');
        $datas = array(
            'name' => $this->input->post('name'),
             'date' => $this->input->post('date'),
            'location' => $this->input->post('location'),
             'orge' => $this->input->post('orge'),
            'link' => $this->input->post('link'),
            

  
        );
        if ($this->eventmodel->insert_data($datas)) {
            $this->session->set_flashdata('success', 'Post Published');
            redirect(base_url() . 'admin/even/events');
        } else {
            $this->session->set_flashdata('error', 'Error In Updating Please Try Again');
            redirect(base_url() . 'admin/even/events');
        }
    }


  





  
}
