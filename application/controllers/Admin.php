<?php

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function show_form() {
		$data['title'] = "LCFJ | Admin";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/admin');
        $this->load->view('templates/footer', $data);
	}

	function enter_job() {
		$this->load->model('admin_model');
		$this->admin_model->add_job();
		redirect('index.php/admin/show_form');
	}
}









