<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


require APPPATH . '/libraries/RestController.php';



class API extends RestController  {

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
                       // Users from a data store e.g. database
				        $users = [
				            ['id' => 0, 'name' => 'John', 'email' => 'john@example.com'],
				            ['id' => 1, 'name' => 'Jim', 'email' => 'jim@example.com'],
				        ];

				        $id = $this->get( 'id' );

				        if ( $id === null )
				        {
				            // Check if the users data store contains users
				            if ( $users )
				            {
				                // Set the response and exit
				                $this->response( $users, 200 );
				            }
				            else
				            {
				                // Set the response and exit
				                $this->response( [
				                    'status' => false,
				                    'message' => 'No users were found'
				                ], 404 );
				            }
				        }
				        else
				        {
				            if ( array_key_exists( $id, $users ) )
				            {
				                $this->response( $users[$id], 200 );
				            }
				            else
				            {
				                $this->response( [
				                    'status' => false,
				                    'message' => 'No such user found'
				                ], 404 );
				            }
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