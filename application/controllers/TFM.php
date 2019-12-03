<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class TFM extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('notification_model');
        $this->load->model('Tfm_part_model');
        $this->load->model('club_model');
        $this->load->model('tfm_model');
        $this->isLoggedIn();   
    }
    

		public function TFMListing()
		        {
		        		 
		                $searchText='' ;
		                $data['tfmRecords'] = $this->tfm_model->TFMListing();
		                $data['tfmpartRecords'] = $this->tfm_model->TFMPListing($this->vendorId);
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFM';
		                $this->loadViews("TFM/list", $this->global, $data, NULL);   
		        }


		public function partant()
		        {		
		        	$data['auto'] =  $this->club_model->getClubInfo($this->clubID) ;
		                $searchText='' ;
		                $data['tfmRecords'] = $this->tfm_model->TFMListing();
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFM';
		                $this->loadViews("TFM/new", $this->global, $data, NULL);   
		        }


		 public function partantF()
		        {	

		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');

		        	$data['count'] = count($this->Tfm_part_model->TFMPartListing());
		                $searchText='' ;
		                $data['userId'] = $this->vendorId ;
		                $data['userRecords'] = $this->Tfm_part_model->TFMPartListing();
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMP';
		                $this->loadViews("TFM/listpf", $this->global, $data, NULL);   
		        }

		 public function partantByClub()
		        {	

		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');

		        	$data['count'] = count($this->Tfm_part_model->TFMPartListinByclub($this->clubID));
		                $searchText='' ;
		                $data['userRecords'] = $this->Tfm_part_model->TFMPartListinByclub($this->clubID);
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMC';
		             	$data['userId'] = $this->vendorId ;
		                $this->loadViews("TFM/listpf", $this->global, $data, NULL);   
		        }    


		public function TFMCountByClubV()
		   {	

		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');

		        	$data['count'] = count($this->Tfm_part_model->TFMCountByClub());
		                $searchText='' ;
		                $data['userRecords'] = $this->Tfm_part_model->TFMCountByClub();
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMC';
		                $this->loadViews("TFM/countByClub", $this->global, $data, NULL);   
		        }    

		        


		public function partanTfm (){

				//club
				if($this->role == 1 || $this->SA==1  ){
				$date = $this->input->post('dateFonde');
				$email = $this->input->post('email');
				$facebook = $this->input->post('facebook');

				$clubInfo = array(
		          'facebook'=>$email,
		          'email'=>$facebook,
		          'birthday'=>$date ,

		        );

				$resultC = $this->club_model->editclub($clubInfo, $this->clubID) ; 
				}
				//user
				$annee = $this->input->post('annee');
				$userInfo = array(
		          'affectedYear'=>$annee 
		        );
				$resultU = $this->user_model->editUser($userInfo, $this->vendorId);
			
				//tfm
				$moto = $this->input->post('bus');
				$sys = $this->input->post('sys');
			

				$partanTfm = array(
		          'tfmId'=>'6',
		          'dateInscrip'=>date('Y-m-d H:i:s'),
		          'userId'=>$this->vendorId ,
		          'statut'=>2 ,
		          'moto'=> $moto ,
		          'sysMobile'=> $sys ,
		        );

		         $result = $this->tfm_model->addNewPartTFM($partanTfm) ;

		        if($this->input->post('TFMS') > 0 ){
			        foreach ($this->input->post('TFMS') as $TFM ) {
				        $partanTfm = array(
				          'tfmId'=>$TFM,
				          'dateInscrip'=>date('Y-m-d H:i:s'),
				          'userId'=>$this->vendorId ,
				          'statut'=>1 ,
				          'moto'=> $moto ,
				          'sysMobile'=> $sys ,
				        );
					 $this->tfm_model->addNewPartTFM($partanTfm) ;
		       	 	}
		   		 }
				
		if ( $result){	
		   			redirect('TFM/TFMListing') ; 		
		   }
		
		}


		public function partanTfmPaiement1 ($tfmpartId){
					 $partanTfm = array(  	  'p_tranch1' => '80', 
									          'dateP_tranch1'=>date('Y-m-d H:i:s'),
									          'recepteurTranche1'=>$this->vendorId ,
									     );
					$result = $this->tfm_model->editTFMPart($partanTfm, $tfmpartId) ;

		
		}


		public function stats (){
					 
		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
						$data['partParReg'] = $this->Tfm_part_model->TFMPartConfirmedByCityListing();
						$data['countTotal'] = count($this->Tfm_part_model->TFMPartListing());
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMC';
		                $this->loadViews("TFM/stat", $this->global, $data, NULL);   
		
		}

		

}