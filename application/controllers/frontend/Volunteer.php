<?php
class Volunteer extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Volunteermodel');
    }

    public function index()
    {


        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/volunteer');
        $this->load->view('frontend/template/footer');
    }
    public function insert_data()
    {
        $this->load->model('frontend/Volunteermodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mob', 'Mobile Number', 'required');
        $this->form_validation->set_rules('state', 'Qualification', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('add', 'Address', 'required');
        $this->form_validation->set_rules('zip', 'Address', 'required');
        $this->form_validation->set_rules('age', 'Address', 'required');
        $this->form_validation->set_rules('work', 'Address', 'required');
        $this->form_validation->set_rules('msg', 'Address', 'required');
        if ($this->form_validation->run()) {

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'number' => $this->input->post('mob'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'addrs' => $this->input->post('add'),
                'zip' => $this->input->post('zip'),
                'age' => $this->input->post('age'),
                'work' => $this->input->post('work'),
                'message' => $this->input->post('msg'),
            );

            if ($this->Volunteermodel->insert_data($data)) {
                $this->session->set_flashdata('success', 'Your data have been submitted');
                redirect(base_url() . "volunteer");
            } else {
                $this->session->set_flashdata('error', 'Error In Submission');
                redirect(base_url() . "volunteer");
            }
        } else {
            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url() . "volunteer");
        }
    }
}
