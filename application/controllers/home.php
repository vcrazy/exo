<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{

	public function index()
	{
		$this->load->view('welcome_message');
	}
        public function test()
	{
		$this->load->model('Model_home');
                $this->Model_home->arr();
	}
}
