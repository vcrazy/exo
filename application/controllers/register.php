<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller // extends our controller - see it in the 'core' folder
{
	protected $data; // comes from MY_Controller but see it here to know we have it and should use it!

	public function step1()
	{
		$this->data['view'] = 'registration/registration_step1_view'; // main view we will see in the middle of the page

		$this->load_view(); // declared in MY_Controller - equivalent to $this->load->view('main_template_view');
	}
}
