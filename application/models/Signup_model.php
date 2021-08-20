<?php
defined('BASEPATH') or exit('No direct script access allowed');
class signup_model extends CI_Model
{

  function insert_data($data)
  {
    $this->db->insert("mc_user", $data);
  }

  function insert_user_data($userdata)
  {
    $this->db->insert("mc_user_detail", $userdata);
  }

  function getStateList()
  {
    $this->db->select('*');
    $this->db->order_by('name', 'asc');
    $query = $this->db->get('states');
    return $query->result();
  }

  function getCountryList()
  {
    $this->db->select('*');
    $this->db->order_by('name', 'asc');
    $query = $this->db->get('countries');
    return $query->result();
  }

  function getGroupList()
  {
    $this->db->select('*');
    $this->db->order_by('group_name', 'asc');
    $query = $this->db->get('mc_groups');
    return $query->result();
  }

  function getRoleById()
  {
    $query = $this->db->get_where('mc_user_role', array('role_name' => 'User'));
    return $query->result();
  }

  function cannot_exsist($userid)
  {

    $this->db->where('user_name', $userid);
    $query = $this->db->get('mc_user');

    if ($query->num_rows() > 0) {
      return false;
    } else {
      return true;
    }
  }

}
