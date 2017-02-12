<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Vets_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAnnouncements() {
        $this->db->select("*");
        $this->db->from('Vets');
        $results = $this->db->get()->result();

        return $results;
    }
}