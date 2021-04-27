<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Nutritionmodel extends CI_Model
{

    public function fetch()
    {
        return $this->db->get('nutrition_newpost')->result_array();
    }
}
