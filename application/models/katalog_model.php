<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog_model extends CI_Model {

    private $dbo;

    function __construct()
    {
        parent:: __construct();
        $this->dbo = $this->load->database('default', true);
    }

    function honda_sport()
    {
        return $this->db->get_where('barang', array('id_barang' => 'b0001'))->result_array();
    }

    function honda_matic()
    {
        return $this->db->get_where('barang', array('id_barang' => 'b0002'))->result_array();
    }

    function honda_bebek()
    {
        return $this->db->get_where('barang', array('id_barang' => 'b0003'))->result_array();
    }

    function yamaha_sport()
    {
        return $this->db->get_where('barang', array('id_barang' => 'b0004'))->result_array();
    }

    function yamaha_matic()
    {
        return $this->db->get_where('barang', array('id_barang' => 'b0005'))->result_array();
    }
    
    function yamaha_bebek()
    {
        return $this->db->get_where('barang', array('id_barang' => 'b0006'))->result_array();
    }

    function suzuki_sport()
    {
        return $this->db->get_where('barang', array('id_barang' => 'b0007'))->result_array();
    }

    function suzuki_matic()
    {
        return $this->db->get_where('barang', array('id_barang' => 'b0008'))->result_array();
    }

    function suzuki_bebek()
    {
        return $this->db->get_where('barang', array('id_barang' => 'b0009'))->result_array();
    }
}
