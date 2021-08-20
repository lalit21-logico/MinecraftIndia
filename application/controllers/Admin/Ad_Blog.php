<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ad_Blog extends CI_Controller
{

        public function index()
        {

                if ($this->verification()) {
                        //Add post
                        $this->load->model('Admin/Administrator_model');
                        $data['data'] = $this->Administrator_model->get_user($_SESSION['userName']);
                        $data['name'] = $data['data'][0]->user_name;
                        $data['image'] = $data['data'][0]->user_image;

                        $this->load->view('admin/ad-head/ad-head');
                        $this->load->view('admin/ad-nav/ad-nav', $data);
                        $this->load->view('admin/ad-nav/ad-nav-1');
                        $this->load->view('admin/ad-nav/ad-nav-2');
                        $this->load->view('admin/ad-nav/ad-nav-3a');
                        $this->load->view('admin/ad-nav/ad-nav-4');
                        $this->load->view('admin/ad-nav/ad-nav-5');
                        $this->load->view('admin/ad-nav/ad-nav-6');
                        $this->load->view('admin/ad-nav/ad-nav-7');
                        $this->load->view('admin/ad-nav/ad-nav-8');
                        $this->load->view('admin/ad-nav/ad-nav-9');
                        $this->load->view('admin/blog-add-post');
                        $this->load->view('admin/ad-foot');
                }
        }

        public function alter()
        {
                //View/Edit post
                if ($this->verification()) {

                        $this->load->model('Admin/Administrator_model');
                        $data['data'] = $this->Administrator_model->get_user($_SESSION['userName']);
                        $data['name'] = $data['data'][0]->user_name;
                        $data['image'] = $data['data'][0]->user_image;

                        $this->load->helper('url');
                        $this->load->library("pagination");
                        $this->load->config('pagination');
                        $config = $this->config->item('pagination_config');
                        $this->load->model('Admin/blog_add_post_model');

                        $config["base_url"] = base_url() . "Admin/Ad_Blog/alter";
                        $config["total_rows"] = $this->blog_add_post_model->get_count();
                        $config["per_page"] = 5;
                        $config["uri_segment"] = 4;
                        $this->pagination->initialize($config);
                        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
                        $data["links"] = $this->pagination->create_links();

                        $data['result'] = $this->blog_add_post_model->getData($config["per_page"], $page);
                        $data['page'] = $page;
                        $_SESSION['page'] = $page;

                        $this->load->view('admin/ad-head/ad-head');
                        $this->load->view('admin/ad-nav/ad-nav', $data);
                        $this->load->view('admin/ad-nav/ad-nav-1');
                        $this->load->view('admin/ad-nav/ad-nav-2');
                        $this->load->view('admin/ad-nav/ad-nav-3b');
                        $this->load->view('admin/ad-nav/ad-nav-4');
                        $this->load->view('admin/ad-nav/ad-nav-5');
                        $this->load->view('admin/ad-nav/ad-nav-6');
                        $this->load->view('admin/ad-nav/ad-nav-7');
                        $this->load->view('admin/ad-nav/ad-nav-8');
                        $this->load->view('admin/ad-nav/ad-nav-9');
                        $this->load->view('admin/blog-alter-post', $data);
                        $this->load->view('admin/ad-foot');
                }
        }


        public function submitBlogData()
        {
                if ($this->verification()) {
                        $Imagename = time() . '-' . $_FILES["userfile"]['name'];
                        $config = array(
                                'upload_path' => "./Image/BlogImg",
                                'allowed_types' => "jpg|png|jpeg|PNG",
                                'overwrite' => TRUE,
                                'max_size' => "20048",
                                'file_name' => $Imagename,
                        );

                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload()) {


                                $data = $this->upload->data();
                                $config['image_library'] = 'gd2';
                                $config['source_image'] = './Image/BlogImg/' . $data["file_name"];
                                $config['create_thumb'] = FALSE;
                                $config['maintain_ratio'] = FALSE;
                                $config['quality'] = '60%';
                                $config['width'] = 800;
                                $config['height'] = 800;
                                $config['new_image'] = './Image/BlogImg/' . $Imagename;
                                $this->load->library('image_lib', $config);
                                $this->image_lib->resize();

                                print_r($data);
                                $data = array(
                                        "user_name" => $_SESSION['userName'],
                                        "title" => $this->input->post("postTitle"),
                                        "body" => $this->input->post("postBody"),
                                        "category" => $this->input->post("blogCategory"),
                                        "blog_image" => $Imagename,
                                );

                                $this->load->model('Admin/blog_add_post_model');
                                $this->blog_add_post_model->insert_data($data);
                                $this->session->set_flashdata('message', 'Sucessfully Posted Blog.');
                                redirect(base_url() . "Admin/Ad_Blog/alter");
                        } else {
                                $error = array('error' => $this->upload->display_errors());
                                $this->load->view('failed', $error);
                        }
                }else{
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('failed', $error);
                }
        }


        public function updateData($key)
        {


                if ($this->verification()) {

                        $this->load->model('Admin/Administrator_model');
                        $data['data'] = $this->Administrator_model->get_user($_SESSION['userName']);
                        $data['name'] = $data['data'][0]->user_name;
                        $data['image'] = $data['data'][0]->user_image;

                        $key = base64_decode($key);
                        $this->load->model('Admin/blog_add_post_model');
                        $data['result'] = $this->blog_add_post_model->getDataById($key);

                        $this->load->view('admin/ad-head/ad-head');
                        $this->load->view('admin/ad-nav/ad-nav', $data);
                        $this->load->view('admin/ad-nav/ad-nav-1');
                        $this->load->view('admin/ad-nav/ad-nav-2');
                        $this->load->view('admin/ad-nav/ad-nav-3b');
                        $this->load->view('admin/ad-nav/ad-nav-4');
                        $this->load->view('admin/ad-nav/ad-nav-5');
                        $this->load->view('admin/ad-nav/ad-nav-6');
                        $this->load->view('admin/ad-nav/ad-nav-7');
                        $this->load->view('admin/ad-nav/ad-nav-8');
                        $this->load->view('admin/ad-nav/ad-nav-9');
                        $this->load->view('admin/blog-edit-post', $data);
                        $this->load->view('admin/ad-foot');
                }
        }


        public function updateDataById($key)
        {

                if ($this->verification()) {

                        $key = base64_decode($key);
                        $this->load->model('Admin/blog_add_post_model');
                        $data = array(
                                "user_name" => $_SESSION['userName'],
                                "title" => $this->input->post("postTitle"),
                                "body" => $this->input->post("postBody"),
                                "category" => $this->input->post("blogCategory"),
                        );

                        $this->blog_add_post_model->updateDataById($key, $data);
                        $this->session->set_flashdata('message', 'Sucessfully Posted Blog.');
                        redirect(base_url() . "Admin/Ad_Blog/alter/" . $_SESSION['page']);
                }
        }


        public function deleteData($key)
        {
                if ($this->verification()) {

                        $key = base64_decode($key);
                        $this->load->model('Admin/blog_add_post_model');
                        $data['data'] = $this->blog_add_post_model->getDataById($key);
                        $filePath = './Image/BlogImg/' . $data['data'][0]->blog_image;
                        if (file_exists($filePath)) {
                                unlink($filePath);
                                echo "File Successfully Delete.";
                        }

                        $this->load->model('Admin/blog_add_post_model');
                        if ($this->blog_add_post_model->deleteData($key)) {
                                $this->session->set_flashdata('message', 'Blog Deleted.');
                                redirect(base_url() . "Admin/Ad_Blog/alter/" . $_SESSION['page']);
                        } else {
                        }
                        return 0;
                }
        }

        public function updateBlogImage($key)
        {
                if ($this->verification()) {
                        $key = base64_decode($key);
                        $this->load->model('Admin/blog_add_post_model');
                        $data['result'][] = $this->blog_add_post_model->getDataById($key);
                        $filePath = './Image/BlogImg/' . $data['result'][0][0]->blog_image;
                        
                        $Imagename = time() . '-' . $_FILES["userfile"]['name'];
                        $config = array(
                                'upload_path' => "./Image/BlogImg",
                                'allowed_types' => "jpg|png|jpeg|PNG",
                                'overwrite' => TRUE,
                                'max_size' => "20048",
                                'file_name' => $Imagename,
                        );

                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload()) {

                                if (file_exists($filePath)) {
                                        unlink($filePath);
                                        echo "File Successfully Delete.";
                                }


                                $data = $this->upload->data();
                                $config['image_library'] = 'gd2';
                                $config['source_image'] = './Image/BlogImg/' . $data["file_name"];
                                $config['create_thumb'] = FALSE;
                                $config['maintain_ratio'] = FALSE;
                                $config['quality'] = '60%';
                                $config['width'] = 800;
                                $config['height'] = 800;
                                $config['new_image'] = './Image/BlogImg/' . $Imagename;
                                $this->load->library('image_lib', $config);
                                $this->image_lib->resize();

                                $data = array(
                                        "blog_image" => $Imagename,
                                );

                                $this->load->model('Admin/blog_add_post_model');
                                $this->blog_add_post_model->updateDataById($key, $data);
                                $key = base64_encode($key);

                                redirect(base_url() . "Admin/Ad_Blog/updateData/" . $key);
                        } else {
                                $error = array('error' => $this->upload->display_errors());
                                $this->load->view('failed', $error);
                        }
                }
        }


        private function verification()
        {
                $this->load->model('Login_model');
                if (isset($_SESSION['roleId'])) {
                        $roleName['data'] = $this->Login_model->get_role_name($_SESSION['roleId']);
                        if ($roleName['data'][0]->role_name == "Admin" && ($this->session->userdata('mc_user') != '')  && $_SESSION['Admin'] == true) {
                                 $_SESSION["role"]="Admin";
                                return true;
                        }
                        if ($roleName['data'][0]->role_name == "Editor" && ($this->session->userdata('mc_user') != '')) {
                                $_SESSION["role"]="Editor";
                                return true;
                        } else {

                                redirect(base_url() . "Admin/Ad_error");
                        }
                } else {

                        redirect(base_url() . "My_error");
                }
        }
}
