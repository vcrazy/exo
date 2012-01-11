<?php
    class Model_pages extends CI_Model
    {
        function __construct()
            {
                parent::__construct();
            } 
        public function savepage ($content = array())
            {
                 $pagedate = array(
                       'page_num' => $content['page_num'] ,
                       'page_content' => $content['page_content'],
                       'site_id' => $content['site_id'],
                       'user_id' => $content['user_id'],
                       'title' => $content['title'],
                       'session_id' => $content['session_id'] );

                $this->db->insert('pages', $pagedate); 
            }
        public function checkpage ()
            {
                $site_url=$this->uri->segment(1, 0);
                var_dump($site_url);
                $iflogin=$this->session->userdata('user_id');
                if ( $iflogin )
                    {
                        $this->db->select('site_id');
                        $this->db->from('sites');
                        $this->db->where("$user_id = $iflogin AND site_url='$site_url'");
                        $query=$this->db->get();
                        foreach ($query->result() as $row)
                            {
                                $site_id=$row->site_id;
                            }
                        
                        $pagenum=$this->db->select('max(page_num)');
                        $this->db->from('pages');
                        $this->db->where("user_id = $iflogin AND site_id = $site_id ");
                    }
                else
                    {
                        $session_id=$this->session->userdata('session_id');
                        $this->db->select('site_id');
                        $this->db->from('sites');
                        $this->db->where("session_id = '$session_id' AND site_url='$site_url' ");
                        $query=$this->db->get();
                        foreach ($query->result() as $row)
                            {
                                $site_id=$row->site_id;
                            }
                        
                        $this->db->select('max(page_num) as temp');
                        $this->db->from('pages');
                        $this->db->where("session_id = '$session_id' AND site_id = $site_id");
                        $query=$this->db->get();
                        foreach ($query->result() as $row)
                            {
                                $pagenum=$row->temp;
                            }
                        var_dump($pagenum);
                            
                    }
            }
    }

