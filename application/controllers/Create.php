<?php

class Create extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function show_form() {
		$data['title'] = "LCFJ | Create Account";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/create_account');
        $this->load->view('templates/footer', $data);
	}

	public function create_user() {
		$this->load->model('create_model');
		$this->create_model->add_user();
	}

}




