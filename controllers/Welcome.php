<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	/*
	function __construct()
	{
		parent::__construct();
	}
	*/

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function hello($name = null)
	{
		$this->load->view('hello_view');
		
	}

	public function world($name = null)
	{
		echo "Hello, ". $name;
	}

	function blog()
	{
		$this->load->view('template/head_view');
		$this->load->view('template/body_view');
		$this->load->view('template/foot_view');
	}
	function user()
	{
		$data['name'] = 'Satit Rianpit';
		$data['email'] = 'xxxxx@gmail.com';
		$this->load->view('user_view',$data);
	}
}
