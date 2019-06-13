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
}