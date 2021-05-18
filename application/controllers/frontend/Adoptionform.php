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
 