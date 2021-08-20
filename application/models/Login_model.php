<?php
defined('BASEPATH') or exit('No direct script access allowed');
class login_model extends CI_Model
{


  function can_login($username, $password)
  {

    $this->db->where('user_name', $username);
    $this->db->where('password', $password);
    $query = $this->db->get('mc_user', array('user_name' => $username, 'password' => $password));

    if ($query->num_rows() == 1) {
      return true;
    } else {
      return false;
    }
  }

  function get_user($username)
  {

    $this->db->where('user_name', $username);
    $query = $this->db->get('mc_user', array('user_name' => $username));

    return $query->result();
  }

  function get_role($username)
  {

    $this->db->where('user_name', $username);
    $query = $this->db->get('mc_user_detail', array('user_name' => $username));

    return $query->result();
  }

  function get_role_name($roleId)
  {

    $this->db->where('role_id', $roleId);
    $query = $this->db->get('mc_user_role', array('role_id' => $roleId));

    return $query->result();
  }
}
