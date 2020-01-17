<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Actu extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('actualite_model');
		$this->load->model('notification_model');
        
        $this->isLoggedIn();   
    }
    

	public function actuListing()
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


		        		


	public function addNew()
		        {
		                
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		           		$this->global['active'] = 'actu';
		        		$this->loadViews("actu/new", $this->global, Null, NULL); 
		        		  
		          
		        }  


    public function addNewA()
		        {
		                
		               $Titre = $this->input->post('titre');
		               $Description = $this->input->post('description');		       
			   		   $lien = $this->input->post('lien');

			   		   $target_dir = "uploads/Actu/";
	                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	                    $uploadOk = 1;
	                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

						if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ){
			   		   $actuInfo = array(
		                 'titre' =>  $Titre, 
		                 'description' => $Description ,
		                 'image' => basename($_FILES["fileToUpload"]["name"])  , 
		                 'lien' => $lien ,
		                 'createdBy' => $this->vendorId ,
		                 'createdDate'=> date('Y-m-d H:i:s')
		                     );

			   		   $resultat = $this->actualite_model->addNew($actuInfo);
			   		   foreach ($this->user_model->userListing($this->vendorId) as $record ) {
			   		   $notifInfo = array(        
                                                             'text' => 'La Foundationa publier une nouveauté' ,
                                                             'dateNotif' => date('Y-m-d H:i:s') , 
                                                             'seen' => 'no' , 
                                                             'type' => 'Actualite',
                                                             'userId' => $record->userId ,
                                                             'url' => '/Actu/Show/'. $resultat
                                                             );                                           
                          $this->notification_model->addNewNotificaition($notifInfo) ;
						}

		        		  
		        		}
		        		redirect('user') ;  
		          
		        }    

				public function Show($actuId)
		        {
		                
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		           		 $data['actuInfo'] =  $this->actualite_model->actuById($actuId);
		           		 $this->global['active'] = 'actu';
		        		 $this->loadViews("actu/view", $this->global, $data  , NULL); 
		        		  
		          
		        }  
		
}