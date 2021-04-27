<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Petcaremodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('petcare_newpost')->result_array();
    }
}
