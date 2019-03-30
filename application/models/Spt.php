<?php
/**
 * Created by PhpStorm.
 * User: jbenastey
 * Date: 28-Mar-19
 * Time: 15:17
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Spt extends CI_Model{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function get_spt(){
        $this->db->from('sipmas_spt');
        $this->db->order_by('spt_date_created','DESC');
        $query =  $this->db->get();
        return $query->result_array();
    }

    function get_spt_by_id($id){
        $this->db->select('*');
        $this->db->from('sipmas_spt');
        $this->db->where('spt_id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }

    function get_spt_detail($id){
        $this->db->select('*');
        $this->db->from('sipmas_spt');
        $this->db->join('sipmas_detail','sipmas_detail.detail_spt_id = sipmas_spt.spt_id');
        $this->db->where('spt_id',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function create_spt($dataSpt){
        return $this->db->insert('sipmas_spt',$dataSpt);
    }
}