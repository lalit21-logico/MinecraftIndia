<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Blog_model extends CI_Model
{


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

    function getUser($key)
    {

        $this->db->where('id', $key);
        $query = $this->db->get('mc_blog', array('id' => $key));

        return $query->result();
    }
}
