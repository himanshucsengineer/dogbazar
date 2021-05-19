<?php
class Surrender extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {


        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/surrender');
        $this->load->view('frontend/template/footer');
    }


    public function insert_data()
    {
        $this->load->model('frontend/surrendermodel');
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
                $config['upload_path'] = APPPATH . '../upload/surrender';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '5000'; // max_size in kb
                $config['file_name'] = $_FILES['files']['name'][$i];

                //Load upload library
                $this->load->library('upload', $config);

                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = base_url() . 'upload/surrender/' .$uploadData['file_name'];
                    

                    // Initialize array
                     $img_data[] = $filename;
                   
                }
                
            }
        }
    
        if (!empty($_FILES['images']['name'])) {
            $File_name = '';
            $config['upload_path'] = APPPATH . '../upload/surrender';
            $config['file_name'] = $File_name;
            $config['overwrite'] = TRUE;
            $config["allowed_types"] = 'jpeg|jpg|png';
            $config["max_size"] = '';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('images')) {
                $this->data['error'] = $this->upload->display_errors();
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('surrender');
            } else {
                $dataimage_return = $this->upload->data();
                $imageurl = base_url() . 'upload/surrender/' . $dataimage_return['file_name'];
            }
        }


        $datas = array(
            'name' => $this->input->post('name'),
             'email' => $this->input->post('email'),
             'mob' => $this->input->post('mob'),
              'address' => $this->input->post('add'),
            'species' => $this->input->post('species'),
            'p_name' => $this->input->post('p_name'),
            'owned' => $this->input->post('owned'),
            'breed' => $this->input->post('breed'),
            'age' => $this->input->post('age'),
            'color' => $this->input->post('color'),
            'gender' => $this->input->post('gender'),
            'picked' => $this->input->post('picked'),
            'vacc' => $this->input->post('vacc'),
            'diet' => $this->input->post('diet'),
            

            'image' => $img_data[0],
            'image1' => $img_data[1],
            'image2' => $imageurl,
            
        );
        if ($this->surrendermodel->newpost($datas)) {
            $this->session->set_flashdata('success', 'data submitted');
            redirect(base_url() . 'surrender');
        } else {
            $this->session->set_flashdata('error', 'Error In submisstion');
            redirect(base_url() . 'surrender');
        }
    }
}
