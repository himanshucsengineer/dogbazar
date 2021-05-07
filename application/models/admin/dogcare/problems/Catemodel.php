

<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Catemodel extends CI_Model
{
  function insert($data)
  {
    return  $this->db->insert('problems_cate', $data);
  }
  public function fetch_data()
  {
    return $this->db->get('problems_cate')->result_array();
  }
  function getCityDepartment($postData){
    $response = array();
 
    // Select record
    $this->db->select('*');
    $this->db->where('cate_name', $postData['cate_name']);
    $q = $this->db->get('problems_cate');
    $response = $q->result_array();

    return $response;
  }
  public function deletecate($data)
  {
    $explodData = explode(',', $data);
    $this->db->where_in('id', $explodData);
    $getDeleteStatus = $this->db->delete('problems_cate');
    if ($getDeleteStatus == 1) {
      return array('message' => 'yes');
    } else {
      return array('message' => 'no');
    }
  }
}


/* End of file Refermodel.php */
