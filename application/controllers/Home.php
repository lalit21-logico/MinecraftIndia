<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{






        
        public function index()
        {
                $head_data['pageTitle'] = 'Minecraft India | The Gaming Community';
                $head_data['pageDesc'] = 'Welcome! Minecraft India is an unofficial Minecraft Gamer Community';
                $head_data['isSEO'] = true;
                $head_data['canonical'] = '/';
                $nav_data['tabNumber'] = 1;
                $this->load->view('header/head', $head_data);
                $this->load->view('header/home-obj');
                $this->load->view('navbar', $nav_data);
                $this->load->view('home');
        }
}
