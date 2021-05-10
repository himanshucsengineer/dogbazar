<?php
class Adopt extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Listmydogmodel');
    }

    public function index()
    {
        $data['adopt'] = $this->Listmydogmodel->fetch_adopt_all();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/adopt' , $data);
        $this->load->view('frontend/template/footer');
    }
    function fetch()
    {
     $output = '';
     $this->load->model('frontend/Listmydogmodel');
     $data = $this->Listmydogmodel->fetch_data($this->input->post('limit'), $this->input->post('start'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
       $output .= '
       
            <div class="card">
               <a href="'.base_url().'adopt/'.$row->link.'">
                   <div class="card_inner">
                       <h3>'.$row->breed.'</h3>
                       <img src="'.$row->image.'" alt="dog image">
                       <h6>Gender: '.$row->gender.'</h6>
                       <h6>Age: '.$row->age.'</h6>
                       <h6>City: '.$row->city.'</h6>
                       <div class="adop_butt">
                           <a href="'.base_url().'adopt/'.$row->link.'"><button>Adopt Now</button></a>
                       </div>
                   </div>
               </a>
           </div>
           ';
      }
     }
     echo $output;
    }


    function search()
    {
     $output = '';
     $this->load->model('frontend/Listmydogmodel');
     $data = $this->Listmydogmodel->search_fetch_data($this->input->post('limit'), $this->input->post('start'),$this->input->post('search'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
       $output .= '
       
            <div class="card">
               <a href="'.base_url().'adopt/'.$row->link.'">
                   <div class="card_inner">
                       <h3>'.$row->breed.'</h3>
                       <img src="'.$row->image.'" alt="dog image">
                       <h6>Gender: '.$row->gender.'</h6>
                       <h6>Age: '.$row->age.'</h6>
                       <h6>City: '.$row->city.'</h6>
                       <div class="adop_butt">
                           <a href="'.base_url().'adopt/'.$row->link.'"><button>Adopt Now</button></a>
                       </div>
                   </div>
               </a>
           </div>
           ';
      }
     }
     echo $output;
    }
}
