<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newpostmodel extends CI_Model {
    
    function newpost($datas){
        $this->db->insert('givingup_newpost',$datas);
        return true;
    }

     public function fetch_data() {
    return $this->db->get('givingup_newpost')->result_array();
 

  }



}?>