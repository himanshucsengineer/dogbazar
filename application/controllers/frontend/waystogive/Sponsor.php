<?php
class Sponsor extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/dogcare/Behavemodel');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['blogs'] = $this->Behavemodel->fetch();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/waystogive/sponsor',$data);
        $this->load->view('frontend/template/footer');
    }

    function fetch()
    {
     $output = '';
     $this->load->model('frontend/dogcare/Behavemodel');
     $data = $this->Behavemodel->fetch_data($this->input->post('limit'), $this->input->post('start'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
            $output .= '<div class="card">
                            <a href="'.base_url().'sponsorpet/'.$row->link.'">
                                <h3>'.$row->name.'</h3>
                                <div class="inner_card">
                                    <img src="'.base_url().'upload/dogcare/behave/'.$row->image.'">
                                    <h5>Gender: '.$row->gender.'</h5>
                                    <h5>Age: '.$row->age.'</h5>
                                    <div class="sponsor_buttt">
                                        <button>Sponsor Me</button>
                                    </div>
                                </div>
                            </a>
                        </div>';
      }
     }
     echo $output;
    }


    function search()
    {
     $output = '';
     $this->load->model('frontend/dogcare/Behavemodel');
     $data = $this->Behavemodel->fetch_search($this->input->post('limit'), $this->input->post('start'),$this->input->post('city'));
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
            $output .= '<div class="card">
                            <a href="'.base_url().'sponsorpet/'.$row->link.'">
                                <h3>'.$row->name.'</h3>
                                <div class="inner_card">
                                    <img src="'.base_url().'upload/dogcare/behave/'.$row->image.'">
                                    <h5>Gender: '.$row->gender.'</h5>
                                    <h5>Age: '.$row->age.'</h5>
                                    <div class="sponsor_buttt">
                                        <button>Sponsor Me</button>
                                    </div>
                                </div>
                            </a>
                        </div>';
      }
     }
     echo $output;
    }
}
