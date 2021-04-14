<?php
    class Franchies extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Franchiesmodel');
    }

    public function index(){
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/franchies');
        $this->load->view('frontend/template/footer');
    }
        
    public function insert_data(){
        $this->load->model('frontend/Franchiesmodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('sub', 'Subject', 'required');
        $this->form_validation->set_rules('msg', 'Message', 'required');
        if ($this->form_validation->run()){ 
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $sub = $this->input->post('sub');
            $msg = $this->input->post('msg');
            if($this->Franchiesmodel->insert_data($name,$email,$sub,$msg) ){
                echo "<h6 class='text-success text-center'>Your data have been submitted</h6>";
                
            }
            else{
                echo "<h6 class='text-danger text-center'>Error In Submission</h6>";
            }
        }
        else{
            echo "<h6 class='text-danger text-center'>Please Fill All The Fields</h6>";    
        }
           
    }
        
        
}

?>  