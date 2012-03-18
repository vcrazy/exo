<?php

class Model_contacts extends CI_Model {

    public function save_contacts($arr)
	{
        $data = array(
			'contact_name' => $arr['name'],
            'contact_email' => $arr['email'],
            'contact_phone' => $arr['phone'],
            'contact_message' => $arr['message']
        );

        return $this->db->insert('contacts', $data);
	}

}

?>