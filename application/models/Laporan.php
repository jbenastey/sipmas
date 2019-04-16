<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 02-Apr-19
 * Time: 21:41
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Model{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }
    function get_laporan(){
        $this->db->select('*');
        $this->db->from('sipmas_laporan');
        $this->db->join('sipmas_detail','sipmas_detail.detail_id = sipmas_laporan.laporan_detail_id');
        $this->db->order_by('laporan_date_created','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    function create_laporan($data){
        return $this->db->insert('sipmas_laporan',$data);
    }
    function get_laporan_by_id($id){
        $this->db->select('*');
        $this->db->from('sipmas_laporan');
        $this->db->where('laporan_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}