<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() // untuk load secara global
	{
		parent::__construct();

			$this->load->library('pagination'); // load Pagination library
			$this->load->helper('form', 'url');
			$this->load->model('admin/user');

			if($this->session->userdata('status') !== "login") {
                $this->session->set_flashdata('belum_login', '<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-circle"></i> 
                Anda belum login, silahkan login dulu!</div>');
                redirect(base_url("login"));
            }
			elseif ($this->session->userdata('level') !== 'administrator') {
				redirect(base_url("login"));
			}
	}

	public function index()
	{
		$this->load->view('admin/dasbor');
	}

		public function aksi_tambah()
		{
			$id = $this->input->post('formID');
			$username = $this->input->post('formUsername');
			$password = $this->input->post('formPassword');
			$level = $this->input->post('formLevel');

			$data = array(
				'id' => $id,
				'username' => $username,
				'password' => md5($password),
				'level' => $level
				);
			$this->m_user->input_data($data,'user');
			redirect('menu_admin/user');
		}

		public function aksi_edit()
		{
			$where = array('id' => $this->input->post('formID'));
			$data['user'] = $this->m_user->edit_data($where,'user')->result();
			$this->load->view('server_admin/user',$data);
		}

		public function aksi_update()
		{
			$id = $this->input->post('formID');
			$username = $this->input->post('formUsername');
			$password = $this->input->post('formPassword');
			$level = $this->input->post('formLevel');

			$data = array(
				'username' => $username,
				'password' => md5($password),
				'level' => $level
			);

			$where = array(
				'id' => $id
			);

			$this->m_user->update_data($where,$data,'user');
			redirect('menu_admin/user');
		}

		public function aksi_hapus($id)
		{
			$where = array('id' => $id);
			$this->m_user->hapus_data($where,'user');
			redirect('menu_admin/user');
		}

	public function database()
	{
		$this->load->view('info/db');
	}

	public function pengaturan()
	{
		$this->load->view('server_admin/setting');
	}
	
}
