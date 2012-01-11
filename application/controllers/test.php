<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller
{
	public function index()
	{
		echo 3;
	}

	public function forma()
	{
		// за да валидирам формата ще ни трябва
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('website', 'website!!', 'required|trim|min_length[5]');

		$this->form_validation->set_rules('pass1', 'Password', 'trim|required|matches[pass2]');
		$this->form_validation->set_rules('pass2', 'Password2', 'trim|required');

//		$this->form_validation->run();

		if ($this->form_validation->run() != FALSE)
		{
			redirect('http://probook.bg');
		}

		$this->load->view('forma_view');
	}

	public function captcha()
	{
		$this->load->helper('captcha');
		$this->load->helper('string');

		$vals = array(
			'word'			=> random_string('alnum', 16),
			'img_path'		=> './captcha/',
			'img_url'		=> 'http://exo.loc/captcha/',
			'img_width'		=> 200,
			'img_height'	=> 100,
			'expiration'	=> 7200
		);

		$cap = create_captcha($vals);

		echo $cap['image'];
	}
}
