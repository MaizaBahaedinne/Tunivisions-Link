<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Club extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('notification_model');
        $this->isLoggedIn();   
    }
    

		public function clubListing()
		        {

		                $this->load->model('club_model');
		                $searchText='' ;
		                $data['clubRecords'] = $this->club_model->clubListing();

		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             $this->global['active'] = 'clubs';
		                $this->loadViews("club/all", $this->global, $data, NULL);   
		        }

		public function clubListing2()
		        {

		                $this->load->model('club_model');
		                $searchText='' ;
		                $data['clubRecords'] = $this->club_model->clubListing();

		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             $this->global['active'] = 'clubs';
		                $this->loadViews("club/list", $this->global, $data, NULL);   
		        }

				public function clubInfo()
		        {
					$this->load->model('club_model');
					$this->load->model('project_model');
					$this->load->model('scores_club_model');
					$this->load->model('finance_model');
					$this->load->model('project_model');

					$data["finance"] = $this->finance_model->financeInfostat($this->clubID);
					$data["scoreByClub"] = $this->scores_club_model->scoreClubListing($this->clubID);
			        $data["clubInfo"] = $this->club_model->getClubInfo($this->clubID);
			        $data["bureauExe"] = $this->club_model->BureauListing($this->clubID);
			        $data["PTW"] = $this->project_model->projectListingByClubThisWeek($this->clubID);
			        $data["PTM"] = $this->project_model->projectListingByClubThisMounth($this->clubID);
			        $data["PTP"] = $this->project_model->projectListingByClubPast($this->clubID) ;
			        $data["members"] = $this->user_model->userListingByclubINFO($this->clubID) ;
			        $data["membersCount"] =count($this->user_model->userListingByclub($this->vendorId,$this->clubID)) -5 ;
			 		$count = $this->user_model->userListing($this->vendorId);

			        $data["conference"] = count($this->project_model->projectListingByType('Conférence',$this->clubID));
			          
			        $data["formation"] = count($this->project_model->projectListingByType('Formation',$this->clubID));
			        $data["evenement"] = count($this->project_model->projectListingByType('Evenement',$this->clubID));
			    			       		 $this->global['active'] = 'myClub';       
			       $this->loadViews("club/myClub", $this->global, $data, NULL);
		        }

		        public function Postes()
		        {
					$this->load->model('user_model');
			        $data["membres"] = $this->user_model->userListingByclub($this->vendorId,$this->clubID);
			       
			        
			        	 $this->global['active'] = 'postes';
			       
			        $this->loadViews("club/roles", $this->global, $data, NULL);
		        }


		        public function EditPostes()
		        {
					$this->load->model('user_model');
				
					$userInfo =  array('roleId' => 5  );

			       	$equipe = $this->user_model->getMembersByCellule($this->clubID,'Marketing');
			       	foreach ($equipe as $record ) {	       		
			       		$this->user_model->editUser($userInfo, $record->userId) ;	
			       	 }

			       	$equipe = $this->user_model->getMembersByCellule($this->clubID,'Administration et finance');
			       	foreach ($equipe as $record ) {			       		
			       		$this->user_model->editUser($userInfo, $record->userId) ;	
			       	 }

			       	$equipe = $this->user_model->getMembersByCellule($this->clubID,'Evenementiel');
			       	foreach ($equipe as $record ) {			       	
			       		$this->user_model->editUser($userInfo, $record->userId) ;	
			       	 }

			       	$equipe = $this->user_model->getMembersByCellule($this->clubID,'Gestion des talents');
			       	foreach ($equipe as $record ) {			       		
			       		$this->user_model->editUser($userInfo, $record->userId) ;	
			       	 }



			       	$VPM = $this->input->post('VPM');
			       	$VPGT = $this->input->post('VPGT');
			       	$VPE = $this->input->post('VPE');
			       	$VPAF = $this->input->post('VPAF');

			       	
			       	$userInfo =  array('roleId' =>  3 );

			       	if($VPM != NULL){
			       	$this->user_model->editUser($userInfo, $VPM) ;
			       	$notifInfo = array(        
                                                             'text' => 'Félicitation pour votre nouveau poste' ,
                                                             'dateNotif' => date('Y-m-d H:i:s') , 
                                                             'seen' => 'no' , 
                                                             'type' => 'Notification',
                                                             'userId' => $VPM 
                                                             );                       
                           $this->notification_model->addNewNotificaition($notifInfo) ;
					}
					
					if($VPGT != NULL){
			       	$this->user_model->editUser($userInfo, $VPGT); 
			       				       	$notifInfo = array(        
                                                             'text' => 'Félicitation pour votre nouveau poste' ,
                                                             'dateNotif' => date('Y-m-d H:i:s') , 
                                                             'seen' => 'no' , 
                                                             'type' => 'Notification',
                                                             'userId' => $VPGT 
                                                             );                       
                           $this->notification_model->addNewNotificaition($notifInfo) ;
                    }       

                    if($VPAF != NULL){
			       	$this->user_model->editUser($userInfo, $VPAF) ;
			       				       	$notifInfo = array(        
                                                             'text' => 'Félicitation pour votre nouveau poste' ,
                                                             'dateNotif' => date('Y-m-d H:i:s') , 
                                                             'seen' => 'no' , 
                                                             'type' => 'Notification',
                                                             'userId' => $VPAF 
                                                             );                       
                           $this->notification_model->addNewNotificaition($notifInfo) ;
                    }       

                    if($VPE != NULL){
			       	$this->user_model->editUser($userInfo, $VPE) ;
			       				       	$notifInfo = array(        
                                                             'text' => 'Félicitation pour votre nouveau poste' ,
                                                             'dateNotif' => date('Y-m-d H:i:s') , 
                                                             'seen' => 'no' , 
                                                             'type' => 'Notification',
                                                             'userId' => $VPE 
                                                             );                       
                           $this->notification_model->addNewNotificaition($notifInfo) ;
                    }
                           
			        redirect('club/clubInfo');
		        }

}