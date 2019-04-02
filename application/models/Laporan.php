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
        $this->db->order_by('laporan_date_created','DESC');
        $query = $this->db->get('sipmas_laporan');
        return $query->result_array();
    }
}