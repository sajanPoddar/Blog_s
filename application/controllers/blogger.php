<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Blogger extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('blogger_model', 'b_model', true);
        $this->load->model('welcome_model', 'w_model', true);
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
            redirect("login/user_login", "refresh");
        }
        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor',
            'path' => 'scripts/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "500px", //Setting a custom width
                'height' => '300px', //Setting a custom height
            ),
        );
    }

    public function index() {
        $data = array();
        $data['all_category'] = $this->w_model->select_all_category();
        $data['maincontent'] = $this->load->view('welcome', '', true);
        $data['title'] = $this->session->userdata('full_name');

        $this->load->view('home', $data);
    }

    public function logout() {

        $this->session->unset_userdata('user_id');
        session_destroy();
        // $this->session->unset_userdata('login_status');
        //$this->session->unset_userdata('full_name');
        $data['exception'] = "You are successfully logout";
        $this->session->set_userdata($data);
        redirect("login/user_login", "refresh");
    }

    public function profile() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['result'] = $this->b_model->select_user_by_user_id($user_id);
        $data['all_category'] = $this->w_model->select_all_category();
        $data['maincontent'] = $this->load->view('view_profile', $data, true);
        $data['title'] = $this->session->userdata('full_name');
        $this->load->view('home', $data);
    }

    public function edit_profile() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['result'] = $this->b_model->select_user_by_user_id($user_id);
        $data['all_category'] = $this->w_model->select_all_category();
        $data['maincontent'] = $this->load->view('edit_profile', $data, true);
        $data['title'] = $this->session->userdata['full_name'];
        $this->load->view('home', $data);
    }

    public function update_user() {
        $data = array();
        $user_id = $this->session->userdata('user_id');
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email_address'] = $this->input->post('email_address', true);
        /* $data['password'] = $this->input->post('password', true);
          $data['password'] = md5($data['password']); */
        $data['address'] = $this->input->post('address', true);
        $data['mobile_no'] = $this->input->post('mobile_no', true);
        $data['gender'] = $this->input->post('gender', true);
        $data['city'] = $this->input->post('city', true);
        $data['country'] = $this->input->post('country', true);
        $data['zip_code'] = $this->input->post('zip_code', true);
        $this->b_model->update_user($data, $user_id);
        redirect("blogger/profile");
    }

    public function add_blog() {
        $data = array();
        $data['check_editor'] = $this->data;
        $data['all_category'] = $this->w_model->select_all_category();
        $data['maincontent'] = $this->load->view('add_blog', $data, true);
        $data['title'] = 'add_blog';
        $this->load->view('home', $data);
    }

    public function save_blog() {

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['blog_title'] = $this->input->post('blog_title', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['blog_description'] = $this->input->post('blog_description', true);
        $data['status'] = $this->input->post('status', true);
        $data['created_date_time'] = date('Y-m-d H:m:s');
        $this->b_model->save_blog_info($data);

        redirect("blogger/add_blog");
    }

    public function my_blogs() {
        $user_id = $this->session->userdata('user_id');
        $data['result'] = $this->b_model->select_blogs_by_user_id($user_id);
        $data['all_category'] = $this->w_model->select_all_category();
        $data['maincontent'] = $this->load->view('my_blogs', $data, true);
        $data['title'] = "MY BLOGS";
        $this->load->view('home', $data);
    }

    public function delete_blog($blog_id) {
        $user_id = $this->session->userdata('user_id');
        $this->b_model->delete_blog_by_blog_id($blog_id, $user_id);
        redirect("blogger/my_blogs");
    }

    public function edit_blog($blog_id) {
        $data = array();
        $data['result'] = $this->b_model->select_blog_by_blog_id($blog_id);
        $data['all_category'] = $this->w_model->select_all_category();
        $data['check_editor'] = $this->data;
        $data['maincontent'] = $this->load->view('edit_blog', $data, true);
        $data['title'] = "Edit Blog";
        $this->load->view('home', $data);
    }

    public function update_blog() {
        $blog_id = $this->input->post('blog_id', true);
        $data['blog_title'] = $this->input->post('blog_title', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['blog_description'] = $this->input->post('blog_description', true);
        $data['status'] = $this->input->post('status', true);
        //echo '<pre>';
        // print_r($blog_id);
        // exit();
        $this->b_model->update_blog_info($data, $blog_id);
        redirect("blogger/my_blogs");
    }

}

?>
