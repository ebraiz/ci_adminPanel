<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if( $this->session->userdata('user_id'))
			return redirect('dashboard_users');
		$this->load->view('login');
	}

	public function admin_login()
	{
		//$this->form_validation->set_rules('email','Email','required|valid_email|min_length[8]');
		//$this->form_validation->set_rules('password','Password','required|min_length[8]');
		
		if($this->form_validation->run('admin_login_rules')){
			//IF LOGIN SUCCESSFULL

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->load->model('login_model');
			$login_id = $this->login_model->login_valid($email, $password);
			
			if($login_id){
				//Credential Valid, Login User.

				$this->session->set_userdata('user_id', $login_id);
				//$this->load->view('dashboard_ads');
				return redirect('dashboard_users'); 			
			}else{
				//Authentication Failed.

				$this->session->set_flashdata('login_failed','Invalid Username or Password');
				return redirect('login');
			}
	
		}else{
			//IF LOGIN FAILED

			$this->load->view('login');
		}
	}

	public function logout(){
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
}
