<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ad_Role_Manager extends CI_Controller
{
    public function index()
    {

        if ($this->verification()) {
            $this->load->model('Admin/Administrator_model');
            $data['data'] = $this->Administrator_model->get_user($_SESSION['userName']);
            $data['name'] = $data['data'][0]->user_name;
            $data['image'] = $data['data'][0]->user_image;

            $this->load->model('Admin/Role_manager_model');
            $data['result'] = $this->Role_manager_model->getRoleList();
            $data['userList'] = $this->Role_manager_model->getUserList();
            $data['staffList'] = $this->Role_manager_model->getStaffList();
            $data['set'] = 'first';

            $this->load->view('admin/ad-head/ad-head');
            $this->load->view('admin/ad-nav/ad-nav', $data);
            $this->load->view('admin/ad-nav/ad-nav-1');
            $this->load->view('admin/ad-nav/ad-nav-2');
            $this->load->view('admin/ad-nav/ad-nav-3');
            $this->load->view('admin/ad-nav/ad-nav-4');
            $this->load->view('admin/ad-nav/ad-nav-5');
            $this->load->view('admin/ad-nav/ad-nav-6');
            $this->load->view('admin/ad-nav/ad-nav-7');
            $this->load->view('admin/ad-nav/ad-nav-8');
            $this->load->view('admin/ad-nav/ad-nav-9');
            $this->load->view('admin/role-manager', $data);
            $this->load->view('admin/ad-foot');
        }
    }

    public function getList($filter)
    {
        if ($this->verification()) {

            
            $this->load->model('Admin/Administrator_model');
            $data['data'] = $this->Administrator_model->get_user($_SESSION['userName']);
            $data['name'] = $data['data'][0]->user_name;
            $data['image'] = $data['data'][0]->user_image;
            if (isset($_POST['roleName'])) {
                $_SESSION['roleName'] = $_POST['roleName'];
            }
            $this->load->model('Admin/Role_manager_model');
            $roleName =  $_SESSION['roleName'];
            if($roleName == NULL){
                $roleName = 'User';
            }
            $data['roleId'] =  $this->Role_manager_model->getRoleId($roleName);
            $roleId = $data['roleId'][0]->role_id;
            $this->load->helper('url');
            $this->load->library("pagination");
            $this->load->config('pagination');
            $config = $this->config->item('pagination_config');
            $this->load->model('Admin/Role_manager_model');

            $config["base_url"] = base_url() . "Admin/Ad_Role_Manager/getList/" . $filter;
            $config["total_rows"] = $this->Role_manager_model->get_count($filter, $roleName);
            $config["per_page"] = 5;
            $config["uri_segment"] = 5;

            $this->pagination->initialize($config);
            $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
            $data["links"] = $this->pagination->create_links();
            $data['result'] = $this->Role_manager_model->getData($config["per_page"], $page, $filter, $roleName, $roleId);
            $data['page'] = $page;
            $_SESSION['page'] = $filter . "/" . $page;
            $data['set'] = 'second';
            $this->load->view('admin/ad-head/ad-head');
            $this->load->view('admin/ad-nav/ad-nav', $data);
            $this->load->view('admin/ad-nav/ad-nav-1');
            $this->load->view('admin/ad-nav/ad-nav-2');
            $this->load->view('admin/ad-nav/ad-nav-3');
            $this->load->view('admin/ad-nav/ad-nav-4');
            $this->load->view('admin/ad-nav/ad-nav-5');
            $this->load->view('admin/ad-nav/ad-nav-6');
            $this->load->view('admin/ad-nav/ad-nav-7');
            $this->load->view('admin/ad-nav/ad-nav-8');
            $this->load->view('admin/ad-nav/ad-nav-9');
            $this->load->view('admin/role-manager', $data);
            $this->load->view('admin/ad-foot');
        }
    }

    public function deleteRequest($userName)
    {
        if ($this->verification()) {
            $this->load->model('Admin/Role_manager_model');
            $data['roleId'] =  $this->Role_manager_model->getRoleId('User');
            $userRole = $data['roleId'][0]->role_id;
            $this->Role_manager_model->DeleteRequest($userName, $userRole);
            $this->session->set_flashdata('message', 'Sucessfully deleted.');
            redirect(base_url() . "Admin/Ad_Role_Manager/getList/" . $_SESSION['page']);
        }
    }

    public function assignRole($userName, $rolId)
    {
        if ($this->verification()) {
            $this->load->model('Admin/Role_manager_model');
            $this->Role_manager_model->updateRoleById($userName, $rolId);
            $this->Role_manager_model->verificationStatus($userName);
            $this->session->set_flashdata('message', 'Sucessfully Assigned role.');
            redirect(base_url() . "Admin/Ad_Role_Manager/getList/" . $_SESSION['page']);
        }
    }

    public function getUser()
    {
        if ($this->verification()) {
            $this->load->model('Admin/Administrator_model');
            $data['data'] = $this->Administrator_model->get_user($_SESSION['userName']);
            $data['name'] = $data['data'][0]->user_name;
            $data['image'] = $data['data'][0]->user_image;

            $username = $_POST['user'];
            $this->load->model('Admin/Role_manager_model');
            $data['result'] = $this->Role_manager_model->getRoleList();
            $data['user'] = $this->Role_manager_model->getUser($username);
            $data['set'] = 'third';

            $this->load->view('admin/ad-head/ad-head');
            $this->load->view('admin/ad-nav/ad-nav', $data);
            $this->load->view('admin/ad-nav/ad-nav-1');
            $this->load->view('admin/ad-nav/ad-nav-2');
            $this->load->view('admin/ad-nav/ad-nav-3');
            $this->load->view('admin/ad-nav/ad-nav-4');
            $this->load->view('admin/ad-nav/ad-nav-5');
            $this->load->view('admin/ad-nav/ad-nav-6');
            $this->load->view('admin/ad-nav/ad-nav-7');
            $this->load->view('admin/ad-nav/ad-nav-8');
            $this->load->view('admin/ad-nav/ad-nav-9');
            $this->load->view('admin/role-manager', $data);
            $this->load->view('admin/ad-foot');
        }
    }

    
    public function updateRole($userName)
    {
        if ($this->verification()) {
            $rolName = $_POST['roleName'];
            $this->load->model('Admin/Role_manager_model');
            $data['roleId'] =  $this->Role_manager_model->getRoleId($rolName);
            $rolId = $data['roleId'][0]->role_id;
            $this->Role_manager_model->updateRoleById($userName, $rolId);
            $this->Role_manager_model->updateRoleNameById($userName, $rolName);
            $this->Role_manager_model->verificationStatus($userName);

            $this->load->model('Admin/Administrator_model');
            $data['data'] = $this->Administrator_model->get_user($_SESSION['userName']);
            $data['name'] = $data['data'][0]->user_name;
            $data['image'] = $data['data'][0]->user_image;
            $this->load->model('Admin/Role_manager_model');
            $data['result'] = $this->Role_manager_model->getRoleList();
            $data['user'] = $this->Role_manager_model->getUser($userName);
            $data['set'] = 'third';
            $this->session->set_flashdata('message', 'Sucessfully updated.');

            $this->load->view('admin/ad-head/ad-head');
            $this->load->view('admin/ad-nav/ad-nav', $data);
            $this->load->view('admin/ad-nav/ad-nav-1');
            $this->load->view('admin/ad-nav/ad-nav-2');
            $this->load->view('admin/ad-nav/ad-nav-3');
            $this->load->view('admin/ad-nav/ad-nav-4');
            $this->load->view('admin/ad-nav/ad-nav-5');
            $this->load->view('admin/ad-nav/ad-nav-6');
            $this->load->view('admin/ad-nav/ad-nav-7');
            $this->load->view('admin/ad-nav/ad-nav-8');
            $this->load->view('admin/ad-nav/ad-nav-9');
            $this->load->view('admin/role-manager', $data);
            $this->load->view('admin/ad-foot');
            
            
        }
    }



    private function verification()
    {
        if (isset($_SESSION['roleId'])) {
            $this->load->model('Login_model');
            $roleName['data'] = $this->Login_model->get_role_name($_SESSION['roleId']);
            if ($roleName['data'][0]->role_name == "Admin" && ($this->session->userdata('mc_user') != '')  && $_SESSION['Admin'] == true) {

                $_SESSION["role"] = "Admin";
                return true;
            } else {

                redirect(base_url() . "My_error");
            }
        } else {

            redirect(base_url() . "My_error");
        }
    }
}
