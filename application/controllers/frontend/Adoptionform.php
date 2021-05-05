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
        
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('mob', 'Number', 'required');
            $this->form_validation->set_rules('uniq_id', 'Number', 'required');
            $this->form_validation->set_rules('city', 'city', 'required');

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
                    $config['upload_path'] = APPPATH . '../upload/listdog';
                    $config['allowed_types'] = 'jpg|jpeg|png';
                    $config['max_size'] = '5000'; // max_size in kb
                    $config['file_name'] = $_FILES['files']['name'][$i];

                    //Load upload library
                    $this->load->library('upload', $config);

                    // File upload
                    if ($this->upload->do_upload('file')) {
                        // Get data about the file
                        $uploadData = $this->upload->data();
                        $filename = base_url() . 'upload/listdog/' .$uploadData['file_name'];
                        

                        // Initialize array
                         $img_data[] = $filename;
                       
                    }
                    
                }
            }
            
         
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'number' => $this->input->post('mob'),
                'uniq_id' => $this->input->post('uniq_id'),
                'city' => $this->input->post('city'),
                'image' => $img_data[0],
                'image1' => $img_data[1],
               
               
               
            );
            if ($this->Adoptionmodel->insert_data($data)) {
                $this->session->set_flashdata('success', 'Listed Successful');
                redirect(base_url() . 'adopt/'.$this->input->post('uniq_id'));
            } else {
                $this->session->set_flashdata('error', 'Error In Submistion');
                redirect(base_url() . 'adopt/'.$this->input->post('uniq_id'));
            }
            }else{
                $this->session->set_flashdata('error', 'Please Fill All The Feilds');
            redirect(base_url() . 'adopt/'.$this->input->post('uniq_id'));
            }
        } 



    
}
 