<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getLoggedInUsers() {
		$this->db->select("*");
		$this->db->from("Users");
		$where = "is_logged_in = 1";
		$this->db->where($where);

		$results = $this->db-get()->result();
		return $results;
	}

	public function add_job() {
		$date = date("Y/m/d");
		$city = $_POST['city_input'];
		$company = $_POST['company_input'];
		$description = $_POST['description_input'];

		$this->db->query("insert into Jobs (date_published, city, company, job_description) VALUES($date, $city, $company, $description)");
	}

}




