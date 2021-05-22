<?php
class Petcare extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Petcaremodel');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Petcaremodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/dogcare/petcare/petcare', $data);
        $this->load->view('frontend/template/footer');
    }

    function fetch_video()
    {
     $output = '';
     $this->load->model('frontend/dogcare/Petcaremodel');
     $data = $this->Petcaremodel->fetch_video($this->input->post('limit'), $this->input->post('start'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
        $output .= '<div class="card">
                        <div class="inner_card">
                            <video src="'.$row->image.'" alt="" controls></video>
                            <h3 class="VIDEOHEEE"><a href="" class="newviesrc" data-bs-toggle="modal" data-video="'.$row->image.'" data-id="'.$row->head.'" data-bs-target="#video">'.$row->head.'</h3>
                        </div>
                    </div>';
      }
     }
     echo $output;
    }
}
