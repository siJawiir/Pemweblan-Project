<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
		
	public function index ()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');
		
		if ($this->form_validation->run() == false){
			$data['title'] = "User Login";
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		}
		else {
			$this->_login();
		}
	}
	
	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$user = $this->db->get_where('tb_admin', ['username' => $username])->row_array();
		
		if($user) {
			if (password_verify($password, $user['password'])){
				$data = [
					'username' => $user['username'],
				];
				$this->session->set_userdata($data);
				redirect('user');
			}
			else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Password yang Anda masukkan salah!
				</div>');
				redirect('auth');
			}
		}
		else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Akun belum terdaftar!
			</div>');
			redirect('auth');
		}
	}
}