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
  public function delete_data($data)
  {
    $explodData = explode(',', $data);
    $this->db->where_in('id', $explodData);
    $getDeleteStatus = $this->db->delete('gallary');
    if ($getDeleteStatus == 1) {
      return array('message' => 'yes');
    } else {
      return array('message' => 'no');
    }
  }



}?>