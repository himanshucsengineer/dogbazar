

<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Allpostmodel extends CI_Model
{


  function get_details($id)
  {
    $this->db->select('*');
    $this->db->from('petcare_newpost');
    $this->db->where('link', $id);
    $query = $this->db->get();
    return $query->result();
  }

  function update_pro($head, $content, $id, $link, $imageurl)
  {

    $data = array(
      'head' => $head,
      'link' => $link,
      'content' => $content,
      // 'tag' => $tag,
      'id' => $id,
      'image' => $imageurl,
      // 'mt_title' => $mtitle,
      // 'm_desc' => $mdesc,
      //'m_key' => $mkey
    );

    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('petcare_newpost');
  }

  public function fetch_data()
  {
    return $this->db->get('petcare_newpost')->result_array();
  }

  public function blog_detail($slug = '')
  {
    return $this->db->where('link', $slug)->get('petcare_newpost')->row();
  }



  public function deleteposts($data)
  {
    $explodData = explode(',', $data);
    $this->db->where_in('id', $explodData);
    $getDeleteStatus = $this->db->delete('petcare_newpost');
    if ($getDeleteStatus == 1) {
      return array('message' => 'yes');
    } else {
      return array('message' => 'no');
    }
  }
}
