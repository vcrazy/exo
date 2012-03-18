<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Browshot extends MY_Controller // extends our controller - see it in the 'core' folder
{
	protected $data; // comes from MY_Controller but see it here to know we have it an
        
        public function getcontent()
        {
            $this->data['view'] = 'api_content/content';
            
            $this->load->helper('string');
            
            $this->load->model('Model_site');
            $websites=$this->Model_site->get_domain('10');
            
            $api = 'nOwotRrCzrBiYOnRCBOVcUqydZsBTdRv';            
            $generatedids = array();
            $ids = array();
            $picid = array();
            foreach ($websites as $key => $value)
                {
                    $page ="http://".$value['domain'].'.exo.bg';
                    var_dump($value['domain']);
                    $homepage = file_get_contents("http://api.browshot.com/api/v1/screenshot/create?url=".$page."&size=screen&cache=0&key=".$api);//'https://api.browshot.com/api/v1/screenshot/create?url='.$page.'&size=screen&cache=0&key='.$api);
                    $homepage = json_decode($homepage);
                    $generatedids[] = $homepage->id; 
                    $ids[]=$value['site_id'];
                };
                
            $this->data['domains'] = $generatedids ;
            $this->load_view(); 

        }
         public function get_pictures()
         {
             $pic = file_get_contents("http://www.browshot.com/screenshot/image/".$homepage->id."?scale=1&key=nOwotRrCzrBiYOnRCBOVcUqydZsBTdRv&height=500&width=700&ratio=fit");
                    
             $picname = random_string('unique');
             $mynewpic=file_put_contents($picname."png", $pic);
         }
}
