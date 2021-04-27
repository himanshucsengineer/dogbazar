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
        $this->form_validation->set_rules('edu', 'Qualification', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('add', 'Address', 'required');
        if ($this->form_validation->run()) {

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'number' => $this->input->post('mob'),
                'quali' => $this->input->post('edu'),
                'city' => $this->input->post('city'),
                'addrs' => $this->input->post('add'),
            );

            if ($this->Volunteermodel->insert_data($data)) {
                echo "<h6 class='text-success text-center'>Your data have been submitted</h6>";
            } else {
                echo "<h6 class='text-danger text-center'>Error In Submission</h6>";
            }
        } else {
            echo "<h6 class='text-danger text-center'>Please Fill All The Fields</h6>";
        }
    }
}
