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
}
