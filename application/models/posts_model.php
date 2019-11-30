<?php
class posts_model extends CI_model{
    public function __construct(){
        $this->load->database();
        
    }

    public function get_posts($slug = FALSE){
        if($slug === FALSE){
            $query=$this->db->get('table');
            return $query->result_array();
        }
        $query = $this->db->get_where('table',array('slug'=>$slug));
        return $query->row_array();
    }

    public function create_posts(){

        $slug=url_title($this->input->post('first name'));

        $data=array('fname'=>$this->input->post('fname'), 
                    'lname'=>$this->input->post('lname'),
                    'age'=>$this->input->post('age')
                    );
        return $this->db->insert('table',$data);
    }

    public function login_post(){
        //$slug=url_title($this->input->post('first name'));

        $data=array('username'=>$this->input->post('username'), 
                    'password'=>$this->input->post('password')
                    );
        return $this->db->insert('table',$data);
    }
}