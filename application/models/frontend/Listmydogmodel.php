<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listmydogmodel extends CI_Model
{
    function insert_data($data)
    {

        return  $this->db->insert('listdog', $data);
    }
    public function fetch_adopt_all()
    {
        return  $this->db->get('listdog')->result_array();
    }
    public function blog_detail($slug = '')
  {
    return $this->db->where('link', $slug)->get('listdog')->row();
  }
  function getCityDepartment($postData){
    $response = array();
 
    // Select record
    $this->db->select('*');
    $this->db->where('city', $postData['course']);
    $q = $this->db->get('listdog');
    $response = $q->result_array();

    return $response;
  }

}
