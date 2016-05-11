<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('blogger_model','b_model',true);
        $this->load->model('welcome_model','w_model',true);
        $this->load->model('super_admin_model');
    }
    
    public function index($start=0) {
        
        $data = array();
        $data['result']=  $this->b_model->select_all_blogs(4,$start);
        $this->load->library('pagination');
        $config['base_url']=base_url().'welcome/index';
        $config['total_rows']=  $this->b_model->select_blog_count();
        $config['per_page']=4;
        $this->pagination->initialize($config);
        $data['blog']=  $this->pagination->create_links();
        
        $data['maincontent'] = $this->load->view('home_message', $data, true);
        $data['all_category']=  $this->w_model->select_all_category();
        $data['title'] = "Blog";
        $data['archives']="h";
        $this->load->view('home', $data);
    }

    public function gallery() {
        $data = array();
        $data['all_category']=  $this->w_model->select_all_category();
        $data['maincontent'] = $this->load->view('gallery', '', true);

        $data['title'] = "Photes";
        $data['header'] = "1";
        $this->load->view('home', $data);
    }
    public function single_blog($blog_id=null){
        if ($blog_id==NULL) {
            $blog_id=$this->session->userdata('blog_id');
            //$this->session->unset_userdata('blog_id');
        }
        $data=array();
        $data['result']=  $this->b_model->select_blog_by_blog_id($blog_id);
        $data['comments']=  $this->b_model->select_comments_by_blog_id($blog_id);
        $data['maincontent']=  $this->load->view('single_blog',$data,true);
        $data['all_category']=  $this->w_model->select_all_category();
        $data['title']="Blog";
        $data['archives']="h";
        $this->load->view('home',$data);
        
    }
    public function save_comments(){
        if(!$_POST){
            redirect('welcome/single_blog');
        }
        $user_id=$this->session->userdata('user_id');
                if ($user_id==null) {
                    
                redirect('login/user_login');}
                else{
        $data=array();
        $data['user_id']=  $user_id;
        $data['blog_id']=  $this->input->post('blog_id',true);
        $data['comments_description']=  $this->input->post('comments_description',true);
        
                
                
        $this->w_model->save_comments_info($data);
        $sdata=array();
        $sdata['blog_id']=$data['blog_id'];
        $this->session->set_userdata($sdata); 
        redirect('Welcome/single_blog');
                }
    }
    public function active_user_account($user_id){
        $this->w_model->active_user_account_status($user_id);
         $data['maincontent']=  $this->load->view('activation_status','',true);
        $data['all_category']=  $this->w_model->select_all_category();
        $data['title']="Blog";
        $data['archives']="h";
        $this->load->view('home',$data);
        
        
    }
    
    public function single_category($category_id){
        /*if($category_id==NULL){
            $category_id=  $this->session->uesrdata('category_id');
            $this->session->unset_userdata('category_id');
            
        }*/
          //$category_id=  $this->session->userdata('category_id');
        $data=array();
        $data['result']=  $this->w_model->select_blog_by_category_id($category_id);
        //$data['comments']=  $this->w_model->select_blog_by_category_id($category_id);
        $data['maincontent']=  $this->load->view('single_category',$data,true);
        $data['all_category']=  $this->w_model->select_all_category();
        $data['title']="Blog";
        $data['archives']="h";
        $this->load->view('home',$data);
    }
 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */