<?php
class Nutrition extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Nutritionmodel');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Nutritionmodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/nutrition/nutrition', $data);
        $this->load->view('frontend/template/footer');
    }

    function fetch()
    {
     $output = '';
     $this->load->model('frontend/dogcare/Nutritionmodel');
     $data = $this->Nutritionmodel->fetch_data($this->input->post('limit'), $this->input->post('start'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
        
          
                $str = $row->content;
                $result = substr($str, 0, 200); 
       $output .= '
       
            <div class="card">
              
                   <div class="inner_card">
                   <a href="'.base_url().'nutrition/'.$row->link.'"><img src="'.$row->image.'" alt="dog image"> </a>
                       <h3>'.$row->head.'</h3>
                       <p>'.$result.'....<a href="'.base_url().'nutrition/'.$row->link.'">Read More</a></p>
                   </div>
              
           </div>
           ';
      }
     }
     echo $output;
    }




    function fetch_video()
    {
     $output = '';
     $this->load->model('frontend/dogcare/Nutritionmodel');
     $data = $this->Nutritionmodel->fetch_video($this->input->post('limit'), $this->input->post('start'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
        $output .= '<div class="card">
                        <div class="inner_card">
                            <video src="'.$row->image.'" alt="" controls></video>
                            <h3>'.$row->head.'</h3>
                            <div class="watch">
                                <button data-bs-toggle="modal" data-video="'.$row->image.'" data-id="'.$row->head.'" data-bs-target="#video" class="vdeoscr">Watch Video</button>
                            </div>
                        </div>
                    </div>';
      }
     }
     echo $output;
    }
}
