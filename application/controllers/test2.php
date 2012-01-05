<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test2 extends CI_Controller
{
	public function index()
	{
		$data = array();
		$data['random_number'] = rand();

		$this->load->view('test2_view', $data);
	}
}
