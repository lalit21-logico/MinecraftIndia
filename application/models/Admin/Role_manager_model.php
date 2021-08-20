 <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class Role_manager_model extends CI_Model
    {


        function getRoleList()
        {
            $this->db->select('*');
            $this->db->order_by('role_name', 'asc');
            $query = $this->db->get('mc_user_role');
            return $query->result();
        }

        function getRoleId($roleName)
        {
            $this->db->select('role_id');
            $this->db->from('mc_user_role');
            $this->db->where('mc_user_role.role_name', $roleName);
            $query = $this->db->get('');
            return $query->result();
        }

        function getStaffList()
        {
            //  $this->db->select('*');
            $this->db->from('mc_user_detail');
            $this->db->order_by('role', 'asc');
            $this->db->join('mc_user_role', 'mc_user_detail.role = mc_user_role.role_id');
            $this->db->where('mc_user_role.role_name !=', 'User');
            $query = $this->db->get();
            return $query->result();
        }

        function getUser($userName)
        {

            $this->db->from('mc_user_detail');
            $this->db->where('mc_user_detail.user_name', $userName);
            $this->db->join('mc_user_role', 'mc_user_detail.role = mc_user_role.role_id');
            $query = $this->db->get();

            return $query->result();
        }

        function updateRoleById($userName, $data)
        {
            $this->db->set('role', $data);
            $this->db->where('user_name', $userName);
            $this->db->update('mc_user_detail');
        }

        function updateRoleNameById($userName, $data)
        {
            $this->db->set('apply_for_role', $data);
            $this->db->where('user_name', $userName);
            $this->db->update('mc_user_detail');
        }

        function verificationStatus($userName)
        {
            $this->db->set('verification_status', '1');
            $this->db->where('user_name', $userName);
            $this->db->update('mc_user');
        }


        function DeleteRequest($userName, $userRole)
        {
            $this->db->set('apply_for_role', 'User');
            $this->db->set('role', $userRole);
            $this->db->where('user_name', $userName);
            $this->db->update('mc_user_detail');
        }

        function getUserList()
        {
            $this->db->select('user_name');
            $this->db->order_by('user_name', 'asc');
            $query = $this->db->get('mc_user');
            return $query->result();
        }

        function getData($limit, $start, $filter, $roleName, $roleId)
        {
            $this->db->limit($limit, $start);
            $this->db->select('*');
            $this->db->order_by('mc_user.id', 'desc');
            $this->db->from('mc_user_detail');
            $this->db->where('mc_user_detail.apply_for_role', $roleName);
            if ($filter == "verified") {
                $this->db->where('mc_user_detail.role', $roleId);
            }
            if ($filter == "notVerified") {
                $this->db->where('mc_user_detail.role !=', $roleId);
            }
            $this->db->join('mc_user', 'mc_user.user_name = mc_user_detail.user_name');
            $this->db->join('mc_user_role', 'mc_user_detail.role = mc_user_role.role_id');
            $query    = $this->db->get();
            return $query->result();
        }

        function get_count($filter, $roleName)
        {
            if ($filter == "all") {
                $this->db->from('mc_user_detail');
                $this->db->where('mc_user_detail.apply_for_role', $roleName);
                return $this->db->count_all_results();
            }
            if ($filter == "verified") {
                $this->db->from('mc_user_detail');
                $this->db->where('mc_user_detail.apply_for_role', $roleName);
                $this->db->join('mc_user', 'mc_user.user_name = mc_user_detail.user_name');
                $this->db->where('mc_user.verification_status', '1');
                return $this->db->count_all_results();
            }
            if ($filter == "notVerified") {
                $this->db->from('mc_user_detail');
                $this->db->where('mc_user_detail.apply_for_role', $roleName);
                $this->db->join('mc_user', 'mc_user.user_name = mc_user_detail.user_name');
                $this->db->where('mc_user.verification_status', '0');
                return $this->db->count_all_results();
            }
        }
    }
