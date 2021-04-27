<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Problemmodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('problems_newpost')->result_array();
    }
}
