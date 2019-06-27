<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() // untuk load secara global
	{
		parent::__construct();

			$this->load->library('pagination'); // load Pagination library
			$this->load->helper('form', 'url');
			$this->load->model('admin/barang_model');
			//$this->load->model('admin/kredit_model');
			//$this->load->model('admin/trans_kredit_model');
			//$this->load->model('admin/trans_tunai_model');
			//$this->load->model('admin/user_model');

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

	public function table_barang()
	{
		$jumlah_data = $this->barang_model->jumlah_data_barang();
		$config['base_url'] = base_url().'admin/table_barang';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		include 'application/views/admin/komponen/pagination.php';
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['barang'] = $this->barang_model->read_barang($config['per_page'],$from);
		$this->load->view('admin/read_barang',$data);
	}

	public function aksi_create_barang()
	{
		$id_barang = $this->input->post('formId_barang');
		$model 	   = $this->input->post('formModel');
		$tipe 	   = $this->input->post('formTipe');
		$harga 	   = $this->input->post('formHarga');
		$stok 	   = $this->input->post('formStok');
			$data = array(
				'id_barang' => $id_barang,
				'model'	    => $model,
				'tipe' 		=> $tipe,
				'harga' 	=> $harga,
				'stok' 		=> $stok
			);
		$this->barang_model->create_barang($data, 'barang');
		redirect('admin/table_barang');
	}

	public function aksi_edit_barang()
	{
		$where = array('id_barang' => $this->input->post('formId_barang'));
		$data['barang'] = $this->barang_model->edit_barang($where,'barang')->result();
		$this->load->view('admin/table_barang',$data);
	}

	public function aksi_update_barang()
	{
		$id_barang = $this->input->post('formId_barang');
		$model 	   = $this->input->post('formModel');
		$tipe 	   = $this->input->post('formTipe');
		$harga 	   = $this->input->post('formHarga');
		$stok 	   = $this->input->post('formStok');
			$data = array(
				'id_barang' => $id_barang,
				'model'	    => $model,
				'tipe' 		=> $tipe,
				'harga' 	=> $harga,
				'stok' 		=> $stok
			);
			$where = array(
				'id_barang' => $id_barang
			);
		$this->barang_model->update_barang($where,$data,'barang');
		redirect('admin/table_barang');
	}

	public function aksi_delete_barang($id)
	{
		$where = array('id_barang' => $id_barang);
		$this->barang_model->delete_barang($where,'barang');
		redirect('admin/table_barang');
	}

	public function tentang()
	{
		$this->load->view('tentang');
	}
	
}
