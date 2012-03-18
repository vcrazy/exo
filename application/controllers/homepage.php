<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends MY_Controller // extends our controller - see it in the 'core' folder
{
	protected $data; // comes from MY_Controller but see it here to know we have it and should use it!

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['view'] = 'homepage/homepage_view'; // main view we will see in the middle of the page

		preg_match_all('/(.*).exo.bg$/i', $_SERVER['SERVER_NAME'], $matches);

		if(isset($matches[1]) && isset($matches[1][0]) && $matches[1][0]) // in subdomain!
		{
			$this->load->model('Model_site');
			$preview = $this->Model_site->preview_domain($matches[1][0]);

			if($preview)
			{
				$this->data = array_merge($this->data, $preview);
				$view = 'preview_view';
			}
			else
			{
				$this->load->helper('url');
				redirect('http://exo.bg/');
			}
		}
		else
		{
			$view = 'main_template_view';
		}

		$this->load_view($view); // declared in MY_Controller
	}
}