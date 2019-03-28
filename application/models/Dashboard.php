<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 25-Mar-19
 * Time: 11:52
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Model{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function count_permintaan(){
        $this->db->select('*');
        $this->db->from('sipmas_permintaan');
        $this->db->where('permintaan_status','aktif');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_permintaan_setuju($param){
        $this->db->select('*');
        $this->db->from('sipmas_permintaan');
        $this->db->where('permintaan_status_surat',$param);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_tahanan(){
        $this->db->select('*');
        $this->db->from('sipmas_permintaan');
        $this->db->join('sipmas_detail','sipmas_detail.detail_permintaan_id = sipmas_permintaan.permintaan_id');
        $this->db->where('permintaan_status','aktif');
        $query = $this->db->get();
        return $query->num_rows();
    }
}