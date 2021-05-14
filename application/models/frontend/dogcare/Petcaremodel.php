<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Petcaremodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('petcare_newpost')->result_array();
    }


    function fetch_video($limit, $start){
        $this->db->select("*");
        $this->db->from("petcare_newpost");
       
        $this->db->order_by("id", "DESC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }
}
