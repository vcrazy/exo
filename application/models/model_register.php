<?php

class Model_register extends CI_Model {

    public function save_registration($autologin = FALSE) {
        $nextpage = $this->session->userdata('nextpage');
        $title = $this->session->userdata('title');
      //  $homepage = $this->session->userdata('homepage'); 
        $template = $this->session->userdata('template');
        $priority = $this->session->userdata('priority');
        $email = $this->input->post('email');
        $password =$this->input->post('password');
        $domain = $this->input->post('domain');
        $site_name=$this->input->post('site_name');

        $data = array(
            'email' => $email,
            'password' => md5($password),
            'priority' => $priority
        );
        $this->db->insert('users', $data);
        $user_id = $this->db->insert_id();
        
        $data=date("Y-m-d H:i:s");
        $change = array(
                'user_id' => $user_id,
                'change_date' => $data,
                'description'=>'Вие създадохте нов aкаунт'
                );
        $this->db->insert('changes',$change);
        
        $site = array(
            'site_name' => $site_name, 
            'user_id' => $user_id,
            'template_id' => $template,
            'domain' => $domain
        );
        $this->db->insert('sites', $site);
        $site_id = $this->db->insert_id();
		
		$data=date("Y-m-d H:i:s");
        $change = array(
                'user_id' => $user_id,
                'change_date' => $data,
                'description'=>'Вие създадохте нов сайт'.$site_name.' с домейн '.$domain
                );
		$this->db->insert('changes',$change);
		
        $count = 0;
        foreach ($nextpage as $page1) {
            $count++;
            $page = array(
            'title'    => $title[$count-1],
            'page_num' => $count,
            'page_content' => $page1,
            'site_id' => $site_id
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
    
    public function save_from_panel( $arr, $autologin = FALSE)
    {
		echo 4;
        $email = $arr['email'];
        $password =$arr['password'];
        $data = array(
            'email' => $email,
            'password' => md5($password),
            'priority' => 1
        );
        $this->db->insert('users', $data);
        
        if($autologin == TRUE)
        {	
            $this->load->model('Model_login');
            $this->Model_login->login( $email, $password);
	}
        return true;     
    }
}

?>