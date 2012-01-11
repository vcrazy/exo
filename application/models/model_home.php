<?php

class Model_home extends CI_Model{

	public function register()
	{
		$all_sessions = $this->db->query("SELECT * FROM ci_sessions");

		if($all_sessions->num_rows() > 0)
		{
			foreach($all_sessions->result() as $row)
			{
				echo $row->session_id;
				echo '<br />';
				echo $row->ip_address;
				echo '<br />';
			}
		}
	}

}

?>
