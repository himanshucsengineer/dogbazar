<?php
class Getting extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Gettingmodel');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Gettingmodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/getting/behave', $data);
        $this->load->view('frontend/template/footer');
    }


    function fetch()
    {
     $output = '';
     $this->load->model('frontend/dogcare/Gettingmodel');
     $data = $this->Gettingmodel->fetch_data($this->input->post('limit'), $this->input->post('start'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
        
          
                $str = $row->content;
                $result = substr($str, 0, 200); 
       $output .= '
       
            <div class="card">
              
                   <div class="inner_card">
                   <a href="'.base_url().'getting/'.$row->link.'"><img src="'.base_url().'upload/dogcare/getting/'.$row->image.'" alt="dog image"> </a>
                       <h3>'.$row->head.'</h3>
                       <p>'.$result.'....<a href="'.base_url().'getting/'.$row->link.'">Read More</a></p>
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
     $this->load->model('frontend/dogcare/Gettingmodel');
     $data = $this->Gettingmodel->fetch_video($this->input->post('limit'), $this->input->post('start'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
        $output .= '<div class="card">
                        <div class="inner_card">
                            <video src="'.base_url().'upload/dogcare/getting/'.$row->image.'" alt="" controls></video>
                            <h3 class="VIDEOHEEE"><a href="" class="newviesrc" data-bs-toggle="modal" data-video="'.base_url().'upload/dogcare/getting/'.$row->image.'" data-id="'.$row->head.'" data-bs-target="#video">'.$row->head.'</h3>
                        </div>
                    </div>';
      }
     }
     echo $output;
    }
}
