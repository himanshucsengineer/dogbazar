<?php
    class Petcare extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        
    }

        public function index(){
            
           
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            
            $this->load->view('frontend/petcare/petcare');
            $this->load->view('frontend/template/footer');

        }
        
         
        
        
}

?>  