<?php
class Model_site extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

    public function insert_project($name)
	{
		$name = $this->db->escape($name);
		$user_id = $this->session->userdata('user_id');

		$this->db->query("INSERT INTO projects (project_name, user_id) VALUES ($name, $user_id)");
		$insert_id = $this->db->insert_id();

		$this->db->query("INSERT INTO websites (project_id) VALUES ($insert_id)");
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}
}
