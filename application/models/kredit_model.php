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
        $query = $this->db->query("SELECT * FROM kredit
        WHERE id_kredit IN('k0001', 'k0002', 'k0003', 'k0028', 'k0029', 'k0030')")->result_array();
        return $query;
    }

    function honda_matic_skema()
    {
        $query = $this->db->query("SELECT * FROM kredit
        WHERE id_kredit IN('k0004', 'k0005', 'k0006', 'k0031', 'k0032', 'k0033')")->result_array();
        return $query;
    }

    function honda_bebek_skema()
    {
        $query = $this->db->query("SELECT * FROM kredit
        WHERE id_kredit IN('k0007', 'k0008', 'k0009', 'k0034', 'k0035', 'k0036')")->result_array();
        return $query;
    }

    function yamaha_sport_skema()
    {
        $query = $this->db->query("SELECT * FROM kredit
        WHERE id_kredit IN('k0010', 'k0011', 'k0012', 'k0037', 'k0038', 'k0039')")->result_array();
        return $query;
    }

    function yamaha_matic_skema()
    {
        $query = $this->db->query("SELECT * FROM kredit
        WHERE id_kredit IN('k0013', 'k0014', 'k0015', 'k0040', 'k0041', 'k0042')")->result_array();
        return $query;
    }

    function yamaha_bebek_skema()
    {
        $query = $this->db->query("SELECT * FROM kredit
        WHERE id_kredit IN('k0016', 'k0017', 'k0018', 'k0043', 'k0044', 'k0045')")->result_array();
        return $query;
    }

    function suzuki_sport_skema()
    {
        $query = $this->db->query("SELECT * FROM kredit
        WHERE id_kredit IN('k0019', 'k0020', 'k0021', 'k0046', 'k0047', 'k0048')")->result_array();
        return $query;
    }

    function suzuki_matic_skema()
    {
        $query = $this->db->query("SELECT * FROM kredit
        WHERE id_kredit IN('k0022', 'k0023', 'k0024', 'k0049', 'k0050', 'k0051')")->result_array();
        return $query;
    }

    function suzuki_bebek_skema()
    {
        $query = $this->db->query("SELECT * FROM kredit
        WHERE id_kredit IN('k0025', 'k0026', 'k0027', 'k0052', 'k0053', 'k0054')")->result_array();
        return $query;
    }

        function kredit_input_data($data, $table)
        {
            $this->dbo->insert($table, $data);
        }

}
