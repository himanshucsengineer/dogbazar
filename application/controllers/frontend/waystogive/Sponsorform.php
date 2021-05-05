<?php
class Sponsorform extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('admin/dogcare/behave/Allpostmodel');
        //$this->load->helper('url');
    }

    public function index()
    {

        //$data['list'] = $this->Allpostmodel->blog_detail($slug);
        //$data['releted'] = $this->db->where('gender', $data['list']->gender)->order_by('id', 'DESC')->get('behave_newpost')->result();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/waystogive/sponsorform');
        $this->load->view('frontend/template/footer');
    }
}
 