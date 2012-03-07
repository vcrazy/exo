<?php 

class Model_login extends CI_Model {

    public $user_table = 'users';

	public function login($email = '', $password = '') {		
           
                $this->load->helper(array('form', 'url'));
		//Make sure login info was sent
		if($email == '' OR $password == '') {
			return false;
		}
		//Check if already logged in
		if($this->session->userdata('email') == $email) {
			//User is already logged in.
			return true;
		}
		
		//Check against user table
		$this->db->where('email', $email);
                $this->db->where('password',md5($password)); 
		$query = $this->db->get_where($this->user_table);
		
		if ($query->num_rows() > 0) {
			$row = $query->row_array();
			
			//Destroy old session
			$this->session->sess_destroy();
			
			//Create a fresh, brand new session
			$this->session->sess_create();
			
			//Remove the password field
			unset($row['password']);
			
			//Set session data
			$this->session->set_userdata($row);
			
			//Set logged_in to true
			$this->session->set_userdata(array('logged_in' => true));			
			
			//Login was successful			
			return true;
		} else {
			//No database result found
			return false;
		}	

	}

}
?>