<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Adoptionmodel extends CI_Model
{
  function __construct()
  {
  }
  public function fetchinventory_api()
  {
    return $this->db->get('adoption')->result_array();
  }

  public function fetch_adopted()
  {
    return $this->db->get('adoptedpet')->result_array();
  }
  function update_bank($bank_acc, $id)
  {
    $data = array(
      'account_status' => $bank_acc,

    );



    

    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('adoption', $data);
  }


  function insert_adopted_pet($u_name,$u_email,$u_mob,$u_add,$front,$back,$u_occu,$re_name,$re_mob,$pet_name,
  $pet_color,$pet_age,$pet_breed,$pet_city,$pet_gender,$pet_image)
  {
    $data = array(
      'u_name' => $u_name,
      'u_email' => $u_email,
      'u_mob' => $u_mob,
      'u_add' => $u_add,
      'front' => $front,
      'back' => $back,
      'u_occu' => $u_occu,
      're_name' => $re_name,
      're_mob' => $re_mob,
      'pet_name' => $pet_name,
      'pet_color' => $pet_color,
      'pet_age' => $pet_age,
      'pet_breed' => $pet_breed,
      'pet_city' => $pet_city,
      'pet_gender' => $pet_gender,
      'pet_image' => $pet_image,

    );


    $this->db->insert('adoptedpet', $data);
    return true;
  }

  
  public function deleteuserdata($id)
  {
    
    $this->db->where_in('id', $id);
    $getDeleteStatus = $this->db->delete('adoption');
    if ($getDeleteStatus == 1) {
      return array('message' => 'yes');
    } else {
      return array('message' => 'no');
    }
  }


  public function insert_listed_delete($pet_uniq_id)
  {
    
    $this->db->where_in('id', $pet_uniq_id);
    $getDeleteStatus = $this->db->delete('listdog');
    if ($getDeleteStatus == 1) {
      return array('message' => 'yes');
    } else {
      return array('message' => 'no');
    }
  }
}
