<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Administrator_model extends CI_Model
{

    function get_user($username)
    {
        $this->db->where('user_name', $username);
        $query = $this->db->get('mc_user_detail', array('user_name' => $username));
        return $query->result();
    }
}
