<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preview extends CI_Controller 
{
	public function index($website_id = NULL)
	{
		$this->load->model('Model_site');

<<<<<<< HEAD
		$this->data['view'] = 'site/preview';

		$this->data['website'] = $this->Model_site->read_website($website_id);

		$arr2 = $this->Model_site->get_domain($website_id);
		
		if(empty ($arr2))
			{
			$this->data['domain']='EXO.bg';
			$this->data['name']='EXO.bg';
			$this->data['description']='EXO.bg';
			}
			else
				{
				$this->data['domain']=$arr2['domain'];
				$this->data['name']=$arr2['name'];
				$this->data['description']=$arr2['description'];
				}
		
		$this->data['pages'] = $this->Model_site->read_pages($website_id);

		if($this->data['pages'])
		{
			$this->data['menus'] = array();
			$this->load->library('Helper');

			foreach($this->data['pages'] as $page_num => $page)
			{
				$this->data['menus'][$page_num]['menu_title'] = $page['title'];
				$this->data['menus'][$page_num]['menu_link'] = '#' . Helper::cyr2lat($page['title']);;
			}
		}
		else
		{
			$this->data['menus'] = array();
		}
=======
		$this->data = $this->Model_site->preview($website_id);
>>>>>>> 4d540ad2301835cdfdd3f4b4b57d3fbc098fa571

		$this->load_view();
	}

	protected function load_view($view_name = 'preview_view')
	{
		$this->load->view($view_name, $this->data);
	}
}
