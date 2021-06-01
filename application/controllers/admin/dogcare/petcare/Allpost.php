<?php
class Allpost extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/dogcare/petcare/Allpostmodel');
  }

  public function index()
  {



    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/dogcare/petcare/allpost');
    $this->load->view('admin/template/footer');
  }





  public function addinventory_api()
  {

    $getPurchaseData = $this->Allpostmodel->fetch_data();

    foreach ($getPurchaseData as $key => $value) {

      $arrya_json[] = array(
        $value['id'], $value['head'], '<iframe width="200" height="200" src="'. $value['image'].'"></iframe>', $value['date'],
        '<a class="delete_sliders" data-id="' . $value['id'] . '"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>'
      );
    }
    echo json_encode(array('data' => $arrya_json));
  }

  public function deletepost()
  {

    if ($this->input->post('deletesliderId')) {
      $this->form_validation->set_rules('deletesliderId', 'text', 'required');
      if ($this->form_validation->run() == true) {
        $getDeleteStatus = $this->Allpostmodel->deleteposts($this->input->post('deletesliderId'));
        if ($getDeleteStatus['message'] == 'yes') {
          $this->session->set_flashdata('success', 'Post  deleted successfully');
          redirect(base_url() . "admin/dogcare/petcare/allpost");
        } else {
          $this->session->set_flashdata('error', 'Something went wrong. Please try again');
          redirect(base_url() . "admin/dogcare/petcare/allpost");
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong. Please try again');
        redirect(base_url() . "admin/dogcare/petcare/allpost");
      }
    }
  }
}
