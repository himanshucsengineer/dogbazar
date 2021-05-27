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



  

 

  public function update_bank($id)
  {
    $this->load->model('admin/Adoptionmodel');
    $this->input->post('formSubmit');


    $this->form_validation->set_rules('action', 'Action', 'required');

    if ($this->form_validation->run()) {
      $bank_acc = $this->input->post('action');
      $u_name = $this->input->post('u_name');
      $u_email = $this->input->post('u_email');
      $u_mob = $this->input->post('u_mob');
      $u_add = $this->input->post('u_add');
      $front = $this->input->post('front');
      $back = $this->input->post('back');
      $u_occu = $this->input->post('u_occu');
      $re_name = $this->input->post('re_name');
      $re_mob = $this->input->post('re_mob');
      $pet_name = $this->input->post('pet_name');
      $pet_color = $this->input->post('pet_color');
      $pet_age = $this->input->post('pet_age');
      $pet_breed = $this->input->post('pet_breed');

      $pet_gender = $this->input->post('pet_gender');
      $pet_city = $this->input->post('pet_city');
      $pet_image = $this->input->post('pet_image');
      $pet_uniq_id = $this->input->post('pet_uniq_id');
       
      if($bank_acc=="Pending"){
        if ($this->Adoptionmodel->update_bank($bank_acc, $id)) {
          $this->session->set_flashdata('error', 'Error In Submisstion');
          redirect(base_url() . 'admin/adoption');
        } else {
          $this->session->set_flashdata('success', 'Updated Successfully');
          redirect(base_url() . 'admin/adoption');
        }
      }elseif($bank_acc=="Approved"){
        if ($this->Adoptionmodel->update_bank($bank_acc, $id)) {
          $this->session->set_flashdata('error', 'Error In Submisstion');
          redirect(base_url() . 'admin/adoption');
        } else {
          if($this->Adoptionmodel->insert_adopted_pet($u_name,$u_email,$u_mob,$u_add,$front,$back,$u_occu,$re_name,$re_mob,$pet_name,$pet_color,$pet_age,$pet_breed,$pet_city,$pet_gender,$pet_image) and $this->Adoptionmodel->insert_listed_delete($pet_uniq_id)){
            $this->session->set_flashdata('success', 'Updated Successfully');
            redirect(base_url() . 'admin/adoption');
          }else{
            $this->session->set_flashdata('error', 'Database Error');
            redirect(base_url() . 'admin/adoption');
          }
          
        }
      }else{
        if ($this->Adoptionmodel->update_bank($bank_acc, $id)  ) {
          $this->session->set_flashdata('error', 'Error In Submisstion');
          redirect(base_url() . 'admin/adoption');
        } else {
          if($this->Adoptionmodel->deleteuserdata($id)){
            $this->session->set_flashdata('success', 'Updated Successfully');
            redirect(base_url() . 'admin/adoption');
          }else{
            $this->session->set_flashdata('error', 'Database Error');
            redirect(base_url() . 'admin/adoption');
          }
          
        }
      }

      
    } else {
      $this->session->set_flashdata('error', 'Plase Choose An action');
      redirect(base_url() . 'admin/adoption');
    }
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
