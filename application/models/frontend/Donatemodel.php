<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donatemodel extends CI_Model
{
    function insert_data($data)
    {

        return  $this->db->insert('donate', $data);
    }

    function insert_gift_data($data)
    {

        return  $this->db->insert('giftgiving', $data);
    }
    function insert_pet_memo_data($data)
    {

        return  $this->db->insert('petmemo', $data);
    }
    function insert_spondor_data($data)
    {

        return  $this->db->insert('sponsoranimal', $data);
    }
    public function blog_detail($slug = '')
    {
      return $this->db->where('link', $slug)->get('petmemo')->row();
    }
    function fetch_data($limit, $start)
    {
   
     $this->db->select("*");
     $this->db->from("petmemo");
     
     $this->db->order_by("id", "DESC");
     $this->db->limit($limit, $start);
     $query = $this->db->get();
     return $query;
    }
}
