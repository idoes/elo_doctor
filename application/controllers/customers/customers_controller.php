<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class customers_controller extends CI_Controller {

	public function index()
	{
		$data = array();
		
		$data['title'] = 'Welcome to ELO Doctor.com';
		$data['page'] = 'home';
		$this->load->view('customers/templates/header', $data);
		$this->load->view('customers/home', $data);
		$this->load->view('customers/templates/footer', $data);
	}
	
	public function register()
	{
		$data = array();
		$data['title'] = 'Register';
		$this->load->view('customers/templates/header', $data);
		$this->load->view('customers/customer_registration_form', $data);
		$this->load->view('customers/templates/footer', $data);
	}
	
	public function information()
	{
		$data = array();
		$data['title'] = 'Information';
		$data['page'] = 'about';
		$this->load->view('customers/templates/header', $data);
		$this->load->view('customers/information', $data);
		$this->load->view('customers/templates/footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */