<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller // extends our controller - see it in the 'core' folder
{
	protected $data; // comes from MY_Controller but see it here to know we have it and should use it!
        
        public function step1()
            {
                $this->data['view'] = 'registration/registration_step1_view'; // main view we will see in the middle of the page

		$this->load_view(); // declared in MY_Controller - equivalent to $this->load->view('main_template_view');
                
                if( !empty($_POST)  )
                    {
                        $this->load->helper(array('form', 'url'));
                        $this->load->library('form_validation');
                        $this->form_validation->set_rules('template', 'Template', 'required');
                        if ($this->form_validation->run() != FALSE)
                            {
                                $template=$_POST['template'];
                                $arr= array(
                                        'template' => $template
                                           );
                                $this->session->set_userdata($arr);
                                
                                redirect('/../register/step2');
                            }
                    }
                
            }
       	public function step2()
            {   
                $this->data['view'] = 'registration/registration_step2_view'; // main view we will see in the middle of the page

		$this->load_view(); // declared in MY_Controller - equivalent to $this->load->view('main_template_view');
           
                 if( !empty($_POST)  )
                    {
                        $this->load->helper(array('form', 'url'));
                        $this->load->library('form_validation');
                        $this->form_validation->set_rules('ckeditor', 'Ckeditor', 'required');
                        if ($this->form_validation->run() != FALSE)
                            {
                                $homepage=$_POST['ckeditor'];
                                $arr= array(
                                        'homepage' => $homepage
                                           );
                                $this->session->set_userdata($arr);
                                
                                redirect('/../register/step3');
                            }
                    }
               }     
          public function step3()
                 {
                var_dump( $this->session->all_userdata());
                
                $this->data['view'] = 'registration/registration_step3_view'; // main view we will see in the middle of the page

		$this->load_view();
                
                 if( !empty($_POST)  )
                    {
                        $this->load->helper(array('form', 'url'));
                        $this->load->library('form_validation');
                        $this->form_validation->set_rules('ckeditor', 'Ckeditor', 'required');
                        if ($this->form_validation->run() != FALSE)
                            {
                                var_dump($this->session->userdata('nextpage'));
                               if ( !$this->session->userdata('nextpage') )
                                {
                                    $nextpage=array();
                                }
                                else
                                {
                                    $nextpage = $this->session->userdata('nextpage');
                                }
                                    $nextpage[]=$_POST['ckeditor'];
                                    $arr= array(
                                                'nextpage' => $nextpage
                                               );
                                    $this->session->set_userdata($arr);
                               
//                                    redirect('/../register/step3');
                            }
                    }
                 }
                 
        public function step4()
                 {
                var_dump( $this->session->all_userdata());
                
                $this->data['view'] = 'registration/registration_step4_view'; // main view we will see in the middle of the page

		$this->load_view();
                
                 if( !empty($_POST)  )
                    {
                        $this->load->helper(array('form', 'url'));
                        $this->load->library('form_validation');
                        $this->form_validation->set_rules('email', 'Email', 'required|valid_emails|is_unique[users.email]');
                        $this->form_validation->set_rules('password', 'Password', 'required|matches[conf_pass]');
                        $this->form_validation->set_rules('conf_pass', 'Confirm Password', 'required');
                        $this->form_validation->set_rules('domain', 'Domain', 'required');
                        if ($this->form_validation->run() != FALSE)
                            {
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                                $domain=$_POST['domain'];
                                $arr= array(
                                    'email'    => $email, 
                                    'password' => $password,
                                    'domain'   => $domain
                                           );
                                $this->session->set_userdata($arr);
                                
                                redirect('/../register/step4');
                            }
                    }
                 }
}
