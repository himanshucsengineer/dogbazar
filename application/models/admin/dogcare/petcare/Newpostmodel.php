<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Newpostmodel extends CI_Model
{

  function newpost($datas)
  {
    $this->db->insert('petcare_newpost', $datas);
    return true;
  }

  public function fetch_data()
  {
    return $this->db->get('petcare_newpost')->result_array();
  }
}
