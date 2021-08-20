<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mine404 extends CI_Controller {

	public function index()
	{

                $head_data['pageTitle'] = '404 😵 : Page Not Found';
                $head_data['pageDesc'] = '';
                $head_data['isSEO'] = false;
                $head_data['canonical'] = '';
                $this->load->view('header/head' , $head_data);
                $this->load->view('header/404-obj');
                $this->load->view('mine404');
          
       

       
        }
        

}
