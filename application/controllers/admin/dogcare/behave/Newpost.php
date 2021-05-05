<?php
class Newpost extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('vendorAuth')) {
            redirect('login');
        }
        $this->load->model('admin/dogcare/behave/Catemodel');
        $this->load->model('admin/dogcare/behave/Newpostmodel');
    }

    public function index()
    {

        $data['fetch_category'] = $this->Catemodel->fetch_data();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/dogcare/behave/newpost', $data);
        $this->load->view('admin/template/footer');
    }
 

    public function post()
    {
        $this->load->model('admin/dogcare/behave/newpostmodel');
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
                $config['upload_path'] = APPPATH . '../upload/dogcare/behave';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '5000'; // max_size in kb
                $config['file_name'] = $_FILES['files']['name'][$i];

                //Load upload library
                $this->load->library('upload', $config);

                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = base_url() . 'upload/dogcare/behave/' .$uploadData['file_name'];
                    

                    // Initialize array
                     $img_data[] = $filename;
                   
                }
                
            }
        }





        $str = $this->input->post('name');
    
       
        $code = '';
        for ($i = 0; $i < 10; $i++) {
            $code .= mt_rand(0, 9);
        }
        $new_url = $str . "" . $code;
       



        $datas = array(
            'name' => $this->input->post('name'),
             'age' => $this->input->post('age'),
             'color' => $this->input->post('color'),
              'gender' => $this->input->post('gender'),
            'about' => $this->input->post('about'),
         
            'link' => $new_url,
            

            'image' => $img_data[0],
            'image1' => $img_data[1],
            'image2' => $img_data[2],
            'image3' => $img_data[3],
            'image4' => $img_data[4],
        );
        if ($this->newpostmodel->newpost($datas)) {
            $this->session->set_flashdata('success', 'Dog Listed');
            redirect(base_url() . 'admin/dogcare/behave/newpost');
        } else {
            $this->session->set_flashdata('error', 'Error In Updating Please Try Again');
            redirect(base_url() . 'admin/dogcare/behave/newpost');
        }
    }
}
