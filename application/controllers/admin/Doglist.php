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

  public function addinventory_api()
  {

    $getPurchaseData = $this->Doglistmodel->fetchinventory_api();


    foreach ($getPurchaseData as $key => $value) {
      //                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';

      $arrya_json[] = array($value['id'],$value['date'], $value['name'], $value['email'], $value['number'], $value['p_name'], $value['weight'], $value['color'], $value['age'],$value['breed'], $value['gender'], $value['address'],$value['about'],$value['city'],'<a href="'.base_url().'upload/listdog/'.$value['image'].'" target="_blank">View Image</a>','<a href="'.base_url().'upload/listdog/'.$value['image1'].'" target="_blank">View Image</a>','<a href="'.base_url().'upload/listdog/'.$value['image2'].'" target="_blank">View Image</a>','<a href="'.base_url().'upload/listdog/'.$value['image3'].'" target="_blank">View Image</a>','<a href="'.base_url().'upload/listdog/'.$value['image4'].'" target="_blank">View Image</a>','<a href="'.base_url().'upload/listdog/'.$value['front'].'" target="_blank">View Image</a>','<a href="'.base_url().'upload/listdog/'.$value['back'].'" target="_blank">View Image</a>', '<a class="edit" href="' . base_url() . 'admin/brands/galleryedit/' . $value['id'] . '" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="' . $value['id'] . '"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>');
    }
    echo json_encode(array('data' => $arrya_json));
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
