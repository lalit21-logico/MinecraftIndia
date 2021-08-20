<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{

        public function index()
        {
                //Dashboard
                if ($this->verification()) {

                        $this->load->model('Admin/Administrator_model');
                        $data['data'] = $this->Administrator_model->get_user($_SESSION['userName']);
                        $data['name'] = $data['data'][0]->user_name;
                        $data['image'] = $data['data'][0]->user_image;

                        // user log  chart data --start
                        $this->load->model('Admin/Line_chart_model');
                        $data['list'] = $this->Line_chart_model->getLimitResult(12);
                        $userMonthlyLogs = $data['list'];
                        foreach ($userMonthlyLogs as $item1) {
                                $datapoints[] = array(
                                        'label' => $item1->month,
                                        'y' => $item1->user_count
                                );
                        }
                        $data['monthlog'] = $datapoints;
                        // user log  chart data --start end

                        $this->load->view('admin/ad-head/ad-head');
                        $this->load->view('admin/ad-nav/ad-nav', $data);
                        $this->load->view('admin/ad-nav/ad-nav-1a');
                        $this->load->view('admin/ad-nav/ad-nav-2');
                        $this->load->view('admin/ad-nav/ad-nav-3');
                        $this->load->view('admin/ad-nav/ad-nav-4');
                        $this->load->view('admin/ad-nav/ad-nav-5');
                        $this->load->view('admin/ad-nav/ad-nav-6');
                        $this->load->view('admin/ad-nav/ad-nav-7');
                        $this->load->view('admin/ad-nav/ad-nav-8');
                        $this->load->view('admin/ad-nav/ad-nav-9');
                        $this->load->view('admin/dash', $data);
                        $this->load->view('admin/ad-foot');
                }
        }




        private function verification()
        {
                $this->load->model('Login_model');
                if (isset($_SESSION['roleId'])) {
                        $roleName['data'] = $this->Login_model->get_role_name($_SESSION['roleId']);
                        if ($roleName['data'][0]->role_name == "Admin" && ($this->session->userdata('mc_user') != '')  && $_SESSION['Admin'] == true) {
                                $_SESSION["role"] = "Admin";
                                return true;
                        }
                        if ($roleName['data'][0]->role_name == "Moderator" && ($this->session->userdata('mc_user') != '')) {
                                $_SESSION["role"] = "Moderator";
                                return true;
                        }
                        if ($roleName['data'][0]->role_name == "Editor" && ($this->session->userdata('mc_user') != '')) {
                                $_SESSION["role"] = "Editor";
                                return true;
                        }
                        if ($roleName['data'][0]->role_name == "Merchant" && ($this->session->userdata('mc_user') != '')) {
                                $_SESSION["role"] = "Merchant";
                                return true;
                        }
                        if ($roleName['data'][0]->role_name == "ServerAssociate" && ($this->session->userdata('mc_user') != '')) {
                                $_SESSION["role"] = "ServerAssociate";
                                return true;
                        }
                        if ($roleName['data'][0]->role_name == "CustomerAssociate" && ($this->session->userdata('mc_user') != '')) {
                                $_SESSION["role"] = "CustomerAssociate";
                                return true;
                        } else {

                                redirect(base_url() . "Admin/Ad_error");
                        }
                } else {

                        redirect(base_url() . "My_error");
                }
        }
}
