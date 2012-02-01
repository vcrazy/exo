<?php

class Model_admin extends CI_Model{

	public function create_menu($title, $number, $link)
	{
		$data = array(
			'menu_title' => $title,
			'menu_number' => $number,
			'menu_link' => $link
		);

		$this->db->insert('menus', $data); 
	}
	public function get_menus ()
	{
		$this->db->select('menu_title, menu_id, menu_link');
		$this->db->from('menus');
		$this->db->order_by('menu_number'); 
		$query = $this->db->get();
		
		$arr = array();
		foreach ($query->result_array() as $row)
		{
			$arr[] = $row;
		}
		return $arr;
	}
       public function delete_menu ($number)
        {       
                $this->db->where('menu_id', $number);
				$this->db->delete('menus');
        }
	
	public function create_footer($text, $link)
	{
		$data = array(
			'footer_text' => $text,
			'footer_link' => $link
		);

		$this->db->insert('footer_links', $data); 
	}
	public function get_footer ()
	{
		$this->db->select('footer_text, footer_link');
		$this->db->from('footer_links');
		$query = $this->db->get();
		
		$arr = array();
		foreach ($query->result_array() as $row)
		{
			$arr[] = $row;
		}
		return $arr;
	}
}

?>