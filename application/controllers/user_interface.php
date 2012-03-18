<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_interface extends MY_Controller // extends our controller - see it in the 'core' folder
{
   public function manage()
        {
           if ( $this->session->userdata('id') )
           {
                $this->data['view'] = 'user_control/manage_full';
                $this->load->model('Model_interface');
                $user_id = $this->session->userdata('id');

                $checklogin = $this->is_logged();
                $this->data['checklogin'] = $checklogin;
                $websites = $this->Model_interface->get_websites($user_id);
                $this->data['websites'] = $websites;

                if( !empty($_POST)  )
                {  
                    if( $this->input->post('change_pass') ) 
                    {
                       $this->form_validation->set_rules('pass', 'Password', 'required');
                       $this->form_validation->set_rules('n_pass', 'Password', 'required|matches[r_pass]');
                       $this->form_validation->set_rules('r_pass', 'Confirm Password', 'required');
                       if ($this->form_validation->run() != FALSE)
                         {
                            $pass = $this->input->post('pass');
                            $n_password = $this->input->post('n_pass');
                            $r_password = $this->input->post('r_pass');
                            $arr= array(
                                'pass'    => $pass, 
                                'n_pass' => $n_password,
                                'user' => $user_id
                                       );
                            $this->load->model("Model_interface");
                            $this->Model_interface->change_user_pass($arr);
                         }
                    }
                    if( $this->input->post('change_email') ) 
                    { 
                       $this->form_validation->set_rules('old_email', 'Old Email', 'required');
                       $this->form_validation->set_rules('n_email', 'New Email', 'required');
                       if ($this->form_validation->run() != FALSE)
                         {
                            $old_email = $this->input->post('old_email');
                            $n_email = $this->input->post('n_email');
                            $arr= array(
                                'old_email'    => $old_email, 
                                'n_email' => $n_email,
                                'user' => $user_id
                                       );
                            $this->load->model("Model_interface");
                            $result=$this->Model_interface->change_user_email($arr);
                            if ( (bool)$result == TRUE)
                            {
                                $this->session->unset_userdata('email');
                                $this->session->set_userdata('email', $n_email);
                                var_dump($this->session->all_userdata());
                            }
                         }
                    }
                }
            }
            
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
