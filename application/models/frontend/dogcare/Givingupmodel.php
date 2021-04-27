<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Givingupmodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('givingup_newpost')->result_array();
    }
}
