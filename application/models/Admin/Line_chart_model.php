<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Line_chart_model extends CI_Model
{

    function insert_data($data)
    {
        $this->db->insert('mc_user_logs', $data);
    }

    function getUserCount($month, $year)
    {
        $this->db->from('mc_user_logs');
        $this->db->where('year', $year);
        $this->db->where('month', $month);
        $query = $this->db->get();
        return $query->result();
    }

    function check($month, $year)
    {
        $this->db->from('mc_user_logs');
        $this->db->where('year', $year);
        $this->db->where('month', $month);
        return $this->db->count_all_results();
    }

    function update($month, $year, $data)
    {
        $this->db->where('mc_user_logs.year', $year);
        $this->db->where('mc_user_logs.month', $month);
        return $this->db->update('mc_user_logs', $data);
    }

    function getLimitResult($limit)
    {
        $this->db->from('mc_user_logs');
        $this->db->limit($limit);
        $this->db->order_by('id', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
}
