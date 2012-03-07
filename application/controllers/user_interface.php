<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_interface extends MY_Controller // extends our controller - see it in the 'core' folder
{
        public function manage()
        {
            $this->data['view'] = 'user_control/manage_full';
            $this->load->model('Model_interface');
            $user_id = $this->session->userdata('id');
            #var_dump($this->session->all_userdata());
            $checklogin = $this->is_logged();
            $this->data['checklogin'] = $checklogin;
            $websites = $this->Model_interface->get_websites($user_id);
            $this->data['websites'] = $websites;
            $this->load_view();
        }
	public function add_website1()
	{
		$this->data['view'] = 'user_interface/user_interfaces_view'; 

                if ($this->session->userdata('logged_in'))
                redirect('/login/log');
                
                 if( !empty($_POST)  )
                    {

                        $this->form_validation->set_rules('template', 'Template', 'required');
                        $this->form_validation->set_rules('domain', 'Domain', 'required|valid_domains|is_unique[users.domain]');
                        $this->form_validation->set_rules('site_name', 'Site Name', 'required');
                        if ($this->form_validation->run() != FALSE)
                            {
                                $template=$_POST['template'];
                                $domain=$_POST['domain'];
                                $site_name=$this->input->post('site_name');
                                $arr= array(
                                        'template' => $template,
                                        'domain'   => $domain,
                                        'site_name' => $site_name
                                           );
                                $this->session->set_userdata($arr);
                                
  //???????????                              redirect('/../register/step2');
                            }
                    }
                    $this->load_view(); // declared in MY_Controller  
	}
        
        public function add_website2()
	{
		$this->data['view'] = 'user_interface/user_interfaces_view'; 

                if ($this->session->userdata('logged_in'))
                redirect('/login/log');
                
                 if( !empty($_POST)  )
                    {
                        $this->form_validation->set_rules('ckeditor', 'Ckeditor', 'required');
                        $this->form_validation->set_rules('title', 'Title', 'required');
                        
                        if ($this->form_validation->run() != FALSE)
                            {
                    #            _dump($this->session->userdata('nextpage'));
                               if ( (!$this->session->userdata('nextpage')) OR (!$this->session->userdata('title')) )
                                {
                                    $nextpage=array();
                                    $title=array();
//                                    $homepage='';
                                }
                                else
                                {
                                    $nextpage = $this->session->userdata('nextpage');
                                    $title = $this->session->userdata('title');
//                                    $homepage= $this->session->userdata('homepage');
                                }
                                    $nextpage[]=$_POST['ckeditor'];
                                    $title[]=$_POST['title'];
                                    $arr= array(
                                                'nextpage' => $nextpage,
                                                'title' => $title
//                                                'homepage' => $homapage
                                               );
                                    $this->session->set_userdata('nextpage',$nextpage);
                                    $this->session->set_userdata('title',$title);
                            }
                    }
                    $this->load_view(); // declared in MY_Controller  
	}
        
        public function add_webpage()
        {
                $this->data['view'] = 'user_interface/user_interfacep_view'; 

                if ($this->session->userdata('logged_in'))
                redirect('/login/log');
                
                if( !empty($_POST)  )
                    {
                        //??????????????????????????????
                    }
                    $this->load_view(); // declared in MY_Controller
        }
}
