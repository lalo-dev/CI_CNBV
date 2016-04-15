<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['name'] = "Eduardo";
		$this->load->view('index', $data);
	}

	public function greet_person($name)
	{
		$data['name'] = $name;
		$this->load->view('persona/greet_person', $data);
	}

	public function greet_everyone($person_hosting)
	{
		$data['person'] = $person_hosting;
		$data['guests'] = ['Marco', 'Sergio', 'Daniel'];
		$this->load->helper('url');
		$this->load->view('greet_everyone', $data);
	}

	function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}

	public function person($user_id)
	{
		$users = $this->User->get_user_details($user_id);
		$data['users'] = $users;
		$this->load->view('persona/person', $data);
	}
}
