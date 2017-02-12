<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function add_user() {
		date_default_timezone_set('America/New_York');
		$created_time = date('Y/m/d H:i');
		$firstname = $_POST['new_firstname'];
		#$firstname = mysqli_real_escape_string($firstname);
		$lastname = $_POST['new_lastname'];
		#$lastname = mysqli_real_escape_string($lastname);
		$email = $_POST['new_username'];
		$password1 = $_POST['new_password1'];
		#$password1 = mysqli_real_escape_string($password1);
		$password2 = $_POST['new_password2'];
		#$password2 = mysqli_real_escape_string($password2);
		$jobcat = $_POST['jobCategoryDD'];
		#$jobcat = mysqli_real_escape_string($jobcat);

		if( user_exists($email) ) {
			$this->load->helper('url');

			echo "<script type='javascript/text'>";
			echo "alert('Sorry, " . $email . " is already registered.  Please choose a different email address.);"; // tell the user the email they used already exists
			echo "window.location.href='" . base_url() . "create/show_form';"; // redirect the user to the create account page
			echo "</script>";
		} else {
			$this->db->query("insert into User (date_created, firstname, lastname, email, password, industry, resume, is_admin, is_manager, is_employee, has_resume, accepted_policy) values ('$created_time', '$firstname', '$lastname', '$email', '$password', '$jobcat', '', '0', '0', '1', '0', '1'"); // mysql statement to enter this user in the db
			header('Location: www.lcfjobs.com');
		}
	}

	public function user_exists( $emailName ) {
		$userName = $this->db->query("find * from User where username='$emailName'");

		if ( mysql_num_rows($userName) > 0 ) { 
			return true; # if user exists return true
		} else { 
			return false; # if user does not exist return false
		}

	}
}