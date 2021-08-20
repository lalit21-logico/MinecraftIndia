<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Blog_add_post_model extends CI_Model
{

  function insert_data($data)
  {
    $this->db->insert("mc_blog", $data);
  }

  function getData($limit, $start)
  {
    $this->db->limit($limit, $start);
    $this->db->order_by("id", "desc");
    $query = $this->db->get('mc_blog');
    return $query->result();
  }

  function get_count()
  {
    return $this->db->count_all('mc_blog');
  }

  function getDataById($key)
  {
    $query = $this->db->get_where('mc_blog', array('id' => $key));
    return $query->result();
  }

  function updateDataById($key, $data)
  {

    $this->db->where('id', $key);
    return $this->db->update('mc_blog', $data);
  }

  function deleteData($key)
  {

    $this->db->delete('mc_blog', array('id' => $key));
    return true;
  }
}
