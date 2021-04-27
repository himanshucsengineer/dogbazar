

<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Allpostmodel extends CI_Model {

    
    function get_details($id)
{
    $this->db->select('*');
    $this->db->from('givingup_newpost');
    $this->db->where('link',$id);
    $query = $this->db->get();
    return $query->result();
}
   
   function update_pro($head,$content,$id,$link,$imageurl){
      
         $data = array(
                        'head' =>$head,
                        'link' => $link,
                        'content' => $content,
                
                        'id' => $id,
                        'image' => $imageurl,
                      
                    );
                    
        $this->db->set($data);
        $this->db->where('id',$id);
         $this->db->update('givingup_newpost');
    }
    
     public function fetch_data() {
    return $this->db->get('givingup_newpost')->result_array();
   
  }
  
    public function blog_detail($slug = '') {
    return $this->db->where('link',$slug)->get('givingup_newpost')->row();
   
  }
   

  
  public function deleteposts($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('givingup_newpost');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }

  
  
  
  
 
 
 
 
}



