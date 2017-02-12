<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Announce_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAnnouncements() {
        $this->db->select("*");
        $this->db->from('Announcements');
        $results = $this->db->get()->result();

        return $results;
    }

}