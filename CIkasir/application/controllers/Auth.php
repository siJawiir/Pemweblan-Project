<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model(array('Register_Model'));
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
	
	public function registration()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[tb_admin.username]', ['is_unique' => "Username ini sudah terdaftar"]);
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[tb_admin.email]', ['is_unique' => "Email ini sudah terdaftar"]);
		$this->form_validation->set_rules('password1', 'password', 'required|trim|matches[password2]', ['matches' => "Password tidak sesuai"]);
		$this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
		
		if ($this->form_validation->run() == false){
			$data['title'] = "User Registration";
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} 
		else {
			$data = [ 
				'username' => htmlspecialchars($this->input->post('username', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash ($this->input->post('password1'), PASSWORD_DEFAULT)
			];
			
			$this->Register_Model->insert_entry($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Registrasi akun berhasil! Silahkan login kembali
				</div>');
			redirect('auth');
		}
	}
}