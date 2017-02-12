<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lcfj_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getJobs() {
        $this->db->select("*");
        $this->db->from('Locations');
        $where = "date between (NOW() - INTERVAL 14 DAY) AND NOW() ORDER BY date DESC";
        $this->db->where($where);
        $results = $this->db->get()->result();

        return $results;
    }

    public function getLocations() {
        $return = array();

        $this->db->select("latitude,longitude,description,company,address,city,state,zip,date");
        $this->db->from("Locations");
        /*
        $mapWhere = "date between (NOW() - INTERVAL 14 DAY) AND NOW()";
        $this->db->where($mapWhere); */
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                array_push($return, $row);
            }
        }
        return $return;
    }



}









