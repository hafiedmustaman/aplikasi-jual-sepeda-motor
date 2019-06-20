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

		public function honda_matic_tunai()
		{
			$this->load->view('order/honda/matic/tunai');
		}

		public function honda_bebek_tunai()
		{
			$this->load->view('order/honda/bebek/tunai');
		}

		public function yamaha_sport_tunai()
		{
			$this->load->view('order/yamaha/sport/tunai');
		}

		public function yamaha_matic_tunai()
		{
			$this->load->view('order/yamaha/matic/tunai');
		}

		public function yamaha_bebek_tunai()
		{
			$this->load->view('order/yamaha/bebek/tunai');
		}

		public function suzuki_sport_tunai()
		{
			$this->load->view('order/suzuki/sport/tunai');
		}

		public function suzuki_matic_tunai()
		{
			$this->load->view('order/suzuki/matic/tunai');
		}

		public function suzuki_bebek_tunai()
		{
			$this->load->view('order/suzuki/bebek/tunai');
		}

			public function cod_aksi_tambah()
			{
				$this->load->model('tunai_model');

				$id_transaksi 		= $this->input->post('formId_transaksi');
				$id_barang 			= $this->input->post('formId_barang');
				$tgl_transaksi	 	= $this->input->post('formTgl_transaksi');
				$tipe_pembayaran 	= $this->input->post('formTipe_pembayaran');
				$pilihan_pembayaran = $this->input->post('formPilihan_pembayaran');
				$nama_pembeli 		= $this->input->post('formNama_pembeli');
				$alamat_pembeli 	= $this->input->post('formAlamat_pembeli');
				$no_telp 			= $this->input->post('formNo_telp');

				$data = array(
					'id_transaksi' => $id_transaksi,
					'id_barang' => $id_barang,
					'tgl_transaksi' => $tgl_transaksi,
					'tipe_pembayaran' => $tipe_pembayaran,
					'pilihan_pembayaran' => $pilihan_pembayaran,
					'nama_pembeli' => $nama_pembeli,
					'alamat_pembeli' => $alamat_pembeli,
					'no_telp' => $no_telp,
					);
				$this->tunai_model->cod_input_data($data,'trans_tunai');
				redirect('rumah/cod_done');
			}

				public function cod_done()
				{
					$this->load->view('order/cod_done');
				}

			public function langsung_aksi_tambah()
			{
				$this->load->model('tunai_model');

				$id_transaksi 		= $this->input->post('formId_transaksi');
				$id_barang 			= $this->input->post('formId_barang');
				$tgl_transaksi	 	= $this->input->post('formTgl_transaksi');
				$tipe_pembayaran 	= $this->input->post('formTipe_pembayaran');
				$pilihan_pembayaran = $this->input->post('formPilihan_pembayaran');
				$nama_pembeli 		= $this->input->post('formNama_pembeli');
				$alamat_pembeli 	= $this->input->post('formAlamat_pembeli');
				$no_telp 			= $this->input->post('formNo_telp');

				$data = array(
					'id_transaksi' => $id_transaksi,
					'id_barang' => $id_barang,
					'tgl_transaksi' => $tgl_transaksi,
					'tipe_pembayaran' => $tipe_pembayaran,
					'pilihan_pembayaran' => $pilihan_pembayaran,
					'nama_pembeli' => $nama_pembeli,
					'alamat_pembeli' => $alamat_pembeli,
					'no_telp' => $no_telp,
					);
				$this->tunai_model->langsung_input_data($data,'trans_tunai');
				redirect('rumah/langsung_done');
			}

				public function langsung_done()
				{
					$this->load->view('order/langsung_done');
				}

		public function honda_sport_kredit()
		{
			$this->load->model('kredit_model');
			$data = $this->kredit_model->honda_sport_skema();
			$this->load->view('order/honda/sport/kredit', array('data' => $data));
		}
	
		public function honda_matic_kredit()
		{
			$this->load->view('order/honda/matic/kredit');
		}

		public function honda_bebek_kredit()
		{
			$this->load->view('order/honda/bebek/kredit');
		}

		public function yamaha_sport_kredit()
		{
			$this->load->view('order/yamaha/sport/kredit');
		}

		public function yamaha_matic_kredit()
		{
			$this->load->view('order/yamaha/matic/kredit');
		}

		public function yamaha_bebek_kredit()
		{
			$this->load->view('order/yamaha/bebek/kredit');
		}

		public function suzuki_sport_kredit()
		{
			$this->load->view('order/suzuki/sport/kredit');
		}

		public function suzuki_matic_kredit()
		{
			$this->load->view('order/suzuki/matic/kredit');
		}

		public function suzuki_bebek_kredit()
		{
			$this->load->view('order/suzuki/bebek/kredit');
		}

	public function tentang()
	{
		$this->load->view('tentang');
	}

}