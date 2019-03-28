<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 21-Mar-19
 * Time: 21:42
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Model{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function get_surat(){
        $this->db->from('sipmas_permintaan');
        $this->db->order_by('permintaan_date_created','DESC');
        $query =  $this->db->get();
        return $query->result_array();
    }

    function get_surat_by_id($id){
        $this->db->select('*');
        $this->db->from('sipmas_permintaan');
        $this->db->where('permintaan_id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }

    function get_surat_detail($id){
        $this->db->select('*');
        $this->db->from('sipmas_permintaan');
        $this->db->join('sipmas_detail','sipmas_detail.detail_permintaan_id = sipmas_permintaan.permintaan_id');
        $this->db->where('permintaan_id',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function create_permintaan($dataSurat){
        return $this->db->insert('sipmas_permintaan',$dataSurat);
    }

    function create_permintaan_detail($detailSurat){
        return $this->db->insert_batch('sipmas_detail',$detailSurat);
    }

    function update_permintaan($id,$dataSurat){
        $this->db->where('permintaan_id',$id);
        return $this->db->update('sipmas_permintaan',$dataSurat);
    }

    function update_permintaan_detail($detailSurat){
        return $this->db->update_batch('sipmas_detail',$detailSurat,'detail_id');
    }

    function delete_permintaan($id,$dataSurat){
        $this->db->where('permintaan_id',$id);
        return $this->db->update('sipmas_permintaan',$dataSurat);
    }

    function disposition($id,$data){
        $this->db->where('permintaan_id', $id);
        return $this->db->update('sipmas_permintaan', $data);
    }
}