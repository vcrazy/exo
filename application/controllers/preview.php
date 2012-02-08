<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preview extends CI_Controller 
{
	public function index($website_id = NULL)
	{
		if(is_null($website_id))
		{
			$this->load->helper('url');
			redirect('/');
		}

		$website_id = (int)$website_id;

		$this->load->model('Model_site');

		$this->data['view'] = 'site/preview';

		$this->data['website'] = $this->Model_site->read_website($website_id);

		$this->data['pages'] = $this->Model_site->read_pages($website_id);

		if($this->data['pages'])
		{
			$this->data['menus'] = array();

			foreach($this->data['pages'] as $page_num => $page)
			{
				$this->data['menus'][$page_num]['menu_title'] = $page['title'];
				$this->data['menus'][$page_num]['menu_link'] = '#';
			}
		}
		else
		{
			$this->data['menus'] = array();
		}

		$this->load_view();
	}

	protected function load_view($view_name = 'preview_view')
	{
		$this->load->view($view_name, $this->data);
	}
}
