<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactmodel extends CI_Model {
    function insert_data($name,$email,$mob,$msg){
        $data = array(
            'name' => $name,
            'email' => $email,
            'number' => $mob,
            'msg' => $msg
        );
    return  $this->db->insert('contact',$data);
    }


    }
?>