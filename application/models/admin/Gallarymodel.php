<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallarymodel extends CI_Model {
    
    function newpost($datas)
  {
    $this->db->insert('gallary', $datas);
    return true;
  }


  public function fetch_data()
  {
    return $this->db->get('gallary')->result_array();
  }




}?>