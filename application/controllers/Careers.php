<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Careers extends CI_Controller
{

    public function index()
    {
        if ($_SESSION['userName'] != NUll) {
            $this->load->model('career_model');
            $data['result'] = $this->career_model->getRoleList();

            $nav_data['tabNumber'] = 10;
            $this->load->view('header/head');
            $this->load->view('header/main-obj');
            $this->load->view('navbar', $nav_data);
            $this->load->view('careers', $data);
            $this->load->view('footer');
        } else {

            redirect(base_url() . "Login");
        }
    }

    public function submitData()
    {
        if ($_SESSION['userName'] != NUll) {
            $userName = $_SESSION['userName'];
            $data = array(
                "apply_for_role" => $this->input->post("applyForRole")
            );
            $this->load->model('career_model');
            $this->career_model->updateDataById($userName, $data);
            $this->session->set_flashdata('message', 'Sucessfully Enrolled for' . $this->input->post("applyForRole") . 'Post');
            redirect(base_url() . "Careers");
        } else {

            redirect(base_url() . "Login");
        }
    }
}
