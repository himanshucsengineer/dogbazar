<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Breedmodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('breed_newpost')->result_array();
    }

    function fetch_data($limit, $start)
    {
   
     $this->db->select("*");
     $this->db->from("breed_newpost");
     
     $this->db->order_by("id", "DESC");
     $this->db->limit($limit, $start);
     $query = $this->db->get();
     return $query;
    }
}
