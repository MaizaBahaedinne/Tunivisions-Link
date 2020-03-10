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
		        	$data['pres'] =  $this->user_model->getUserInfoWithRole($this->vendorId) ;
		                $searchText='' ;
		                $data['tfmRecords'] = $this->tfm_model->TFMListing();
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFM';
		                $this->loadViews("TFM/new", $this->global, $data, NULL);   
		        }



		    public function PaimentByClub($clubID)
			{		
							$data['userId']  = $this->vendorId; 
		                $data['userRecords'] = $this->Tfm_part_model->TFMPartListinByclubToP($clubID);
		                 $data['userRecordsT1'] = $this->Tfm_part_model->TFMPartListinByclubT1($clubID);
		                 $data['userRecordsT2'] = $this->Tfm_part_model->TFMPartListinByclubT2($clubID);
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFM';
		                $this->loadViews("TFM/PaimentByClub", $this->global, $data, NULL);   
		        }

		 public function partantF()
		        {	

		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            $data['userID'] = $this->vendorId;
            $this->load->library('pagination');

		        	$data['count'] = count($this->Tfm_part_model->TFMPartListing());
			 	$data['partParsexeH'] = $this->Tfm_part_model->TFMPartConfirmedBySexeHListing();
				$data['partParsexeF'] = $this->Tfm_part_model->TFMPartConfirmedBySexeFListing();
		                $searchText='' ;
		                $data['userId'] = $this->vendorId ;
		                $data['userRecords'] = $this->Tfm_part_model->TFMClubPartListing();
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMP';
		                $this->loadViews("TFM/clubPaiement", $this->global, $data, NULL);   
		        }


		 public function TFMClubPartListing()
		        {	

		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            $data['userID'] = $this->vendorId;
            $this->load->library('pagination');

		        	$data['count'] = count($this->Tfm_part_model->TFMClubPartListing());
		                $searchText='' ;
		                $data['userId'] = $this->vendorId ;
		                $data['userRecords'] = $this->Tfm_part_model->TFMClubPartListing();
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

				
	
				$moto = $this->input->post('bus');
				$sys = $this->input->post('sys');
			

				$partanTfm = array(
		          'tfmId'=>'7',
		          'dateInscrip'=>date('Y-m-d H:i:s'),
		          'userId'=>$this->vendorId ,
		          'statut'=>2 ,
		          'moto'=> $moto ,
		          'sysMobile'=> $sys ,
		        );

		         $result = $this->tfm_model->addNewPartTFM($partanTfm) ;


				
		if ( $result){	
		   			redirect('TFM/TFMListing') ; 		
		   }
		
		}


		public function partanTfmPaiement1 (){

				 foreach ( $this->input->post('participant') as $r)
				{
					$partanTfm = array(  	  
											  'p_tranch1' => '80', 
									          'dateP_tranch1'=>date('Y-m-d H:i:s'),
									          'recepteurTranche1'=>$this->vendorId ,
									     );
					$result = $this->tfm_model->editTFMPart($partanTfm, $r) ;
				}



		
		}


				public function partanTfmPaiement2 (){


					foreach ( $this->input->post('participant') as $r)
				{
								 $partanTfm = array(  	  'p_tranch2' => '70', 
									          'dateP_tranch2'=>date('Y-m-d H:i:s'),
									          'recepteurTranche2'=>$this->vendorId ,
									          'statut'=> 1 
									     );
					$result = $this->tfm_model->editTFMPart($partanTfm, $r) ;	
				}


					
		}


		public function stats (){
					 
		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
						$data['partParReg'] = $this->Tfm_part_model->TFMPartConfirmedByCityListing();
						$data['partParclub'] = $this->Tfm_part_model->TFMPartConfirmedByClubListing();

						$data['partParsexeH'] = $this->Tfm_part_model->TFMPartConfirmedBySexeHListing();
						$data['partParsexeF'] = $this->Tfm_part_model->TFMPartConfirmedBySexeFListing();

						$data['countINS'] = $this->Tfm_part_model->TFMPartListing();

					

		
						$data['countTotal'] = count($this->Tfm_part_model->TFMPartListing());
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMC';
		                $this->loadViews("TFM/stat", $this->global, $data, NULL);   
		
		}


		public function TFMMyBuss (){
					 
		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
						$data['userRecords'] = $this->Tfm_part_model->TFMMyBuss();
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMC';
		                $this->loadViews("TFM/bus", $this->global, $data, NULL);   
		
		}

		public function BusPartList ($id){
					 
		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
           			 $data['searchText'] = $searchText;
            
            		$this->load->library('pagination');
						$data['userRecords'] = $this->Tfm_part_model->BusPartList($id);
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMC';
		                $this->loadViews("TFM/busPart", $this->global, $data, NULL);   
		
		}

	public function BareCode (){
					 
		        	  $searchText = $this->security->xss_clean($this->input->post('searchText'));
           			 $data['searchText'] = $searchText;
            
            $this->load->library('pagination');

		        	$data['count'] = count($this->Tfm_part_model->TFMPartListing());
		                $searchText='' ;
		                $data['userId'] = $this->vendorId ;
		                $data['userRecords'] = $this->Tfm_part_model->TFMPartListing();
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFMP';
		                $this->load->view("TFM/codeABare",$data,false);   
		
		}
		

}
