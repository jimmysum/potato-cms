<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Home_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data = array(
			'name' => 'name',
			'age'	=> 'age'
		);
		$data['msg'] = array(
			'name' => 'name',
			'age'	=> 'age'
		);
		$this->load->model('user');
// 		$user = $this->user->getUserInfo('hello');
		$this->load->view('home/index.html', $data);
// 		$this->load->view('home/one.html');
	}
}