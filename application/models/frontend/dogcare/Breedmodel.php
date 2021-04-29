<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Breedmodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('breed_newpost')->result_array();
    }
}
