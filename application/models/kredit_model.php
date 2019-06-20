<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kredit_model extends CI_Model{

    private $dbo;
    function __construct()
    {
        parent::__construct();
        $this->dbo = $this->load->database('default', true);
    }

    function honda_sport_skema()
    {
        $this->db->select('*');
        $this->db->from('kredit');
        $names = array('k0001', 'k0002', 'k0003', 'k0028', 'k0029', 'k0030');
        $this->db->where(array('id_kredit', $names));
        return $query = $this->db->get()->result_array();
    }

    function kredit_input_data($data, $table)
    {
        $this->dbo->insert($table, $data);
    }

}
