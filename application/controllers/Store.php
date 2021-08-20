<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store extends CI_Controller
{

        public function index()
        {
                $head_data['pageTitle'] = 'Store | Minecraft India';
                $head_data['pageDesc'] = 'Welcome to Minecraft india Community Store';
                $head_data['isSEO'] = true;
                $head_data['canonical'] = 'Store';
                $nav_data['tabNumber'] = 2;
                $this->load->view('header/head', $head_data);
                $this->load->view('header/store-obj');
                $this->load->view('navbar', $nav_data);
                $this->load->view('store');
                $this->load->view('footer');
        }
}
