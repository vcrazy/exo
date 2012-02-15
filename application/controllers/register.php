<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller // extends our controller - see it in the 'core' folder
{
	protected $data; // comes from MY_Controller but see it here to know we have it and should use it!
        
        public function step1()
            {
                $this->data['view'] = 'registration/registration_step1_view'; // main view we will see in the middle of the page

                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                
                if( !empty($_POST)  )
                    {

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
                $this->load_view();
            }
            
       	              
          public function step2()
                 {
                
                $this->data['view'] = 'registration/registration_step2_view'; // main view we will see in the middle of the page

                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                
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
                    if ($this->session->userdata('template'))
                    {
                    $this->load_view();
                    }
                    else
                    {
                    redirect('/../register/step1');       
                    }
                 }
                 
        public function step3()
                 {

                $this->data['view'] = 'registration/registration_step3_view'; // main view we will see in the middle of the page

		
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                
                 if( !empty($_POST)  )
                    {
                        $this->form_validation->set_rules('email', 'Email', 'required|valid_emails|is_unique[users.email]');
                        $this->form_validation->set_rules('password', 'Password', 'required|matches[conf_pass]');
                        $this->form_validation->set_rules('conf_pass', 'Confirm Password', 'required');
                        $this->form_validation->set_rules('domain', 'Domain', 'required|valid_domains|is_unique[users.domain]');
                        if ($this->form_validation->run() != FALSE)
                            {   
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                                $domain=$_POST['domain'];
                                $arr= array(
                                    'email'    => $email, 
                                    'password' => $password,
                                    'domain'   => $domain,
                                    'priority' =>'1'
                                           );
                                $this->session->set_userdata($arr);
                                $this->load->model("Model_register");

                                $this->Model_register->save_registration(TRUE);
                                redirect('/../register/step4');
                                
                            }
                    }
                    if ($this->session->userdata('nextpage','title','homepage'))
                    {
                        $this->load_view();
                    }
                    else
                    {
                        redirect('/../register/step2');
                    }
                 }
                               
                 
         public function step4()

                 {
                
                $this->data['view'] = 'registration/registration_step4_view'; // main view we will see in the middle of the page

		
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                
               if ($this->session->userdata('email','password','domain'))
                    {
                        $this->load_view();
                    }
                    else
                    {
                        redirect('/../register/step3');
                    }
                    
                 }
}
