<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{
    public function log()
    {
        //$this->load->helper(array('form', 'url'));
        $this->load->model('Model_login');
        //Trqbva da zaredq argumenti na funkciqta login()
         $result = $this->Model_login->login( $email=$_POST['email'], $password=$_POST['password'] );
        if($result == true)
        {
            redirect('/homepage?success=login');
			
        }
        else
            {
                redirect('/homepage?error=login');
            }
    }
}
?>
