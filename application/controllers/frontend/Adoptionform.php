<?php
class Adoptionform extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Adoptionmodel');
        //$this->load->helper('url');
    }

    public function index()
    {

        //$data['list'] = $this->Listmydogmodel->blog_detail($slug);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/adoptionform');
        $this->load->view('frontend/template/footer');
    }

    public function insert_data()
    {
        $this->load->model('frontend/Adoptionmodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mob', 'Mobile Number', 'required');
        $this->form_validation->set_rules('add', 'Qualification', 'required');
        $this->form_validation->set_rules('house', 'City', 'required');
        $this->form_validation->set_rules('change_location', 'Address', 'required');
        $this->form_validation->set_rules('why', 'Address', 'required');
        $this->form_validation->set_rules('past', 'Address', 'required');
        $this->form_validation->set_rules('time', 'Address', 'required');
        $this->form_validation->set_rules('alone', 'Address', 'required');
        $this->form_validation->set_rules('occu', 'Address', 'required');
        $this->form_validation->set_rules('res_name', 'Address', 'required');
        $this->form_validation->set_rules('res_mob', 'Address', 'required');
        $this->form_validation->set_rules('uniq_id', 'Address', 'required');
        if ($this->form_validation->run()) {


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
                $config['upload_path'] = APPPATH . '../upload/adoptionform';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '5000'; // max_size in kb
                $config['file_name'] = $_FILES['files']['name'][$i];

                //Load upload library
                $this->load->library('upload', $config);

                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = base_url() . 'upload/adoptionform/' .$uploadData['file_name'];
                    

                    // Initialize array
                     $img_data[] = $filename;
                   
                }
                
            }
        }

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'number' => $this->input->post('mob'),
                'address' => $this->input->post('add'),
                'house' => $this->input->post('house'),
                'change_location' => $this->input->post('change_location'),
                'why' => $this->input->post('why'),
                'past' => $this->input->post('past'),
                'time' => $this->input->post('time'),
                'alone' => $this->input->post('alone'),
                'occu' => $this->input->post('occu'),
                'res_name' => $this->input->post('res_name'),
                'res_mob' => $this->input->post('res_mob'),
                'uniq_id' => $this->input->post('uniq_id'),
                'change_location_ex' => $this->input->post('change_location_ex'),
                'why_ex' => $this->input->post('why_ex'),
                'alone_ex' => $this->input->post('alone_ex'),
                'image' => $img_data[0],
                'image1' => $img_data[1],
            );

            if ($this->Adoptionmodel->insert_data($data)) {
                $this->session->set_flashdata('success', 'Your data have been submitted');
                redirect(base_url() . "adopt");
            } else {
                $this->session->set_flashdata('error', 'Error In Submission');
                redirect(base_url() . "adopt");
            }
        } else {
            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url() . "adopt");
        }
    }




    
}
 