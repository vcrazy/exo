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
       public function user_search()
       {
           $this->data['view']='admin/user_search';
           $this->load->helper(array('form', 'url'));
           $this->load->library('form_validation');
           if( !empty($_POST)  )
            {
               $searchid=$this->input->post('searchid');
               $searchemail=$this->input->post('searchemail');
               $searchdomein=$this->input->post('searchdomein');
               $searchfor=$this->input->post('searchfor');
               
               $arr=array();
               if ($searchid) $arr['id']=$searchid;
               if ($searchemail) $arr['email']=$searchemail;
               if ($searchdomein) $arr['domain']=$searchdomein;
               
               $this->load->model("Model_admin");
               $this->data['values']=$this->Model_admin->searchfor($arr);
               
            }
           $this->load_view();  
        }
       public function user_correct()
       {
           $this->data['view']='admin/user_correct';
           $this->load->helper(array('form', 'url'));
           $this->data['user_id'] = $this->uri->segment(3, 0); 
           $this->load->library('form_validation');
           $this->load->model("Model_admin");
           $arr=array();
           $arr=$this->Model_admin->checkfromid($this->data['user_id']);
           $this->data['email']=$arr['email'];
           $this->data['priority']=$arr['priority'];
           $this->data['success']=FALSE;
           if( !empty($_POST) )
            {
               $this->form_validation->set_rules('priority', 'Priority', 'required');
               if ($this->form_validation->run() != FALSE)
               {
                   $user=$this->input->post("user");
                   $priority=$this->input->post("priority");
                   $data=array();
                   $data['id']=$user;
                   $data['priority']=$priority;
                   $this->load->model("Model_admin");
                   $this->Model_admin->change_priority($data);
                   $this->data['success']=TRUE;
               }  
            }
           $this->load_view();
       }
}
