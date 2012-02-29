<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	protected $data; // it is recommended to be passed to the view

	public function __construct()
	{
		parent::__construct();

		$this->register();

		$this->data['session'] = $this->session->all_userdata(); // put all the information we have in the session

		$this->data['uri'] = array(
			'controller' => $this->router->fetch_class(),
			'method' => $this->router->fetch_method()
		);

		$this->load->model('Model_admin');
		$all_menus = $this->Model_admin->get_menus();
		$this->data['menus'] = $all_menus; 
		$all_footers = $this->Model_admin->get_footer();
		$this->data['footer_links'] = $all_footers;

		$this->data['selected_menu'] = $this->uri->rsegment(1);
		
		$this->set_menu_titles();
                $this->data['checklogin'] = $this->is_logged();
	}

	protected function load_view($view_name = 'main_template_view')
	{
		$this->load->view($view_name, $this->data);
	}

	public function is_logged()
	{
		return (bool)$this->session->userdata('user_id');
	}
	
	public function set_menu_titles()
	{
		switch ($this->uri->rsegment(1) . '/' . $this->uri->rsegment(2)) 
		{
			case 'homepage/index':
				$this->data['menu_title'] = 'Начална страница';
				break;
			case 'contacts/index':
				$this->data['menu_title']='Контакти';
				break;
			case 'register/step1': case 'register/step2': case 'register/step3': case 'register/step4': case 'register/step5':
				$this->data['menu_title'] = 'Регистрация';
				break;
			default:
				$this->data['menu_title'] = 'текст';
				break;
		}
	}
        
        public function register()
        {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            
             if( !empty($_POST) && !empty($_POST['register']))
                    {
                        $this->form_validation->set_rules('email', 'Email', 'required|valid_emails|is_unique[users.email]');
                        $this->form_validation->set_rules('password', 'Password', 'required|matches[conf_pass]');
                        $this->form_validation->set_rules('conf_pass', 'Confirm Password', 'required');
						if ($this->form_validation->run() != FALSE)
                            {   
							echo 1;
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                                $arr= array(
                                    'email'    => $email, 
                                    'password' => $password,
                                    );
                                    $this->load->model("Model_register");
									echo 2;
                                    $this->Model_register->save_from_panel($arr, TRUE);
									echo 3;
                            }
                            
                            
                         //  $this->load_view();
                    }
         }
}
