<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Newpostmodel extends CI_Model
{

  function newpost($datas)
  {
    $this->db->insert('grooming_newpost', $datas);
    return true;
  }

  public function fetch_data()
  {
    return $this->db->get('grooming_newpost')->result_array();
  }
}
