<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gettingmodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('getting_newpost')->result_array();
    }
}
