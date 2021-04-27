<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Behavemodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('behave_newpost')->result_array();
    }
}
