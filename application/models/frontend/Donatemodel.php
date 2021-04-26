<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donatemodel extends CI_Model
{
    function insert_data($data)
    {

        return  $this->db->insert('donate', $data);
    }

    function insert_gift_data($data)
    {

        return  $this->db->insert('giftgiving', $data);
    }
    function insert_pet_memo_data($data)
    {

        return  $this->db->insert('petmemo', $data);
    }
    function insert_spondor_data($data)
    {

        return  $this->db->insert('sponsoranimal', $data);
    }
}
