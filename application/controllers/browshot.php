<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Browshot extends MY_Controller // extends our controller - see it in the 'core' folder
{
	protected $data; // comes from MY_Controller but see it here to know we have it an
        
        public function getcontent()
        {
            $this->data['view'] = 'api_content/content';
            
            
            $this->load->model('Model_site');
            $websites=$this->Model_site->get_domain('10');
            
            $api = 'nOwotRrCzrBiYOnRCBOVcUqydZsBTdRv';            
            $generatedids = array();
            if (!empty($websites))
            {
                foreach ($websites as $key => $value)
                    {
                        $page ="http://".$value['domain'].'.exo.bg';

                        $homepage = file_get_contents("http://api.browshot.com/api/v1/screenshot/create?url=".$page."&size=screen&cache=0&key=".$api);//'https://api.browshot.com/api/v1/screenshot/create?url='.$page.'&size=screen&cache=0&key='.$api);

                        $homepage = json_decode($homepage);

                        $generatedids[$value['site_id']] = $homepage->id; 
                    };
                if ( !empty($generatedids) )
                {
                    $this->Model_site->save_generatedids($generatedids);
                }
            }
            $this->load_view(); 

        }
         public function get_pictures()
         {
             $this->load->helper('string');
             
             $this->load->model('Model_site');
             
             $ids = $this->Model_site->get_ids();
             
             if( !empty($ids) )
             {
                 foreach ($ids as $key=>$value)
                 {
                     $pic = file_get_contents("http://www.browshot.com/screenshot/image/".$value."?scale=1&key=nOwotRrCzrBiYOnRCBOVcUqydZsBTdRv&height=500&width=700&ratio=fit");       
                     $picname = random_string('unique');
                     $picname.=".png";
                     $mynewpic=file_put_contents($picname, $pic);
                     
                     $this->Model_site->save_picture($key,$picname);
                     $this->Model_site->delete_record_thumb($key);
                 }
             }
         }
}
