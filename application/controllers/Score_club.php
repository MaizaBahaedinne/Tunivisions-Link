<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Score_club extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();   
    }
    

		public function scoreClubListing()
		        {

		                $this->load->model('scores_club_model');
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

}