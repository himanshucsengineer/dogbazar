<?php
class Givingup extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Givingupmodel');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Givingupmodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/givingup/givingup', $data);
        $this->load->view('frontend/template/footer');
    }
 
    function fetch()
    {
     $output = '';
     $this->load->model('frontend/dogcare/Givingupmodel');
     $data = $this->Givingupmodel->fetch_data($this->input->post('limit'), $this->input->post('start'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
        
          
                $str = $row->content;
                $result = substr($str, 0, 200); 
       $output .= '
       
            <div class="card">
              
                   <div class="inner_card">
                   <a href="'.base_url().'givingup/'.$row->link.'"><img src="'.base_url().'upload/dogcare/givingup/'.$row->image.'" alt="dog image"> </a>
                       <h3>'.$row->head.'</h3>
                       <p>'.$result.'....<a href="'.base_url().'givingup/'.$row->link.'">Read More</a></p>
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
     $this->load->model('frontend/dogcare/Givingupmodel');
     $data = $this->Givingupmodel->fetch_video($this->input->post('limit'), $this->input->post('start'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
        $output .= '<div class="card">
                        <div class="inner_card">
                        <iframe src="'.$row->image.'" ></iframe>
                            <h3 class="VIDEOHEEE"><a href="" class="newviesrc" data-bs-toggle="modal" data-video="'.$row->image.'" data-id="'.$row->head.'" data-bs-target="#video">'.$row->head.'</h3>
                        </div>
                    </div>';
      }
     }
     echo $output;
    }
}
