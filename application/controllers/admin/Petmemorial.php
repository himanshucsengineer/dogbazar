<?php
class Petmemorial extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/Donationmodel');
    // $this->load->model('frontend/invoicedatamodel');
  }

  public function index()
  {



    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/petmemorial');
    $this->load->view('admin/template/footer');
  }


  public function insert_data()
  {
      $this->load->model('admin/Donationmodel');
      $this->input->post('formSubmit');
      $img_data = array();
      // Count total files
      $countfiles = count($_FILES['files']['name']);
      // Looping all files
      for ($i = 0; $i < $countfiles; $i++) {

          if (!empty($_FILES['files']['name'][$i])) {

              // Define new $_FILES array - $_FILES['file']
              $_FILES['file']['name'] = $_FILES['files']['name'][$i];
              $_FILES['file']['type'] = $_FILES['files']['type'][$i];
              $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
              $_FILES['file']['error'] = $_FILES['files']['error'][$i];
              $_FILES['file']['size'] = $_FILES['files']['size'][$i];

              // Set preference
              $config['upload_path'] = APPPATH . '../upload/petmemorial';
              $config['allowed_types'] = 'jpg|jpeg|png';
              $config['max_size'] = '5000'; // max_size in kb
              $config['file_name'] = $_FILES['files']['name'][$i];

              //Load upload library
              $this->load->library('upload', $config);

              // File upload
              if ($this->upload->do_upload('file')) {
                  // Get data about the file
                  $uploadData = $this->upload->data();
                  $filename =$uploadData['file_name'];
                  

                  // Initialize array
                   $img_data[] = $filename;
                 
              }
              
          }
      }
      $link = $this->input->post('name');
      $link = str_replace(' ', '-', $link);



      $datas = array(
          'name' => $this->input->post('name'),
           'b_date' => $this->input->post('b_date'),
           'b_place' => $this->input->post('b_place'),
            'd_date' => $this->input->post('d_date'),
          'd_place' => $this->input->post('d_place'),
         
          'link' => $link,
           
          'about' => $this->input->post('about'),
          
          

          'image' => $img_data[0],
          'image1' => $img_data[1],
          'image2' => $img_data[2],
          'image3' => $img_data[3],
          'image4' => $img_data[4],
      );
      if ($this->Donationmodel->insert_data($datas)) {
          $this->session->set_flashdata('success', 'Pet Memorial Created');
          redirect(base_url() . 'admin/petmemorial');
      } else {
          $this->session->set_flashdata('error', 'Error In Updating Please Try Again');
          redirect(base_url() . 'admin/petmemorial');
      }
  }





  
}
