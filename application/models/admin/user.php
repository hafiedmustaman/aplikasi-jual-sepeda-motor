<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{

    private $dbo;
    function __construct()
    {
        parent::__construct();
        $this->dbo = $this->load->database('default', true);
    }

    function tampil_data($number, $offset)
    {
        return $query = $this->dbo->get('user',$number,$offset)->result();
    }

    function jumlah_data()
    {
        return $this->dbo->get('user')->num_rows();
    }

    function input_data($data, $table)
    {
        $this->dbo->insert($table,$data);
    }

    function edit_data($where, $table)
    {
        return $this->dbo->get_where($table, $where);
    }

    function update_data($where,$data,$table)
    {
        $this->dbo->where($where);
        $this->dbo->update($table,$data);
    }

    function hapus_data($where,$table)
    {
        $this->dbo->where($where);
        $this->dbo->delete($table);
    }

}
