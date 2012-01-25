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

	public function git_test()
	{
		echo 2423543;
	}

	public function forgithub()
	{
	   echo 'lhhfusdfudsgfdsgfhsdgfhsdg';
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

	public function prosti_neshta()
	{
		$vcrazy = 4;
		$дмоианфавионфав = 5;
		$arr = array();

		$arr[0] = 2;
		$arr[1] = 3;

		$arr = array(0 => 1,2,3,'element',4,5,43543,5,433,4, 20 => 'te1111');

		for($i = 0; $i < 20; $i++)
		{
			$arr[$i] = $i;
		}
		ksort($arr);

		foreach($arr as $array_key => $array_val)
		{
			echo $array_key . ' - ' . $array_val . '<br />';
		}

		return;

		array_push($arr, 'fer');

		$arr = array(); // creates array
		$arr[] = 'test'; // adds element to the back

		array_unshift($arr, 'treste');

		var_dump($arr);

		echo 'ok';
	}

	public function page_load()
	{
		$time = microtime(); 
		$time = explode(" ", $time); 
		$time = $time[1] + $time[0]; 
		$start = $time; 
	
	
		
		$a = array_fill(0, 1000000, 0);
		
		
		
		$time = microtime(); 
		$time = explode(" ", $time); 
		$time = $time[1] + $time[0]; 
		$finish = $time; 
		$totaltime = ($finish - $start); 
		printf ("This page took %f seconds to load.", $totaltime); 
	}
}
