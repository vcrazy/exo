<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function create()
	{
		if(!empty($_POST))
		{
			$this->load->model('Model_site');
			$result = $this->Model_site->insert_project($this->input->post('name'));

			if($result)
			{
				redirect(SITE_URL . '/site/edit/' . $result);
			}
		}

		$this->load->view('site/create_view');
	}

	public function edit($website_id)
	{
		$this->load->view('site/edit_view');
	}
}
