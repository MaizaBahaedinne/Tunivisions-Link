<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Reclamation extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
         $this->load->model('reclamation_model');
         $this->load->model('club_model');
         $this->load->model('notification_model');
        $this->isLoggedIn();   
    }
    
    public function reclamationListing()
		        {	$this->load->library('pagination');

		               
		                $searchText='' ;
		                $data['count'] = count($this->reclamation_model->waitReclamationListing($this->vendorId)) ;
		                $data['reclamationRecords'] = $this->reclamation_model->reclamationListing($this->vendorId);
                        
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		           			 $this->global['active'] = 'claims';
		                $this->loadViews("reclamation/list", $this->global, $data, NULL);   
		        }

			public function addNew()
			        {
			                $this->load->model('club_model');
			                
							$data['count'] = count($this->reclamation_model->waitReclamationListing($this->vendorId)) ;
			                 $data["bureauExe"] = $this->club_model->BureauListing(0);
			                $data['clubRecords'] = $this->club_model->clubListing();

			                $this->global['pageTitle'] = '';
			            $this->global['active'] = 'claims';
			                $this->loadViews("reclamation/new", $this->global, $data, NULL);   
			        }


		public function addNewReclamation()
		        {
		        	
	                $Sujet = $this->input->post('sujet');
	                $Text = $this->input->post('Text');
	                
	               

	                $target_dir = "uploads/reclamation/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                                    $reclamInfo = array(
						                 'files' => basename($_FILES["fileToUpload"]["name"]) ,  
						                 'Sujet'=>$Sujet,
						                 'Text'=>$Text,
						                 'createdBy'=>$this->vendorId ,
						                 'staut' => 'En Attend' , 
						                 'createdDate' => date('Y-m-d H:i:s')
						             	);

		        $this->load->model('reclamation_model');
                $result = $this->reclamation_model->addNewReclamation($reclamInfo);
                

                    if($result > 0 || move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) )
                {
                	
                
                
                 		$notifInfo = array(        
                                 'text' => 'Une nouvelle reclamation par <b> '.$this->name.' </b>' ,
                                 'dateNotif' => date('Y-m-d H:i:s') , 
                                 'seen' => 'no' , 
                                 'type' => 'Reclamation',
                                 'userId' => 1 ,
                                 'url' => '/Reclamation/reclamationListing' 
                                 );             
                       			 $this->notification_model->addNewNotificaition($notifInfo) ;
								

                    

                }


			             redirect ('Reclamation/addNew') ;
		        }


		         public function editreclam($reclamID)
			        {
			                $this->load->model('club_model');
			                
			                $data['reclamRecords'] = $this->reclamation_model->reclamInfo($reclamID);
			                $data['count'] = count($this->reclamation_model->waitReclamationListing()) ;
			                $this->global['pageTitle'] = '';
			           		$this->global['active'] = 'claims';
			                $this->loadViews("reclamation/edit", $this->global, $data, NULL);   
			        }




		         public function editreclamtion($reclamID)
			        {

 							$reclamInfo = array(
						                 'staut' => 'Cloturé' ,  
						                 'responsedBy'=>$this->vendorId ,
						                 'responsedDate'=> date('Y-m-d H:i:s'),
						                 'responsedText'=>   $this->input->post('response') 		                
						             	);

 					
							
							
						if ($this->reclamation_model->editReclamation($reclamInfo, $reclamID) ){

							$reclamRecords = $this->reclamation_model->reclamInfo($reclamID) ;
 							$notifInfo = array(        
                                 'text' => 'votre reclamation de <b> #'.$reclamID.' </b> a été cloturé ' ,
                                 'dateNotif' => date('Y-m-d H:i:s') , 
                                 'seen' => 'no' , 
                                 'type' => 'Reclamation',
                                 'userId' => $reclamRecords->createdBy ,
                                 'url' => '/Reclamation/reclamInfo/'.$reclamID 
                                 );             
                       		$this->notification_model->addNewNotificaition($notifInfo) ;
							} 
			               redirect('/reclamation/reclamationListing') ; 
			        }


		         public function reclamInfo($reclamID)
			        {
			                $this->load->model('club_model');
			                
			                $data['reclamRecords'] = $this->reclamation_model->reclamInfo($reclamID);

			                $this->global['pageTitle'] = '';
			           		$this->global['active'] = 'claims';
			                $this->loadViews("reclamation/view", $this->global, $data, NULL);   
			        }

			
}