<?php
class Listmydog extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Listmydogmodel');
    }

    public function index()
    {


        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/user/listmydog');
        $this->load->view('frontend/template/footer');
    }





    public function insert()
    {
        $this->load->model('frontend/Listmydogmodel');


        $this->input->post('formSubmit');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('number', 'Number', 'required');
        $this->form_validation->set_rules('age', 'Dog Age', 'required');
        $this->form_validation->set_rules('breed', 'Breed', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('condition', 'Condition', 'required');
        $this->form_validation->set_rules('msg', 'Message', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        if ($this->form_validation->run()) {


            if (!empty($_FILES['images']['name'])) {

                $File_name = 'userimage-' . strtotime(date('YmdHis'));

                $config['upload_path'] = APPPATH . '../upload/listdog';
                $config['file_name'] = $File_name;
                $config['overwrite'] = TRUE;
                $config["allowed_types"] = 'png|jpg|jpeg';
                $config["max_size"] = 2048;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('images')) {

                    $this->data['error'] = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $this->upload->display_errors());

                    redirect('frontend/user/listmydog');
                } else {
                    $dataimage_return = $this->upload->data();
                    $imageurl = base_url() . 'upload/listdog/' . $dataimage_return['file_name'];
                }
            }

            $str = $this->input->post('email');
            $em1 = explode("@", $str);
            $str2 = $this->input->post('breed');
            $code = '';
            for ($i = 0; $i < 5; $i++) {
                $code .= mt_rand(0, 9);
            }
            $new_url = $str2 . "" . $em1[0] . "" . $code;

            $this->input->post('breed');

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'number' => $this->input->post('number'),
                'age' => $this->input->post('age'),
                'breed' => $this->input->post('breed'),
                'gender' => $this->input->post('gender'),
                'condition' => $this->input->post('condition'),
                'msg' => $this->input->post('msg'),
                'city' => $this->input->post('city'),
                'image' => $imageurl, 
                'link' => $new_url
            );
            if ($this->Listmydogmodel->insert_data($data)) {
                $this->session->set_flashdata('success', 'Listed Successful');
                redirect(base_url() . 'listmydog');
            } else {
                $this->session->set_flashdata('error', 'Error In Submistion');
                redirect(base_url() . 'listmydog');
            }
        } else {
            $this->session->set_flashdata('error', 'Please Fill All The Feilds');
            redirect(base_url() . 'listmydog');
        }
    }
}
