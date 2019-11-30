<?php
class posts extends CI_controller{
    public function index(){
        $data['title']='latest posts';
        
        $data['posts']= $this->posts_model->get_posts();
        

        $this->load->view('templates/header');
        $this->load->view('pages/index',$data);
        $this->load->view('templates/footer');
	}

 	public function create(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'FirstName', 'required');
 		$this->form_validation->set_rules('lname', 'LastName', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');

        if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/create');
			$this->load->view('templates/footer');
        }
        else{                        	
			$this->posts_model->create_posts();
			redirect('posts','refresh');                 
		}        
	}

	public function login(){
		// $this->load->helper(array('form', 'url'));
        // $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'UserName', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		 
		if ($this->form_validation->run() == FALSE){
			
			$this->load->view('templates/header');
			$this->load->view('posts/login');
			$this->load->view('templates/footer');
        }
        else{                        	
			
			$this->posts_model->login_post();
			redirect('posts');                 
		}   
	}
}
