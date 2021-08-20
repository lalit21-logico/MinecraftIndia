<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{



        public function index() {
                $this->blogList();
        }


        public function blogList()
        {  
                        $this->load->helper('url');
                        $this->load->library("pagination");
                        $this->load->model('blog_model');
                        $config = array();
                        $config["base_url"] = base_url() . "Blog/blogList";
                        $config["total_rows"] = $this->blog_model->get_count();
                        $config["per_page"] = 2;
                        $config["uri_segment"] = 3;
                        $this->pagination->initialize($config);
                        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                        $data["links"] = $this->pagination->create_links();

                        $data['result'] = $this->blog_model->getData($config["per_page"], $page);
                        $data['page'] = $page;
                        $_SESSION['page'] = $page;

                        $head_data['pageTitle'] = 'Blog | Minecraft India';
                        $head_data['pageDesc'] = 'Check out the cool stuff on Minecraft India Blog';
                        $head_data['isSEO'] = true;
                        $head_data['canonical'] = 'Blog';
                        $nav_data['tabNumber'] = 3;
                        $this->load->view('header/head', $head_data);
                        $this->load->view('header/blog-obj');
                        $this->load->view('navbar', $nav_data);
                        $this->load->view('blog', $data);
                        $this->load->view('footer');
        }


        public function blog_post($key)
	{








                

                
                        $key = base64_decode($key);
                        $this->load->model('blog_model');
                        $data['result'] = $this->blog_model->getUser($key);
        
                        $head_data['pageTitle'] = 'Blog | Minecraft India';
                        $head_data['pageDesc'] = 'Check out the cool stuff on Minecraft India Blog';
                        $head_data['isSEO'] = true;
                        $head_data['canonical'] = 'Blog';
                        $nav_data['tabNumber'] = 3;
                        $this->load->view('header/head', $head_data);
                        $this->load->view('header/blog-obj');
                        $this->load->view('navbar', $nav_data);
                        $this->load->view('blog_post',$data);
                        $this->load->view('footer');
      
        }

        public function seeImg($imgName){
                $imgName = base64_decode($imgName);
                $filePath = './Image/BlogImg/' . $imgName ;
                        if (file_exists($filePath)) {
                                redirect(base_url() . "/Image/BlogImg/$imgName");   
                               
                        }else{
                               
                                redirect(base_url() . "Mine404");
                        }
        }
        

}
