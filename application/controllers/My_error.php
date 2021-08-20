<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_error extends CI_Controller
{

        public function index()
        {
                $head_data['pageTitle'] = 'Error';
                $head_data['pageDesc'] = '';
                $head_data['isSEO'] = false;
                $head_data['canonical'] = '';
                $nav_data['tabNumber'] = 10;
                $this->load->view('header/head');
                $this->load->view('header/log-obj');
                $this->load->view('navbar', $nav_data);
                $this->load->view('errors/myerror');
                $this->load->view('footer');
        }
}
