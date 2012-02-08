<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller // extends our controller - see it in the 'core' folder
{
	protected $data; // comes from MY_Controller but see it here to know we have it and should use it!

	public function create_menu()
	{
		
		if(!empty($_POST))
		{
			$title=$_POST['title'];
			$number=$_POST['number'];
			$link=$_POST['link'];

			$this->load->model('Model_admin');
			$this->Model_admin->create_menu($title, $number, $link);
			$all_menus = $this->Model_admin->get_menus();
			$this->data['menus'] = $all_menus;
                        
		}
		$this->data['view'] = 'admin/menu_view'; // main view we will see in the middle of the page

		$this->load_view(); // declared in MY_Controller - equivalent to $this->load->view('main_template_view');
	}
	
	public function delete_menu()
	{
		$this->load->model('Model_admin');
		$number = $this->uri->segment(3);
		$this->Model_admin->delete_menu($number);
		$this->load->helper('url');
		redirect('/admin/create_menu');
	}
	
	public function create_footer()
	{
		
		if(!empty($_POST))
		{
			$text=$_POST['text'];
			$link=$_POST['link'];
			
			$this->load->model('Model_admin');
			$this->Model_admin->create_footer($text, $link);
			$all_footers = $this->Model_admin->get_footer();
			$this->data['footer_links'] = $all_footers;
		}
		$this->data['view'] = 'admin/footer_view';

		$this->load_view();
	}
}
