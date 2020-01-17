<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class API extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('actualite_model');
		$this->load->model('notification_model');
		$this->load->model('project_model');
        
      
    }


     public function oldProjectListing()
                {
                        $titre='' ;
                        $titre = $this->input->post('titre');
                        $data['titre'] = $titre;
                        $this->load->model('project_model');
                        
                        $data['projectRecords'] = $this->project_model->projectOldListing($titre);
                        
                        $this->global['pageTitle'] = 'CodeInsect : club  Listing';
                        $this->global['active'] = 'projects';
                        
	                      if($data['projectRecords']){
					            echo json_encode( $data['projectRecords']); 
					            exit;
					        } 
                }

    

	

	public function actuListingAPI()
		        {
						$this->load->library('pagination');
		                $this->load->model('actualite_model');
		                $searchText='' ;
		                $data['evaluationRecords'] = $this->actualite_model->actuListing();
 					      	$count = $this->actualite_model->actuListing();
            			$data['count'] = count($count)  ; 

		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		            	$this->global['active'] = 'actu';
		            	/*
		                $this->loadViews("actualite/list", $this->global, $data, NULL);   
		        		*/

		        		if($data['evaluationRecords']){
				            echo json_encode($data['evaluationRecords']); 
				            exit;
				        } 

		        }


		        		


		        
		
}