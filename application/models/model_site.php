<?php
class Model_site extends CI_Model
{
	function __construct()
	{
		parent::__construct();
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
	
	public function site_info($name, $description)
	{
		$data = array(
			'site_name' => $name,
			'site_description' => $description
			);
		$this->db->where('site_name', $name);
		$this->db->update('sites', $data);
	}
	
	public function get_domain($website_id)
	{
		$this->db->select('domain, site_name, site_description');
		$this->db->from('sites');
		$this->db->where('site_id', $website_id); 
		$arr=array();
		$query = $this->db->get();
		
		foreach ($query->result() as $row)
		{
			$arr['domain']=$row->domain;
			$arr['name']=$row->site_name;
			$arr['description']=$row->site_description;
		}
		return $arr;
	}
}
