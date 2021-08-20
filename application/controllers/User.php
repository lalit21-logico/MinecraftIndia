<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

        public function index()
        {
                if ($_SESSION['userName'] != NUll) {
                        $this->load->model('User_model');
                        $data['result'] = $this->User_model->get_user($_SESSION['userName']);
                        

                        $head_data['pageTitle'] = 'UserName on Minecraft India'; // {username}
                        $head_data['pageDesc'] = 'Welcome! Minecraft India is an unofficial Minecraft Gamer Community';
                        $head_data['isSEO'] = true;
                        $head_data['canonical'] = 'User'; // "User/{username}"
                        $nav_data['tabNumber'] = 7;
                        $this->load->view('header/head', $head_data);
                        $this->load->view('header/blog-obj');
                        $this->load->view('navbar', $nav_data);
                        $this->load->view('user',$data);
                        $this->load->view('footer');
                } else {

                        redirect(base_url() . "Login");
                }
        }
}
