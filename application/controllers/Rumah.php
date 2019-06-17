<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->model('m_login');
	}

    public function index()
	{
		$this->load->view('awal');
	}

	// katalog
	public function honda()
	{
		$this->load->view('katalog/honda');
	}

	public function yamaha()
	{
		$this->load->view('katalog/yamaha');
	}

	public function suzuki()
	{
		$this->load->view('katalog/suzuki');
	}

	public function berita()
	{
		$this->load->view('berita');
	}

		public function artikel01()
		{
			$this->load->view('artikel/112200515');
		}

		public function artikel02()
		{
			$this->load->view('artikel/113800015');
		}

		public function artikel03()
		{
			$this->load->view('artikel/083100615');
		}

	public function tentang()
	{
		$this->load->view('tentang');
	}

	public function login()
	{
		$this->load->view('login');

		if ($this->session->userdata('login') == "login" || $this->session->userdata('level') == 'administrator') 
		{
			redirect(base_url("admin/dasbor"));
		}
		elseif ($this->session->userdata('login') == "login" || $this->session->userdata('level') == 'customer') 
		{
			redirect(base_url("customer/dasbor"));
		}
	}

	public function cek_login()	
	{
		$this->form_validation->set_rules('formUsername', 'Username', 'required', array('required' => '<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-circle"></i> %s harus diisi!</div>'));
		$this->form_validation->set_rules('formPassword', 'Password', 'required', array('required' => '<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-circle"></i> %s harus diisi!</div>'));

		if ($this->form_validation->run() == FALSE) 
		{
			$this->login();
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
  
		$jumlah = $this->m_login->cek_login('user',$where)->num_rows();
		$cek = $this->m_login->cek_login('user',$where)->row_array();
  
		if($jumlah > 0) {
  
			if ($cek['level'] == 'administrator') {
				$data_session = array(
					'nama' => $username,
					'level' => 'administrator',
					'status' => "login"
				);
				$this->session->set_userdata($data_session);
				redirect('menu_admin');
			}
			elseif ($cek['level'] == 'customer') {
				$data_session = array(
					'nama' => $username,
					'level' => 'customer',
					'status' => "login"
				);
				$this->session->set_userdata($data_session);
				redirect('menu_manager');
			}
			 
		}
			else 
			{
				$this->session->set_flashdata('pesan_gagal', '<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-circle"></i> Username atau Password anda salah!</div>');
				$this->login();
			}
	}

	public function logout() 
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('pesan_keluar', '<div class="alert alert-primary" role="alert"><i class="fas fa-info-circle"></i> Anda berhasil logout</div>');
		$this->load->view('login');
	}
}