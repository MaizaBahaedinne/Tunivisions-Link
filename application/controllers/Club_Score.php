<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Actu extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('actualite_model');
		$this->load->model('notification_model');
		                $this->load->model('evaluation_model');
        
        $this->isLoggedIn();   
    }
    

	public function scoringListing()
		        {
						$this->load->library('pagination');
		                $data['evaluationRecords'] = $this->evaluation_model->evaluationListing($this->vendorId);
 						$count = $this->evaluation_model->evaluationListing($this->vendorId);
            			$data['count'] = count($count)  ; 

		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'scoring';
		                $this->loadViews("evaluation/list", $this->global, $data, NULL);     
		        }


	public function addNew()
		        {
		                
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		           		$this->global['active'] = 'actu';
		        		$this->loadViews("actu/new", $this->global, Null, NULL); 
		        		  
		          
		        }  


    
		
}