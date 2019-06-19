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

		public function honda_sport()
		{
			$this->load->model('katalog_model');
			$data = $this->katalog_model->honda_sport();
			$this->load->view('katalog/honda_sport', array('data' => $data));
		}

		public function honda_matic()
		{
			$this->load->model('katalog_model');
			$data = $this->katalog_model->honda_matic();
			$this->load->view('katalog/honda_matic', array('data' => $data));
		}

		public function honda_bebek()
		{
			$this->load->model('katalog_model');
			$data = $this->katalog_model->honda_bebek();
			$this->load->view('katalog/honda_bebek', array('data' => $data));
		}

	public function yamaha()
	{
		$this->load->view('katalog/yamaha');
	}

		public function yamaha_sport()
		{
			$this->load->model('katalog_model');
			$data = $this->katalog_model->yamaha_sport();
			$this->load->view('katalog/yamaha_sport', array('data' => $data));
		}

		public function yamaha_matic()
		{
			$this->load->model('katalog_model');
			$data = $this->katalog_model->yamaha_matic();
			$this->load->view('katalog/yamaha_matic', array('data' => $data));
		}

		public function yamaha_bebek()
		{
			$this->load->model('katalog_model');
			$data = $this->katalog_model->yamaha_bebek();
			$this->load->view('katalog/yamaha_bebek', array('data' => $data));
		}

	public function suzuki()
	{
		$this->load->view('katalog/suzuki');
	}

		public function suzuki_sport()
		{
			$this->load->model('katalog_model');
			$data = $this->katalog_model->suzuki_sport();
			$this->load->view('katalog/suzuki_sport', array('data' => $data));
		}

		public function suzuki_matic()
		{
			$this->load->model('katalog_model');
			$data = $this->katalog_model->suzuki_matic();
			$this->load->view('katalog/suzuki_sport', array('data' => $data));
		}

		public function suzuki_bebek()
		{
			$this->load->model('katalog_model');
			$data = $this->katalog_model->suzuki_bebek();
			$this->load->view('katalog/suzuki_bebek', array('data' => $data));
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

	public function pemesanan()
	{
		$this->load->view('pemesanan');
	}

		public function honda_sport_tunai()
		{
			$this->load->view('order/honda/sport/tunai');
		}

	public function tentang()
	{
		$this->load->view('tentang');
	}

}