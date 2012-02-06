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

			$this->load->model('Model_admin');
			$this->Model_admin->create_menu($title, $number);
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
        public function show_admin()
        {
            $this->data['email']=$this->session->userdata('email');
            $this->data['priority']=$this->session->userdata('priority');
//            if ( $this->data['priority'] == 2 )
//            {
                $this->data['view'] = 'admin/main_view';
                $this->load_view();
//            } 
//            else
//            {
//                $this->data['view'] = 'admin/error_admin';
//                $this->load_view();
//            }
        }
       public function user_correction()
       {
           $this->data['view']='admin/user_correction';
           $this->load_view();
       }
}