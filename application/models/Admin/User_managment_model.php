<?php
defined('BASEPATH') or exit('No direct script access allowed');
class user_managment_model extends CI_Model
{
    function getData($limit, $start, $filter)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->order_by('mc_user.id', 'desc');
        $this->db->from('mc_user_detail');
        if ($filter == "verified") {
            $this->db->where('mc_user.verification_status', '1');
        }
        if ($filter == "notVerified") {
            $this->db->where('mc_user.verification_status', '0');
        }
        $this->db->join('mc_user', 'mc_user.user_name = mc_user_detail.user_name');
        $this->db->join('mc_user_role', 'mc_user_detail.role = mc_user_role.role_id');
        $query    = $this->db->get();
        return $query->result();
        // $this->db->order_by("id", "desc");
        // $query = $this->db->get('mc_user_detail');
        // return $query->result();
    }

    function get_count($filter)
    {
        if ($filter == "all") {
            return $this->db->count_all('mc_user');
        }
        if ($filter == "verified") {
            $this->db->from('mc_user');
            $this->db->where('mc_user.verification_status', '1');
            return $this->db->count_all_results();  
        }
        if ($filter == "notVerified") {
            $this->db->from('mc_user');
            $this->db->where('mc_user.verification_status', '0');
            return $this->db->count_all_results();
        }
    }

    function getUser($key)
    {

        $this->db->where('id', $key);
        $query = $this->db->get('mc_user', array('id' => $key));

        return $query->result();
    }

    function updateDataById($key, $data)
    {

        $this->db->where('id', $key);
        return $this->db->update('mc_user', $data);
    }
}
