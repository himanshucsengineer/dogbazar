

<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Catemodel extends CI_Model {
    function insert($data){
      return  $this->db->insert('problems_cate',$data);
  }
 public function fetch_data() {
    return $this->db->get('problems_cate')->result_array();
 

  }
  
   public function deletecate($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('problems_cate');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
   

  
  
  
  
 
 
 
 
}


/* End of file Refermodel.php */
