<?php
class Model_site extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function preview($website_id = NULL)
	{
		if(is_null($website_id))
		{
			return FALSE;
		}

		$data = array();
		$website_id = (int)$website_id;

		$data['view'] = 'site/preview';

		$data['website'] = $this->read_website($website_id);

		if(!$data['website']) return FALSE;

		$data['pages'] = $this->read_pages($website_id);

		if($data['pages'])
		{
			$data['menus'] = array();
			$this->load->library('Helper');

			foreach($data['pages'] as $page_num => $page)
			{
				$data['menus'][$page_num]['menu_title'] = $page['title'];
				$data['menus'][$page_num]['menu_link'] = '#' . Helper::cyr2lat($page['title']);;
			}
		}
		else
		{
			$data['menus'] = array();
		}

		return $data;
	}

	public function preview_domain($domain = NULL)
	{
		if(is_null($domain))
		{
			return FALSE;
		}

		return $this->preview($this->read_website_id($domain));
	}

	public function read_website($website_id = NULL)
	{
		if(is_null($website_id))
		{
			return FALSE;
		}

		$this->db->where('site_id', $website_id);
		$this->db->limit(1);
		$query = $this->db->get('sites');

		if($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
		{
			return FALSE;
		}
	}

	public function read_pages($website_id = NULL)
	{
		if(is_null($website_id))
		{
			return FALSE;
		}

		$this->db->where('site_id', $website_id);
		$this->db->order_by('page_num');

		$query = $this->db->get('pages');

		if($query->num_rows() > 0)
		{
			$arr = array();

			foreach($query->result_array() as $row)
			{
				$arr[$row['page_num']] = $row;
			}

			return $arr;
		}
		else
		{
			return FALSE;
		}
	}

	public function read_website_id($domain)
	{
		$this->db->where('domain', $domain);
		$this->db->limit(1);
		$query = $this->db->get('sites');

		if($query->num_rows() > 0)
		{
			$row = $query->row_array();
			return $row['site_id'];
		}
		else
		{
			return FALSE;
		}
	}
}
