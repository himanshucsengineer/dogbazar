<?php
class Breed extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Breedmodel');
         $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Breedmodel->fetch(); 
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/breed/breed',$data);
        $this->load->view('frontend/template/footer');
    }

    function fetch()
    {
     $output = '';
     $this->load->model('frontend/dogcare/Breedmodel');
     $data = $this->Breedmodel->fetch_data($this->input->post('limit'), $this->input->post('start'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
       $output .= '<div class="card">
                        <div class="inner_card">
                            <a href="'.base_url().'breed/'.$row->link.'"><img src="'.base_url().'upload/dogcare/breed/'.$row->image.'" alt="dog image"> </a>
                            <h3>Name: '.$row->name.'</h3>
                            <h6>Temporent: '.$row->temp.'</h6>
                            <h6>Group: '.$row->grp.'</h6>
                            <div class="breed_but">
                                <a href="'.base_url().'breed/'.$row->link.'"><button>View Breed</button></a>
                            </div>
                        </div>
                    </div>';
      }
     }
     echo $output;
    }
}
