<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->helper(array('form'));
		$this->load->library('form_validation');    
		$this->load->model('login_model');    
	}

	public function index()
	{
		$this->load->view('login');

		if ($this->session->userdata('login') == "login" || $this->session->userdata('level') == 'administrator') 
		{
			redirect(base_url("admin"));
		}
		elseif ($this->session->userdata('login') == "login" || $this->session->userdata('level') == 'customer') 
		{
			redirect(base_url("customer"));
		}
	}

	public function cek_login()	
	{
		$this->form_validation->set_rules('formUsername', 'Username', 'required', array('required' => '<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-circle"></i> %s harus diisi!</div>'));
		$this->form_validation->set_rules('formPassword', 'Password', 'required', array('required' => '<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-circle"></i> %s harus diisi!</div>'));

		if ($this->form_validation->run() == FALSE) 
		{
			$this->index();
		}
		else 
		{
			$this->aksi_login();
		}
	}

	public function aksi_login() 
	{
		$username = $this->input->post('formUsername');
		$password = $this->input->post('formPassword');
  
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
  
		$jumlah = $this->login_model->cek_login('user',$where)->num_rows();
		$cek = $this->login_model->cek_login('user',$where)->row_array();
  
		if($jumlah > 0) {
  
			if ($cek['level'] == 'administrator') {
				$data_session = array(
					'nama' => $username,
					'level' => 'administrator',
					'status' => "login"
				);
				$this->session->set_userdata($data_session);
				redirect(base_url("admin"));
			}
			elseif ($cek['level'] == 'customer') {
				$data_session = array(
					'nama' => $username,
					'level' => 'customer',
					'status' => "login"
				);
				$this->session->set_userdata($data_session);
				redirect(base_url("customer"));
			}
			 
		}
        else 
        {
            $this->session->set_flashdata('pesan_gagal', '<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-circle"></i> Username atau Password anda salah!</div>');
            $this->index();
        }
	}

	public function logout() 
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('pesan_keluar', '<div class="alert alert-primary" role="alert"><i class="fas fa-info-circle"></i> Anda berhasil logout</div>');
		$this->load->view('login');
	}

}
