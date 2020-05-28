<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model(array('Petugas_Model'));
	}
	
	public function index(){
		$data['title'] = "My Profile";
		$data['user'] = $this->db->get_where('tb_admin', ['username' => 
		$this->session->userdata('username')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function petugas(){
		$data['title'] = "Daftar Petugas";
		$data['user'] = $this->db->get_where('tb_admin', ['username' => 
		$this->session->userdata('username')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/petugas', $data);
		$this->load->view('templates/footer');
		
		$this->Petugas_Model->get_all($data);
	}
	
	
	
}