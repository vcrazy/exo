<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends MY_Controller
{
	protected $data;
	
	public function __construct()
	{
		parent::__construct();
	}         
        public function index()
                 {
               # var_dump( $this->session->all_userdata());
                
                $this->data['view'] = 'contacts/contacts_view';

				$this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
				
                
                 if( !empty($_POST)  )
                   {
                        $this->load->helper(array('form', 'url'));
                        $this->load->library('form_validation');
                        $this->form_validation->set_rules('name', 'Name', 'required');
                        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                        $this->form_validation->set_rules('message', 'Message', 'required|min_length[5]');
                        if ($this->form_validation->run() != FALSE)
                            {
								$name=$this->input->post('name');
                                $email=$this->input->post('email');
                                $message=$this->input->post('message');
								$phone=$this->input->post('phone');

								$arr = array(
								    'name'    => $name,
                                    'email'    => $email, 
                                    'message' => $message,
                                    'phone'   => $phone
								);

								$this->load->model("Model_contacts");
                                $this->Model_contacts->save_contacts($arr);
								redirect(base_url() . 'contacts'); // = http://exo.bg/contacts
                            }
                    }
					
					$this->load_view();
                 }
}
