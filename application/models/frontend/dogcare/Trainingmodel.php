<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trainingmodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('training_newpost')->result_array();
    }
}
