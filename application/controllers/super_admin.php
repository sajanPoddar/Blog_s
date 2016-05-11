<?php
session_start();

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('super_admin_model','sa_model',true);
        $admin_id=  $this->session->userdata('admin_id');
        if($admin_id==null){
            redirect("admin_login/index");
        }
    }

    public function index() {
        $data=array();
        
        $data['admin_maincontent']=  $this->load->view('admin/welcome','',true);
        $this->load->view('admin/admin_home',$data);
    }

    public function add_category() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_category', '', true);
        $this->load->view('admin/admin_home', $data);
    }

    public function save_category() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $this->sa_model->save_category_info($data);
        redirect("super_admin/add_category");
    }
    public function logout(){
        $this->session->unset_userdata('admin_id');
        session_destroy();
        $data['exception']="you are successfully destroyed";
        $this->session->set_userdata($data);
        redirect("admin_login/index","refresh");
        
    }
   public function add_new(){
        $data=array();
        $data['user']=$this->sa_model->select_all_inactive_user();
        $data['admin_maincontent']=  $this->load->view('admin/add_new',$data,true);
        $this->load->view('admin/admin_home',$data);
    }
    public function add_new_user($user_id){
        
        $this->sa_model->active_admin_status($user_id);
         $data=array();
        $data['user']=$this->sa_model->select_all_inactive_user();
        $data['admin_maincontent']=  $this->load->view('admin/add_new',$data,true);
        $this->load->view('admin/admin_home',$data);
    }
    public function show_user(){
         $data=array();
        $data['user']=$this->sa_model->select_all_user();
        $data['admin_maincontent']=  $this->load->view('admin/show_user',$data,true);
        $this->load->view('admin/admin_home',$data);
    }
     public function block_user($user_id){
        
        $this->sa_model->block_admin_status($user_id);
         $data=array();
        $data['user']=$this->sa_model->select_all_inactive_user();
        $data['admin_maincontent']=  $this->load->view('admin/add_new',$data,true);
        $this->load->view('admin/admin_home',$data);
    }

}

//put your code here
?>