<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Groomingmodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('grooming_newpost')->result_array();
    }
}
