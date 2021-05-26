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
    return $this->db->where('id', $slug)->get('listdog')->row();
  }
  function fetch_data($limit, $start)
 {

  $this->db->select("*");
  $this->db->from("listdog");
  $this->db->order_by("id", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

 function search_fetch_data($limit, $start,$search)
 {

  $this->db->select("*");
  $this->db->from("listdog");
  $this->db->where("city",$search);
  $this->db->order_by("id", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

}
