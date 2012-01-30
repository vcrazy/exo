<?php

class Model_contacts extends CI_Model {

    public function save_contacts() {
		$name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $data = array(
			'contact_name' => $this->db->escape($name),
            'contact_email' => $this->db->escape($email),
            'contact_phone' => md5($this->db->escape($phone)),
            'contact_message' => $this->db->escape($message)
        );
        $this->db->insert('contacts', $data);
		}

}

?>