<?php
class Newpost extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('vendorAuth')) {
            redirect('login');
        }
        //$this->load->model('admin/dogcare/petcare/Catemodel');
        $this->load->model('admin/dogcare/petcare/Newpostmodel');
    }

    public function index()
    {

        //$data['fetch_category'] = $this->Catemodel->fetch_data();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/dogcare/petcare/newpost');
        $this->load->view('admin/template/footer');
    }


    public function post()
    {
        $this->load->model('admin/dogcare/petcare/newpostmodel');
        $this->input->post('formSubmit');


  
        $imagefullurl = $this->input->post('images');
        $base = explode("=",$imagefullurl);
        $finalurl = "https://www.youtube.com/embed/".$base[1];
        $imageu= $finalurl;



        $datas = array(
            'head' => $this->input->post('heading'),
            //'mt_title' => $this->input->post('mtitle'),
            // 'm_desc' => $this->input->post('mdesc'),
            //  'm_key' => $this->input->post('mkey'),
            //'content' => $this->input->post('content'),
            //'cate' => $this->input->post('category'),
            //'link' => $link,
            //'tag' => $this->input->post('tag'),

            'image' => $imageu,
        );
        if ($this->newpostmodel->newpost($datas)) {
            $this->session->set_flashdata('success', 'Post Published');
            redirect(base_url() . 'admin/dogcare/petcare/newpost');
        } else {
            $this->session->set_flashdata('error', 'Error In Updating Please Try Again');
            redirect(base_url() . 'admin/dogcare/petcare/newpost');
        }
    }
}
