<?php


class welcome_model extends CI_Model {
    public function select_all_category(){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function save_comments_info($data) {
        $this->db->insert('tbl_comments',$data);
    }
    public function active_user_account_status($user_id){
        $this->db->set('activation_status',1);
        $this->db->where('user_id',$user_id);
        $this->db->update('tbl_user');
    }
    /*public function select_category_by_category_id($category_id){
           $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }*/
    public function select_blog_by_category_id($category_id){
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('category_id',$category_id);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
    }
}?>
