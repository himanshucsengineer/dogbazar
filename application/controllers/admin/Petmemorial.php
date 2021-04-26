<?php
    class Petmemorial extends CI_controller{

        public function __construct()
        {
            parent::__construct();
            if(! $this->session->userdata('vendorAuth')){
            redirect('login');}
            $this->load->model('admin/Donationmodel');
           // $this->load->model('frontend/invoicedatamodel');
        }
              
        public function index(){
            
            
            
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/petmemorial');
            $this->load->view('admin/template/footer');
        }
        
        
       
        public function addinventory_api(){

            $getPurchaseData = $this->Donationmodel->fetch_pet_memorial_data();
    
    
            foreach ($getPurchaseData as $key => $value) { 
//                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
    
                $arrya_json[] = array($value['id'],$value['name'],$value['email'],$value['number'],$value['amount'],$value['msg'],$value['order_id'],'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['id'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value['id'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
            }
            
            
            
           
            
           public function deletepetmemodetail(){ 
    
                    if($this->input->post('deletesliderId'))
                {
                  $this->form_validation->set_rules('deletesliderId','text','required');
                  if($this->form_validation->run() == true)
                  {
                    $getDeleteStatus = $this->Donationmodel->delete_pet_memo_data($this->input->post('deletesliderId'));
                    if($getDeleteStatus['message'] == 'yes')
                    {
                      $this->session->set_flashdata('success','Gallery  deleted successfully');
                      redirect(base_url()."admin/petmemorial");
                    }
                    else
                    {
                      $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/petmemorial");
                      
                    }
                  }
                  else
                  {
                    $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/petmemorial");
    
                  }
                }
              }

  
    }

?>