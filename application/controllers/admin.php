<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() // untuk load secara global
	{
		parent::__construct();

			$this->load->library('pagination'); // load Pagination library
			$this->load->helper('form', 'url');
			$this->load->model('admin/user');

			if($this->session->userdata('status') !== "login") 
			{
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
	
}
