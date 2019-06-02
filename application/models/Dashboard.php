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

    function count_spt(){
        $this->db->select('*');
        $this->db->from('sipmas_spt');
        $this->db->where('spt_status','aktif');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_spt_setuju($param){
        $this->db->select('*');
        $this->db->from('sipmas_spt');
        $this->db->where('spt_status_surat',$param);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_pembimbing(){
        $this->db->select('*');
        $this->db->from('sipmas_user');
        $this->db->where('user_hak_akses','pk');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_laporan(){
        $this->db->select('*');
        $this->db->from('sipmas_laporan');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_spt_pk($id,$param){
        $this->db->select('*');
        $this->db->from('sipmas_spt');
        $this->db->where('spt_user_id',$id);
        $this->db->where('spt_status_surat',$param);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_laporan_pk($id){
        $this->db->select('*');
        $this->db->from('sipmas_laporan');
        $this->db->where('laporan_user_id',$id);
        $query = $this->db->get();
        return $query->num_rows();
    }
}