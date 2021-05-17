<?php
class Petmemorial extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {


        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/waystogive/petmemorial');
        $this->load->view('frontend/template/footer');
    }

    function fetch()
    {
     $output = '';
     $this->load->model('frontend/donatemodel');
     $data = $this->donatemodel->fetch_data($this->input->post('limit'), $this->input->post('start'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
        
          
                $str = $row->about;
                $result = substr($str, 0, 200); 
       $output .= '<div class="card">
                        <h3>'.$row->name.'</h3>
                        <div class="inner_card">
                            <a href="'.base_url().'petmemorial/'.$row->link.'"><img src="'.$row->image.'" alt="dog image"> </a>
                            <h5>'.$result.'</h5>
                            <div class="sponsor_buttt">
                                <a href="'.base_url().'petmemorial/'.$row->link.'"><button>View Memorial</button></a>
                            </div>
                        </div>
                    </div>';
      }
     }
     echo $output;
    }
}
