<?php

class Model_register extends CI_Model {

    public function save_registration($autologin = FALSE) {
        $nextpage = $this->session->userdata('nextpage');
        $title = $this->session->userdata('title');
      //  $homepage = $this->session->userdata('homepage'); 
        $template = $this->session->userdata('template');
        $priority = $this->session->userdata('priority');
        $email = $_POST['email']; #$this->input->post('email');
        $password = $_POST['password'];
        $domain = $_POST['domain'];

        $data = array(
            'email' => $email,
            'password' => md5($password),
            'priority' => $priority,
            'domain' => $domain
        );
        $this->db->insert('users', $data);
        $user_id = $this->db->insert_id();
        $site = array(
            'site_name' => $domain, 
            'user_id' => $user_id,
            'site_url' => $domain,
            'template_id' => $template
        );
        $this->db->insert('sites', $site);
        $site_id = $this->db->insert_id();
        $count = 0;
        foreach ($nextpage as $page1) {
            $count++;
            $page = array(
            'title'    => $title[$count-1],
            'page_num' => $count,
            'page_content' => $page1,
            'site_id' => $site_id,
            'user_id' => $user_id
            );
                    
            $this->db->insert('pages', $page);
        }
        
        if($autologin == TRUE)
        {	
            $this->load->model('Model_login');
            $this->Model_login->login( $email, $password);
	}
        
	 return true;
    }
}

?>