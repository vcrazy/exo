<?php

class Model_admin extends CI_Model{

	public function create_menu($title, $number)
	{
		$data = array(
			'menu_title' => $title,
			'menu_number' => $number
		);

		$this->db->insert('menus', $data); 
	}

	public function get_menus ()
	{
		$this->db->select('menu_title, menu_id');
		$this->db->from('menus');
		$this->db->order_by('menu_number'); 
		$query = $this->db->get();
		
		$arr = array();
		foreach ($query->result_array() as $row)
		{
			$arr[] = $row['menu_title'];
		}
		return $arr;
	}

	public function delete_menu ($number)
	{       
			$this->db->where('menu_id', $number);
			$this->db->delete('menus');
	}
}

?>