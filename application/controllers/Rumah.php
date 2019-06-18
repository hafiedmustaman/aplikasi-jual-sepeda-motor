<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->model('login_model');
	}

    public function index()
	{
		$this->load->view('awal');

		if ($this->session->userdata('login') == "login" || $this->session->userdata('level') == 'administrator') 
		{
			redirect(base_url("admin"));
		}
		elseif ($this->session->userdata('login') == "login" || $this->session->userdata('level') == 'customer') 
		{
			redirect(base_url("customer"));
		}
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

}