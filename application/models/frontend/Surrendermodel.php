<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Surrendermodel extends CI_Model
{

  function newpost($datas)
  {
    $this->db->insert('surrender', $datas);
    return true;
  }

  public function fetch_data()
  {
    return $this->db->get('behave_newpost')->result_array();
  }
}
