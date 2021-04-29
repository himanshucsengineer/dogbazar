<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adoptionmodel extends CI_Model
{
    function insert_data($name, $email, $mob, $city, $uniq_id)
    {
        $data = array(
            'name' => $name,
            'email' => $email,
            'number' => $mob,
            'city' => $city,
            'uniq_id' => $uniq_id
        );
        return  $this->db->insert('adoption', $data);
    }
}
