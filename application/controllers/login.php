<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{
    public function log()
    {
        //$this->load->helper(array('form', 'url'));
        $this->load->model('Model_login');
        //Trqbva da zaredq argumenti na funkciqta login()
         $result = $this->Model_login->login($this->input->post('email'), $this->input->post('password'));
        if($result == true)
        {
            redirect('/user_interface/manage');
        }
        else
            {
                redirect('/homepage?error=login');
            }
    }
    
    public function logout() 
    {		
          $this->session->sess_destroy();
		   redirect('/homepage');
    }
}
?>
