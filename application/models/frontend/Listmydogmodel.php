<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listmydogmodel extends CI_Model
{
    function insert_data($data)
    {

        return  $this->db->insert('listdog', $data);
    }
    public function fetch_dogs($id)
    {
        return  $this->db->where('email', $id)->get('listdog')->result_array();
    }
}
