<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model{

    private $dbo;
    function __construct()
    {
        parent::__construct();
        $this->dbo = $this->load->database('default', true);
    }

    function create_barang($data, $table)
    {
        $this->dbo->insert($table, $data);
    }

    function read_barang($number, $offset)
    {
        return $query = $this->dbo->get('barang', $number, $offset)->result();
    }

    function edit_barang($where, $table)
    {
        return $this->dbo->get_where($table, $where);
    }

    function update_barang($where, $data, $table)
    {
        $this->dbo->where($where);
        $this->dbo->update($table, $data);
    }

    function delete_barang($where, $table)
    {
        $this->dbo->where($where);
        $this->dbo->delete($table);
    }

    function jumlah_data_barang()
    {
        return $this->dbo->get('barang')->num_rows();
    }
}