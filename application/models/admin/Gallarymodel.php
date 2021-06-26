<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallarymodel extends CI_Model {
    
    function newpost($datas)
  {
    $this->db->insert('gallary', $datas);
    return true;
  }


  function insert($data)
  {
    $this->db->insert('gallary_cate', $data);
    return true;
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



  public function fetch_data($slug = '')
  {
    return $this->db->where('link', $slug)->get('gallary')->result_array();
  }

  public function fetch_cate()
  {
    return $this->db->get('gallary_cate')->result_array();
  }
  public function delete_cate($data)
  {
    $explodData = explode(',', $data);
    $this->db->where_in('id', $explodData);
    $getDeleteStatus = $this->db->delete('gallary_cate');
    if ($getDeleteStatus == 1) {
      return array('message' => 'yes');
    } else {
      return array('message' => 'no');
    }
  }

}?>