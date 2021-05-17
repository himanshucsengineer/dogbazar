<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Petmemorial extends CI_Model
{
  function __construct()
  {
  }
  public function insert_data()
  {
    return $this->db->get('petmemo')->result_array();
  }

  
}
