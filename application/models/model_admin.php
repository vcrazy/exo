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
        public function searchfor ($arr)
        {
               $count=0;    
                foreach ($arr as $key => $value)
                {
                    if ($count==0)
                    {
                        $this->db->like($key, $value);
                    }
                    else
                    {
                        $this->db->or_like($key, $value); 
                    }
                    $count++;
                }
                $this->db->select('id, email,sites.domain ,priority');
                $this->db->from('users');
                $this->db->join('sites', 'users.id = sites.user_id');
                $query=$this->db->get();
                return $query->result(); 
           //     $this->db->select('id,');
            //    $this->db->where('name', $name);
	//	$this->db->from('users');
	//	$query = $this->db->get(); 
        }
        public function checkfromid ($id)
        {
           $query = $this->db->get_where('users', array('id' => $id));
           $arr = array();
           foreach ($query->result() as $row)
            {
                 $arr['email']=$row->email;
                 $arr['priority']=$row->priority;
            }
           return $arr;
        }
        public function change_priority($data)
        {
            $arr = array(
               'priority' => $data['priority']
            );

            $this->db->where('id', $data['id']);
            $this->db->update('users', $arr); 
        }
}

?>