<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatemodel extends CI_Model {
    function insert_data($data){
        
    return  $this->db->insert('donate',$data);
    }


    }
?>