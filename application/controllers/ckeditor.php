<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

#class Ckeditor extends CI_Controller 
#{

#	public function ckedit()
#	{
#		$this->load->view('ck_view');
#	}
#
#}

 
class Ckeditor extends CI_Controller {
 
	// extends CI_Controller for CI 2.x users
 
	public $data 	= 	array();
 
	public function __construct() 
            {
 
		parent::__construct();
		// parent::__construct(); for CI 2.x users
 
		$this->load->helper('url'); //You should autoload this one ;)
		$this->load->helper('ckeditor');
 
 
		//Ckeditor's configuration
		$this->data['ckeditor'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'content',
			'path'	=>	'js/ckeditor',
 
			//Optionnal values
			'config' => array(
                            
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"800px",	//Setting a custom width
				'height' 	=> 	'200px',	//Setting a custom height
 
			),
 
			//Replacing styles from the "Styles tool"
			'styles' => array(
 
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 	=> 	'Blue',
						'font-weight' 	=> 	'bold'
                                                            )
                                                    ),
 
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 	=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 		=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
                                                         )       
                                                    )				
                                          )
                                                 );	
              }
 
	public function index() 
              {
                  $this->load->helper(array('form', 'url'));
		  $this->load->library('form_validation');
                  $this->load->library('input');
		  $this->form_validation->set_rules('content', 'Content', 'required');
                  $this->load->view('ck_view', $this->data);
                  $content = $this->input->post('content');
                  $this->load->model('Model_pages');
                  $page_num=$this->Model_pages->checkpage();
                #  $this->Model_pages->savepage();
              }
}
