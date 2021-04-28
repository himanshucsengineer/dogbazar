<?php
class Newpost extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('vendorAuth')) {
            redirect('login');
        }
        //$this->load->model('admin/dogcare/behave/Catemodel');
        $this->load->model('admin/dogcare/breed/Newpostmodel');
    }

    public function index()
    {

        //$data['fetch_category'] = $this->Catemodel->fetch_data();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/dogcare/breed/newpost');
        $this->load->view('admin/template/footer');
    }


    public function post()
    {
        $this->load->model('admin/dogcare/breed/newpostmodel');
        $this->input->post('formSubmit');


        if (!empty($_FILES['images']['name'])) {
            $File_name = '';
            $config['upload_path'] = APPPATH . '../upload/dogcare/breed';
            $config['file_name'] = $File_name;
            $config['overwrite'] = TRUE;
            $config["allowed_types"] = 'jpeg|jpg|png';
            $config["max_size"] = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('images')) {
                $this->data['error'] = $this->upload->display_errors();
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/dogcare/breed/newpost');
            } else {
                $dataimage_return = $this->upload->data();
                $imageurl = base_url() . 'upload/dogcare/breed/' . $dataimage_return['file_name'];
            }
        }




        $datas = array(
            'name' => $this->input->post('name'),
             'height' => $this->input->post('height'),
             'weight' => $this->input->post('weight'),
              'exp' => $this->input->post('exp'),
            'about' => $this->input->post('about'),
            'temp' => $this->input->post('temp'),
            'link' => $this->input->post('link'),
             'grp' => $this->input->post('grp'),

            'image' => $imageurl,
        );
        if ($this->newpostmodel->newpost($datas)) {
            $this->session->set_flashdata('success', 'Post Published');
            redirect(base_url() . 'admin/dogcare/breed/newpost');
        } else {
            $this->session->set_flashdata('error', 'Error In Updating Please Try Again');
            redirect(base_url() . 'admin/dogcare/breed/newpost');
        }
    }
}
