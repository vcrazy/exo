<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	protected $data; // it is recommended to be passed to the view

	public function __construct()
	{
		parent::__construct();

		$this->data['session'] = $this->session->all_userdata(); // put all the information we have in the session

		$this->data['uri'] = array(
			'controller' => $this->router->fetch_class(),
			'method' => $this->router->fetch_method()
		);

		$this->load->model('Model_admin');
		$all_menus = $this->Model_admin->get_menus();
		$this->data['menus'] = $all_menus; // Stefi has the job to make the menus work with the DB!
	}

	protected function load_view($view_name = 'main_template_view')
	{
		$this->load->view($view_name, $this->data);
	}

	public function is_logged()
	{
		return (bool)$this->session->userdata('user_id');
	}
}
