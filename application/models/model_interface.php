<?php

class Model_interface extends CI_Model{

		public function add_website()
		{
            
		}
        
        public function add_page()
        {
            
        }
        public function get_websites($user_id)
        {
            $this->db->select('site_id,site_name,domain');
            $this->db->from('sites');
            $this->db->where('user_id', $user_id); 
	    $query = $this->db->get();
            $arr = array();
	    foreach ($query->result_array() as $row)
		{
			$arr[] = $row;
		}
	    return $arr;
        }

        public function change_user_pass($arr)
        {
           $old_pass = $arr['pass'];
           $new_pass = $arr['n_pass'];
           $user_id = $arr['user'];
             $data = array(
              'password' => md5($new_pass)
                );
            $this->db->where('id', $user_id);
            $this->db->where('password', md5($old_pass));
            $query = $this->db->update('users',$data);
        }
        public function change_user_email($arr)
        {
           $old_email = $arr['old_email'];
           $new_email = $arr['n_email'];
           $user_id = $arr['user'];
             $data = array(
              'email' => $new_email
                );
            $this->db->where('id', $user_id);
            $this->db->where('email', $old_email);
            $query = $this->db->update('users',$data);
            return $query;
        }

}

?>