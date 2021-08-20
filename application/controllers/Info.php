<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{

        public function index()
        {
//Statx name will be chandeg
                $head_data['pageTitle'] = 'Privacy Policy | Minecraft India';
                $head_data['pageDesc'] = 'Our Privacy Policy, Minecraft India is an unofficial Minecraft Gamer Community';
                $head_data['isSEO'] = true;
                $head_data['canonical'] = 'Info/PrivacyPolicy';
                $nav_data['tabNumber'] = 10;
                $this->load->view('header/head');
                $this->load->view('header/log-obj');
                $this->load->view('navbar', $nav_data);
                $this->load->view('static/privacypolicy');
                $this->load->view('footer');
        }
}
