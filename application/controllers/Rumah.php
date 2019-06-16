<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah extends CI_Controller {

    public function index()
	{
		$this->load->view('awal');
	}

	public function berita()
	{
		$this->load->view('berita');
	}

		public function artikel01()
		{
			$this->load->view('artikel/083100615');
		}

	public function tentang()
	{
		$this->load->view('tentang');
	}
}