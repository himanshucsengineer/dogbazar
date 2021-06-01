<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Behavemodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('behave_newpost')->result_array();
    }
    function fetch_data($limit, $start)
    {
   
     $this->db->select("*");
     $this->db->from("behave_newpost");
     
     $this->db->order_by("id", "DESC");
     $this->db->limit($limit, $start);
     $query = $this->db->get();
     return $query;
    }

    function fetch_search($limit, $start,$city)
    {
   
     $this->db->select("*");
     $this->db->from("behave_newpost");
     $this->db->where('city',$city);
     $this->db->order_by("id", "DESC");
     $this->db->limit($limit, $start);
     $query = $this->db->get();
     return $query;
    }
}
