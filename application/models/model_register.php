<?php

class Model_register extends CI_Model {

    public function save_registration() {
        $this->load->library('session');
        $session_id = $this->session->userdata('session_id');
        $this->session->userdata('nextpage');
        $this->session->userdata('homepage');
        $this->session->userdata('template');
        $this->input->post('nextpage');
        $this->input->post('homepage');
        $this->input->post('template');
        $nextpage = $this->input->post('nextpage');
        $homepage = $this->input->post('homepage');
        $template = $this->input->post('template');
        $this->$email = $_POST['email'];
        $this->$password = $_POST['password'];
        $this->$domain = $_POST['domain'];

        $data = array(
            'email' => '$email',
            'password' => '$password',
            'domain' => '$domain'
        );
        $this->db->insert('users', $data);
        $user_id = $this->db->insert_id();
        $site = array(
            'site_name' => '$domain',
            'user_id' => '$user_id',
            'site_url' => '$domain' . 'exo.bg',
            'template_id' => '$template'
        );
        $this->db->insert('sites', $site);
        $site_id = $this->db->insert_id();
        $count = 0;
        foreach ($nextpage as $page1) {
            $count++;
            $page = array(
            'page_num' => '$count',
            'page_content' => '$page1',
            'site_id' => '$site_id',
            'user_id' => '$user_id'
            );
                    
            $this->db->insert('pages', $page);
        }
    }

}

?>