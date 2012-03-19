<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preview extends CI_Controller 
{
	public function index($website_id = NULL)
	{
		$this->load->model('Model_site');

		$this->data = $this->Model_site->preview($website_id);

		$this->load_view();
	}

	protected function load_view($view_name = 'preview_view')
	{
		$this->load->view($view_name, $this->data);
	}
}
