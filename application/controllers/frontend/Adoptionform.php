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
        $this->form_validation->set_rules('mob', 'Subject', 'required');
        $this->form_validation->set_rules('city', 'Message', 'required');
        $this->form_validation->set_rules('uniq_id', 'Message', 'required');
        if ($this->form_validation->run()) {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $mob = $this->input->post('mob');
            $city = $this->input->post('city');
            $uniq_id = $this->input->post('uniq_id');
            if ($this->Adoptionmodel->insert_data($name, $email, $mob, $city, $uniq_id)) {
                $this->session->set_flashdata('success', 'Your data have been submitted');
                redirect(base_url() . "adoptpet");
            } else {
                $this->session->set_flashdata('error', 'Error In Submission');
                redirect(base_url() . "adoptpet");
            }
        } else {
            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url() . "adoptpet");
        }
    }
}
