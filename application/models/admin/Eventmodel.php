<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Eventmodel extends CI_Model
{

  function insert_data($datas)
  {
    $this->db->insert('event', $datas);
    return true;
  }

  public function fetch_data()
  {
    return $this->db->get('event')->result_array();
  }

  public function deletefranchiesdata($data)
  {
    $explodData = explode(',', $data);
    $this->db->where_in('id', $explodData);
    $getDeleteStatus = $this->db->delete('event');
    if ($getDeleteStatus == 1) {
      return array('message' => 'yes');
    } else {
      return array('message' => 'no');
    }
  }
}
