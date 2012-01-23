<?php

class Model_register extends CI_Model {

    public function save_registration() {
        $nextpage = $this->session->userdata('nextpage');
        $title = $this->session->userdata('title');
      //  $homepage = $this->session->userdata('homepage'); 
        $template = $this->session->userdata('template'); 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $domain = $_POST['domain'];

        $data = array(
            'email' => $this->db->escape($email),
            'password' => md5($this->db->escape($password)),
            'domain' => $this->db->escape($domain)
        );
        $this->db->insert('users', $data);
        $user_id = $this->db->insert_id();
        $site = array(
            'site_name' => $this->db->escape($domain), 
            'user_id' => $this->db->escape($user_id),
            'site_url' => $this->db->escape($domain),
            'template_id' => $this->db->escape($template)
        );
        $this->db->insert('sites', $site);
        $site_id = $this->db->insert_id();
        $count = 0;
        foreach ($nextpage as $page1) {
            $count++;
            $page = array(
            'title'    => $this->db->escape($title[$count-1]),
            'page_num' => $this->db->escape($count),
            'page_content' => $this->db->escape($page1),
            'site_id' => $this->db->escape($site_id),
            'user_id' => $this->db->escape($user_id)
            );
                    
            $this->db->insert('pages', $page);
        }

	 return true;
    }

}

?>