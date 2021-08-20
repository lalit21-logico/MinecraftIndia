<?php
defined('BASEPATH') or exit('No direct script access allowed');
class career_model extends CI_Model
{

    function getRoleList()
    {
        $this->db->select('*');
        $this->db->order_by('role_name', 'asc');
        $this->db->where('mc_user_role.role_name !=', 'Admin');
        $this->db->where('mc_user_role.role_name !=', 'User');
        $query = $this->db->get('mc_user_role');
        return $query->result();
    }

    function updateDataById($username, $data)
    {
        $this->db->where('user_name', $username);
      return $this->db->update('mc_user_detail', $data);
    }
}
