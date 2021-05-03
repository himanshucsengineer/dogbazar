<?php
class Newpost extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('vendorAuth')) {
            redirect('login');
        }
        $this->load->model('admin/dogcare/behave/Catemodel');
        $this->load->model('admin/dogcare/behave/Newpostmodel');
    }

    public function index()
    {

        $data['fetch_category'] = $this->Catemodel->fetch_data();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/dogcare/behave/newpost', $data);
        $this->load->view('admin/template/footer');
    }


    public function post()
    {
        $this->load->model('admin/dogcare/behave/newpostmodel');
        $this->input->post('formSubmit');


        if (!empty($_FILES['images']['name'])) {
            $File_name = '';
            $config['upload_path'] = APPPATH . '../upload/dogcare/behave';
            $config['file_name'] = $File_name;
            $config['overwrite'] = TRUE;
            $config["allowed_types"] = 'jpeg|jpg|png';
            $config["max_size"] = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('images')) {
                $this->data['error'] = $this->upload->display_errors();
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/dogcare/behave/newpost');
            } else {
                $dataimage_return = $this->upload->data();
                $imageurl = base_url() . 'upload/dogcare/behave/' . $dataimage_return['file_name'];
            }
        }
        $str = $this->input->post('name');
    
       
        $code = '';
        for ($i = 0; $i < 10; $i++) {
            $code .= mt_rand(0, 9);
        }
        $new_url = $str . "" . $code;
       



        $datas = array(
            'name' => $this->input->post('name'),
             'age' => $this->input->post('age'),
             'color' => $this->input->post('color'),
              'gender' => $this->input->post('gender'),
            'about' => $this->input->post('about'),
         
            'link' => $new_url,
            

            'image' => $imageurl,
        );
        if ($this->newpostmodel->newpost($datas)) {
            $this->session->set_flashdata('success', 'Dog Listed');
            redirect(base_url() . 'admin/dogcare/behave/newpost');
        } else {
            $this->session->set_flashdata('error', 'Error In Updating Please Try Again');
            redirect(base_url() . 'admin/dogcare/behave/newpost');
        }
    }
}
