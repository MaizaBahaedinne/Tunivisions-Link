<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Score_club extends BaseController {

    public function __construct()
    {
        parent::__construct();
         $this->load->model('user_model');
        $this->load->model('project_model');
        $this->load->model('ressource_model');
        $this->load->model('evaluation_model');
        $this->load->model('scores_club_model');
        $this->load->model('Scores_model');
        
        $this->isLoggedIn();   
    }
    

		public function scoreClubListing()
		        {

		               
		                $searchText='' ;
		                $data['clubRecords'] = $this->club_model->clubListing();

		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		            
		                $this->loadViews("club/all", $this->global, $data, NULL);   
		        }

		public function clubListing2()
		        {

		                $this->load->model('club_model');
		                $searchText='' ;
		                $data['clubRecords'] = $this->club_model->clubListing();

		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		            
		                $this->loadViews("club/list", $this->global, $data, NULL);   
		        }

				public function clubInfo()
		        {
					$this->load->model('club_model');
					$this->load->model('project_model');
			        $data["clubInfo"] = $this->club_model->getClubInfo($this->clubID);
			        $data["bureauExe"] = $this->club_model->BureauListing($this->clubID);
			        $data["PTW"] = $this->project_model->projectListingByClubThisWeek($this->clubID);
			        $data["PTM"] = $this->project_model->projectListingByClubThisMounth($this->clubID);
			        $data["PTP"] = $this->project_model->projectListingByClubPast($this->clubID) ; 
			        
			        $this->load->model('project_model');

			 $count = $this->user_model->userListing($this->vendorId);
      	 


			        $data["conference"] = count($this->project_model->projectListingByType('Conférence',$this->clubID))  ; 
			        $data["formation"] = count($this->project_model->projectListingByType('Formation',$this->clubID));
			        $data["evenement"] = count($this->project_model->projectListingByType('Evenement',$this->clubID));

			       		       
			        $this->loadViews("club/myClub", $this->global, $data, NULL);
		        }

		        public function Postes()
		        {
					$this->load->model('user_model');
			        $data["membres"] = $this->user_model->userListingByclub($this->vendorId,$this->clubID);
			       
			        
			       
			        $this->loadViews("club/roles", $this->global, $data, NULL);
		        }


		        public function PNoter($projectID)
		        {
		        	   $data["projectInfo"] = $this->project_model->getProjectInfo($projectID);
                        $data["evaluations"] = $this->evaluation_model->evaluationInfoprojectId($projectID);

                        $data['resource'] = $this->ressource_model->ressourceListingByProject($projectID);
                        $data['BadgesRecords'] = $this->Scores_model->badgeListing();

                        $data['scoreClub']  =	$this->scores_club_model->scoreClubbyProjectListing($projectID);

		        	   $this->loadViews("project/noter", $this->global, $data, NULL);
		        }


				public function noteProject($projectID)
			        {

			        	$projectInfo = $this->project_model->getProjectInfo($projectID);
                        $evaluations = $this->evaluation_model->evaluationInfoprojectId($projectID);
						$resource = 	$this->ressource_model->ressourceListingByProject($projectID);
						$scoreClub  =	$this->scores_club_model->scoreClubbyProjectListing($projectID);

						

							$score = $this->input->post('scoreP');
			                $remarque = $this->input->post('remarque'); 
			                $titre = $this->input->post('titre');   

			                $scoreInfo = array(
			                	 'titre' => $titre ,
				                 'score' => $score ,  
				                 'remarque'=>$remarque,
				                 'createdDate'=>date('Y-m-d H:i:s'),				                 
				                     );        

			                $this->scores_club_model->editScoreClub($scoreInfo, $scoreClub->score_clubID) ; 

			                if( $score > 0 ){
			                $badge = $this->input->post('badge');

			               	foreach ($resource as $res ) {
			               		
			               		if ($res->score>1) {

				              	$ressource = array(
				              		'badgeId'=>$badge , 
				              		'ValidDate'=> date('Y-m-d H:i:s') ,
				              	);

				      			$this->ressource_model->editRessource($ressource, $res->ressourceID) ; 
				      			
				      			}
			               	}

			               	}
			               	
			               	$evalInfo = array(
						                'valider'=>'Valider',
						                'dateValid'=> date('Y-m-d H:i:s') ,
						                'validBy'=>$this->vendorId , 
						            	);


						    $result = $this->evaluation_model->editEvaluation($evalInfo, $evaluations->evaluationId);


		
						    redirect('Score_club/PNoter/'.$projectID) ; 


			        }
}