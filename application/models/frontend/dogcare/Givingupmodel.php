<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Givingupmodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('givingup_newpost')->result_array();
    }
    function fetch_data($limit, $start)
 {

  $this->db->select("*");
  $this->db->from("givingup_newpost");
  $this->db->where("cate",'news');
  $this->db->order_by("id", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

 function fetch_video($limit, $start)
 {

  $this->db->select("*");
  $this->db->from("givingup_newpost");
  $this->db->where("cate",'video');
  $this->db->order_by("id", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }
}
