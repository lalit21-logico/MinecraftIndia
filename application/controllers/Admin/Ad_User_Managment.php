<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ad_User_Managment extends CI_Controller
{

        public function getData($filter)
        {
                if ($this->verification()) {
                        //Add post
                        $this->load->model('Admin/Administrator_model');
                        $data['data'] = $this->Administrator_model->get_user($_SESSION['userName']);
                        $data['name'] = $data['data'][0]->user_name;
                        $data['image'] = $data['data'][0]->user_image;


                        $this->load->helper('url');
                        $this->load->library("pagination");
                        $this->load->config('pagination');
                        $config = $this->config->item('pagination_config');
                        $this->load->model('Admin/user_managment_model');


                        $config["base_url"] = base_url() . "Admin/Ad_User_Managment/getData/" . $filter;
                        $config["total_rows"] = $this->user_managment_model->get_count($filter);
                        $config["per_page"] = 5;
                        $config["uri_segment"] = 5;

                        $this->pagination->initialize($config);
                        $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
                        $data["links"] = $this->pagination->create_links();
                        $data['result'] = $this->user_managment_model->getData($config["per_page"], $page, $filter);
                        $data['page'] = $page;
                        $_SESSION['page'] = $filter . "/" . $page;

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
                        $this->load->view('admin/user-managment', $data);
                        $this->load->view('admin/ad-foot');
                }
        }


        public function ChangeUserStatus($key)
        {

                if ($this->verification()) {

                        $key = base64_decode($key);
                        $this->load->model('Admin/user_managment_model');
                        $data1['data'] = $this->user_managment_model->getUser($key);
                        $verification = $data1['data'][0]->verification_status;
                        if ($verification == 0) {
                                $this->session->set_flashdata('message', 'Assigned as verified user.');
                                $data = array(
                                        "verification_status" => 1
                                );
                        } else {
                                $this->session->set_flashdata('message', 'Assigned as not verified user.');
                                $data = array(
                                        "verification_status" => 0
                                );
                        }
                        $this->load->model('Admin/user_managment_model');
                        $this->user_managment_model->updateDataById($key, $data);
                        redirect(base_url() . "Admin/Ad_User_Managment/getData/" . $_SESSION['page']);
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
                        }
                        if ($roleName['data'][0]->role_name == "Moderator" && ($this->session->userdata('mc_user') != '')) {

                                $_SESSION["role"] = "Moderator";
                                return true;
                        } else {

                                redirect(base_url() . "My_error");
                        }
                } else {

                        redirect(base_url() . "My_error");
                }
        }
}
