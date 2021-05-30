<?php
class Franchies extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Franchiesmodel');
    }

    public function index()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/franchies');
        $this->load->view('frontend/template/footer');
    }

    public function insert_data()
    {
        $this->load->model('frontend/Franchiesmodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mob', 'Subject', 'required');
        $this->form_validation->set_rules('a_mob', 'Message', 'required');
        $this->form_validation->set_rules('edu', 'Name', 'required');
        $this->form_validation->set_rules('buss', 'Email', 'required');
        $this->form_validation->set_rules('p_occu', 'Subject', 'required');
        $this->form_validation->set_rules('social', 'Message', 'required');
        $this->form_validation->set_rules('accommo', 'Name', 'required');
        $this->form_validation->set_rules('c_add', 'Email', 'required');
        $this->form_validation->set_rules('p_add', 'Subject', 'required');
        $this->form_validation->set_rules('have_pet', 'Message', 'required');

        $this->form_validation->set_rules('experia', 'Email', 'required');
        $this->form_validation->set_rules('operate', 'Subject', 'required');
        $this->form_validation->set_rules('career', 'Message', 'required');
        $this->form_validation->set_rules('passion', 'Name', 'required');
        $this->form_validation->set_rules('yeare', 'Email', 'required');
        $this->form_validation->set_rules('skill', 'Subject', 'required');
        $this->form_validation->set_rules('expectations', 'Message', 'required');
        if ($this->form_validation->run()) {

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mob' => $this->input->post('mob'),
                'a_mob' => $this->input->post('a_mob'),

                'edu' => $this->input->post('edu'),
                'buss' => $this->input->post('buss'),
                'p_occu' => $this->input->post('p_occu'),
                'social' => $this->input->post('social'),

                'accommo' => $this->input->post('accommo'),
                'c_add' => $this->input->post('c_add'),
                'p_add' => $this->input->post('p_add'),
                'have_pet' => $this->input->post('have_pet'),

                'experia' => $this->input->post('experia'),
                'operate' => $this->input->post('operate'),
                'operate_ex' => $this->input->post('operate_ex'),
                'career' => $this->input->post('career'),

                'passion' => $this->input->post('passion'),
                'yeare' => $this->input->post('yeare'),
                'skill' => $this->input->post('skill'),
                'expectations' => $this->input->post('expectations'),
            );


           
           
            if ($this->Franchiesmodel->insert_data($data)) {
                $this->session->set_flashdata('success', 'Your data have been submitted');
                redirect(base_url() . "franchies");
            } else {
                $this->session->set_flashdata('error', 'Error In Submission');
                redirect(base_url() . "franchies");
            }
        } else {
            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url() . "franchies");
        }
    }
}
