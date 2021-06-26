<?php
class Gallarypage extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/Gallarymodel');

  }

  public function index()
  {


    $data['list']=$this->Gallarymodel->fetch_data();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/gallarypage',$data);
    $this->load->view('admin/template/footer');
  }


  public function create()
  {
    $this->load->model('admin/Gallarymodel');
    $this->input->post('formSubmit');


    $data = array(
      
      'cate_name' => $this->input->post('cate'),
      'cate_desc' => $this->input->post('descs'),
    );
    if ($this->Gallarymodel->insert($data)) {
      $this->session->set_flashdata('_success', 'Category Created');
      redirect(base_url() . 'admin/gallarypage');
    } else {
      $this->session->set_flashdata('_error', 'Error In Updating Please Try Again');
      redirect(base_url() . 'admin/gallarypage');
    }
  }
   

  public function addinventory_api()
  {

    $getPurchaseData = $this->Gallarymodel->fetch_cate();


    foreach ($getPurchaseData as $key => $value) {
     

      $arrya_json[] = array($value['id'],$value['cate_name'],$value['cate_desc'], '
               <a class="delete_sliders" data-id="' . $value['id'] . '"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>');
    }
    echo json_encode(array('data' => $arrya_json));
  }
   





  public function deleteuserdetail()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->Gallarymodel->delete_cate($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'Gallery  deleted successfully');
          redirect(base_url() . "admin/gallarypage");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/gallarypage");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/gallarypage");
      }
    }
  }




}
