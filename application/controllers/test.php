<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller
{
	public function index()
	{
		echo '<pre>';

		$size = pow(2, 19); // 16 is just an example, could also be 15 or 17

		$startTime = microtime(true);

		$array = array();
		for ($key = 0, $maxKey = $size - 1; $key <= $maxKey; ++$key) {
			$array[$key] = 0;
		}

		$endTime = microtime(true);

		echo 'Inserting ', $size, ' good elements took ', $endTime - $startTime, ' seconds', "\n";

		$startTime = microtime(true);

		$array = array();
		for ($key = 0, $maxKey = $size - 1; $key <= $maxKey; $key++) {
			$array[$key] = 0;
		}

		$endTime = microtime(true);

		echo 'Inserting ', $size, ' good elements took ', $endTime - $startTime, ' seconds', "\n";

		$startTime = microtime(true);

		$array = array();
		$key = 0;
		$maxKey = $size - 1;
		while($key <= $maxKey)
		{
			$array[$key] = 0;
			$key++;
		}

		$endTime = microtime(true);

		echo 'Inserting ', $size, ' good elements took ', $endTime - $startTime, ' seconds', "\n";

		$startTime = microtime(true);
		$key = 0;
		$array = array_fill($key, $size - 1, 0);

		$endTime = microtime(true);

		echo 'Inserting ', $size, ' good elements took ', $endTime - $startTime, ' seconds', "\n";
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

<<<<<<< HEAD
	public function git_test()
	{
		echo 2423543;
	}

=======
        public function forgithub()
        {
           echo 'lhhfusdfudsgfdsgfhsdgfhsdg';
        }
>>>>>>> 9fa7e428580f6bb22aaec63c093bfa64f0b12cc2
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
