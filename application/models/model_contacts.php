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

		$this->send_sms('New message from contact form' . mb_substr($arr['message'], 0, 100, 'utf-8'));

        return $this->db->insert('contacts', $data);
	}

	public function send_sms($message, $phones = array())
	{
		$phones = array('359883405385@sms.mtel.net');
		$header = "From: exo.bg\r\nMIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";

		foreach($phones as $phone)
		{
			@mail($phone, mb_encode_mimeheader('Activity in your site', "UTF-7", "B"), $message, $header);
		}
	}
}

?>