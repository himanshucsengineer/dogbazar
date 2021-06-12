<?php
class Newpost extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('vendorAuth')) {
            redirect('login');
        }
        $this->load->model('admin/dogcare/grooming/Catemodel');
        $this->load->model('admin/dogcare/grooming/Newpostmodel');
    }

    public function index()
    {

        $data['fetch_category'] = $this->Catemodel->fetch_data();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/dogcare/grooming/newpost', $data);
        $this->load->view('admin/template/footer');
    }


    public function post()
    {
        $this->load->model('admin/dogcare/grooming/newpostmodel');
        $this->input->post('formSubmit');


        if (!empty($_FILES['images']['name'])) {
            $File_name = '';
            $config['upload_path'] = APPPATH . '../upload/dogcare/grooming';
            $config['file_name'] = $File_name;
            $config['overwrite'] = TRUE;
            $config["allowed_types"] = 'jpeg|jpg|png|mp4';
            $config["max_size"] = '';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('images')) {
                $this->data['error'] = $this->upload->display_errors();
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/dogcare/grooming/newpost');
            } else {
                $dataimage_return = $this->upload->data();
                $imageurl = $dataimage_return['file_name'];
            }
        }
        if($this->input->post('images')==''){
            $imageu = $imageurl;
        }else{
            $imagefullurl = $this->input->post('images');
            $base = explode("=",$imagefullurl);
            $finalurl = "https://www.youtube.com/embed/".$base[1];
            $imageu= $finalurl;
            
        }
        $link = $this->input->post('link');
        $link = str_replace(' ', '-', $link);




        $datas = array(
            'head' => $this->input->post('heading'),
             'subcategory' => $this->input->post('subcategory'),
            // 'm_desc' => $this->input->post('mdesc'),
            // 'm_key' => $this->input->post('mkey'),
            'content' => $this->input->post('content'),
            'cate' => $this->input->post('category'),
            'link' => $link,
            //'tag' => $this->input->post('tags'),

            'image' => $imageu,
        );
        if ($this->newpostmodel->newpost($datas)) {
            $this->session->set_flashdata('success', 'Post Published');
            redirect(base_url() . 'admin/dogcare/grooming/newpost');
        } else {
            $this->session->set_flashdata('error', 'Error In Updating Please Try Again');
            redirect(base_url() . 'admin/dogcare/grooming/newpost');
        }
    }
}
