<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tunai_model extends CI_Model{

    private $dbo;
    function __construct()
    {
        parent::__construct();
        $this->dbo = $this->load->database('default', true);
    }

    function cod_input_data($data, $table)
    {
        $this->dbo->insert($table, $data);
    }

    function langsung_input_data($data, $table)
    {
        $this->dbo->insert($table, $data);
    }

}
