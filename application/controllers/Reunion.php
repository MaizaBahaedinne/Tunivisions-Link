<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Reunion extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('reunion_model');
        $this->load->model('notification_model');
        $this->load->model('absence_model');
        $this->load->model('user_model');
        $this->isLoggedIn();   
    }
    

	public function ReunionListing()
		        {
						$this->load->library('pagination');
		                $this->load->model('reunion_model');
		                $searchText='' ;
		                $data['reunionRecords'] = $this->reunion_model->ReuinionListing($this->clubID);
   					      	$count = $this->reunion_model->ReuinionListing($this->clubID);
              			$data['count'] = count($count)  ; 
                        $data['user'] = $this->vendorId  ;
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		                $this->global['active'] = 'meeting';
		                $this->loadViews("reunion/list", $this->global, $data, NULL);   
		        }

		public function addNew()
		        {
						$this->load->library('pagination');
		                $this->load->model('reunion_model');

              			

		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		                  $this->global['active'] = 'meeting';
		                $this->loadViews("reunion/new", $this->global, Null, NULL);   
		        }

		public function addNewReunion()
		        {

                $dateDo = $this->input->post('dateDo');
                $Sujet = $this->input->post('sujet');
                $local = $this->input->post('local');
                $cellule = $this->input->post('cellule');
                $timeDo = $this->input->post('timeDo');
  
                $reunionInfo = array(        
                 'dateDo' => $dateDo ,
                 'clubID' => $this->clubID ,
                 'Sujet' => $Sujet , 
                 'local' => $local , 
                 'createdBy' => $this->vendorId , 
                 'cellule' => $cellule ,
                 'timeDo' => $timeDo ,
                 'createdDate' =>  date('Y-m-d H:i:s')

                     );
                
                $this->load->model('reunion_model');
                $result = $this->reunion_model->addNewReunion($reunionInfo);

                if ( $cellule == 'Generale'){
                    $equipe = $this->user_model->getMembersByCellule($this->clubID,'Marketing');
                    foreach ($equipe as $record ) {
                                        $notifInfo = array(        
                                                             'text' => 'Vous avez une nouvelle réunion' ,
                                                             'dateNotif' => date('Y-m-d H:i:s') , 
                                                             'seen' => 'no' , 
                                                             'type' => 'Notification',
                                                             'userId' => $record->userId,
                                                             'url' => '/Reunion/ReunionListing' 
                                                             );             
                        $this->notification_model->addNewNotificaition($notifInfo) ;
               

                     }

                    $equipe = $this->user_model->getMembersByCellule($this->clubID,'Administration et finance');
                    foreach ($equipe as $record ) {
                                        $notifInfo = array(        
                                                             'text' => 'Vous avez une nouvelle réunion' ,
                                                             'dateNotif' => date('Y-m-d H:i:s') , 
                                                             'seen' => 'no' , 
                                                             'type' => 'Notification',
                                                             'userId' => $record->userId,
                                                             'url' => '/Reunion/ReunionListing' 
                                                             );                                           
                          $this->notification_model->addNewNotificaition($notifInfo) ;

                     }

                    $equipe = $this->user_model->getMembersByCellule($this->clubID,'Evenementiel');
                    foreach ($equipe as $record ) {
                                        $notifInfo = array(        
                                                             'text' => 'Vous avez une nouvelle réunion' ,
                                                             'dateNotif' => date('Y-m-d H:i:s') , 
                                                             'seen' => 'no' , 
                                                             'type' => 'Notification',
                                                             'userId' => $record->userId,
                                                             'url' => '/Reunion/ReunionListing' 
                                                             );       
                         $this->notification_model->addNewNotificaition($notifInfo) ;            


                     }

                    $equipe = $this->user_model->getMembersByCellule($this->clubID,'Gestion des talents');
                    foreach ($equipe as $record ) {
                                        $notifInfo = array(        
                                                             'text' => 'Vous avez une nouvelle réunion' ,
                                                             'dateNotif' => date('Y-m-d H:i:s') , 
                                                             'seen' => 'no' , 
                                                             'type' => 'Notification',
                                                             'userId' => $record->userId,
                                                             'url' => '/Reunion/ReunionListing' 
                                                             );                       
                           $this->notification_model->addNewNotificaition($notifInfo) ;


                     }
                }



                elseif ($cellule == 'Bureau') {}



                elseif ($cellule == 'Marketing') {
                    $equipe = $this->user_model->getMembersByCellule($this->clubID,'Marketing');
                    foreach ($equipe as $record ) {  
                    $notifInfo = array(        
                                                             'text' => 'Vous avez une nouvelle réunion' ,
                                                             'dateNotif' => date('Y-m-d H:i:s') , 
                                                             'seen' => 'no' , 
                                                             'type' => 'Notification',
                                                             'userId' => $record->userId,
                                                             'url' => '/Reunion/ReunionListing'
                                                              
                                                             );           
                        $this->notification_model->addNewNotificaition($notifInfo) ;



                     }                    
                }



                elseif ($cellule == 'Administration et finance') {
                    $equipe = $this->user_model->getMembersByCellule($this->clubID,'Administration et finance');
                    foreach ($equipe as $record ) {      
                    $notifInfo = array(        
                                                             'text' => 'Vous avez une nouvelle réunion' ,
                                                             'dateNotif' => date('Y-m-d H:i:s') , 
                                                             'seen' => 'no' , 
                                                             'type' => 'Notification',
                                                             'userId' => $record->userId,
                                                             'url' => '/Reunion/ReunionListing'
                                                             );               
                          $this->notification_model->addNewNotificaition($notifInfo) ;
                         
                     }
                }



                elseif ($cellule == 'Evenementiel') {
                    $equipe = $this->user_model->getMembersByCellule($this->clubID,'Evenementiel');
                    foreach ($equipe as $record ) {     
                         $this->notification_model->addNewNotificaition($notifInfo) ;
                              
                       
                     }                    
                }   



                elseif ($cellule == 'Gestion des talents') {
                    $equipe = $this->user_model->getMembersByCellule($this->clubID,'Gestion des talents');
                    foreach ($equipe as $record ) {                     
                           $this->notification_model->addNewNotificaition($notifInfo) ;



                     }                    
                }  



        redirect('Reunion/ReunionListing') ;
               
		        }
	

    	
    public function PV_edit($reunionId)
                {
                        $this->load->library('pagination');
                        $this->load->model('reunion_model');
                        $this->load->model('user_model');
                       $data['members'] = $this->user_model->userListingByclub($this->vendorId,$this->clubID);
                        $data['reunionRecord'] = $this->reunion_model->getReunionInfoById($reunionId);
                        $data['user'] = $this->vendorId  ;                       
                        $this->global['pageTitle'] = 'CodeInsect : club  Listing';
                        $this->global['active'] = 'meeting';
                        $this->loadViews("reunion/edit", $this->global, $data, NULL);   
                }


    public function editReunion($reunionId)
                {

                
                $PV = $this->input->post('PV');
                
                $reunionInfo = array(        
                 'PV' => $PV ,);
                
                $this->load->model('reunion_model');
                $result = $this->reunion_model->editEvaluation($reunionInfo, $reunionId);
                        
                foreach ( $this->input->post('ressource') as $r)
                {
                        $absenceInfo = array(        
                                                             'reunionId' => $reunionId ,
                                                             'userID' =>  $r  , 
                                                             'etat'=>'Absent'
                                                             ); 
                        $this->absence_model->addNew($absenceInfo) ;
                }

               redirect('Reunion/ReunionListing') ; 
                }

		    public function reunionDetails($reunionId)
                {
                        $this->load->library('pagination');
                        $this->load->model('reunion_model');
                        $this->load->model('user_model');
                        $data['members'] = $this->user_model->userListingByclub($this->vendorId,$this->clubID);
                        $data['reunionRecord'] = $this->reunion_model->getReunionInfoById($reunionId);
                        $data['user'] = $this->vendorId  ;
                        $data['Absences'] = $this->absence_model->absenceListing($reunionId)  ;                      
                        $this->global['pageTitle'] = 'CodeInsect : club  Listing';
                        $this->global['active'] = 'meeting';
                        $this->loadViews("reunion/view", $this->global, $data, NULL);   
                }

}