<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

        public function index()
        { 
                $data['status'] = 1;

                $head_data['pageTitle'] = 'Login | Minecraft India';
                $head_data['pageDesc'] = 'Log in and Join the Community';
                $head_data['isSEO'] = true;
                $head_data['canonical'] = 'Login';
                $nav_data['tabNumber'] = 8;
                $this->load->view('header/head', $head_data);
                $this->load->view('header/log-obj');
                $this->load->view('navbar', $nav_data);
                $this->load->view('login', $data);
                $this->load->view('footer');
        }



        
        public function verify()
        {
                $username = $_POST['username'];
                $password = ($_POST['password']);

                $this->load->model('Login_model');
                /// check for condition valid or not 
                if ($this->Login_model->can_login($username, $password)) {

                        $data['data'] = $this->Login_model->get_user($username);
                        $role['data'] = $this->Login_model->get_role($username);
                        $roleId = $role['data'][0]->role;
                        $_SESSION['userName'] =  $username;
                        $session_data = array('mc_user' => $username);
                        $this->load->library('session');
                        $this->session->set_userdata($session_data);
                        if ($roleId != NULL) {
                                $roleName['data'] = $this->Login_model->get_role_name($roleId);

                                if ($roleName['data'][0]->role_name == "Admin") {

                                        $_SESSION['roleId'] = $roleId;
                                        $_SESSION['Admin'] = true;

                                        redirect(base_url() . 'Admin/Administrator');
                                }
                                if ($roleName['data'][0]->role_name == "Moderator") {

                                        $_SESSION['roleId'] = $roleId;
                                        redirect(base_url() . 'Admin/Administrator');
                                }
                                if ($roleName['data'][0]->role_name == "Editor") {

                                        $_SESSION['roleId'] = $roleId;
                                        redirect(base_url() . 'Admin/Administrator');
                                }
                                if ($roleName['data'][0]->role_name == "Merchant") {

                                        $_SESSION['roleId'] = $roleId;
                                        redirect(base_url() . 'Admin/Administrator');
                                }
                                if ($roleName['data'][0]->role_name == "ServerAssociate") {

                                        $_SESSION['roleId'] = $roleId;
                                        redirect(base_url() . 'Admin/Administrator');
                                }
                                if ($roleName['data'][0]->role_name == "CustomerAssociate") {

                                        $_SESSION['roleId'] = $roleId;
                                        redirect(base_url() . 'Admin/Administrator');
                                }
                        }

                        $data['status'] = 1;
                        $_SESSION['roleId'] = $roleId;
                        redirect(base_url());
                } else {

                        $data['status'] = 2;
                        
                        $head_data['pageTitle'] = 'Login | Minecraft India';
                        $head_data['pageDesc'] = 'Log in and Join the Community';
                        $head_data['isSEO'] = true;
                        $head_data['canonical'] = 'Login';
                        $nav_data['tabNumber'] = 8;
                        $this->load->view('header/head', $head_data);
                        $this->load->view('header/log-obj');
                        $this->load->view('navbar', $nav_data);
                        $this->load->view('login', $data);
                        $this->load->view('footer');
                }
        }




        public function logout()
        {
                $_SESSION['roleId'] = NULL;
                $_SESSION['Admin'] = false;
                $_SESSION["role"] = NULL;
                $_SESSION['userName'] = NULL;
                $data['status'] = 1;
                $this->load->library('session');
                $this->session->unset_userdata('mc_user');
                $this->session->sess_destroy();
                redirect(base_url());
        }
}
