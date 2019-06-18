<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    private $dbo;
    
    function __construct()
    {
        parent:: __construct();
        $this->dbo = $this->load->database('default', true);
    }

	public function cek_login($table, $where)
    {
        return $this->dbo->get_where($table, $where);
	}
}
