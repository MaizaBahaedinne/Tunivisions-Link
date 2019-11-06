<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Evaluation extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('evaluation_model');
        $this->load->model('scores_club_model');
        
        $this->isLoggedIn();   
    }
    

    public function evaluationListingF()           
     {
            $this->load->library('pagination');
                    $searchText='' ;
                    $data['evaluationRecords'] = $this->evaluation_model->evaluationListingF();
                    $count = $this->evaluation_model->evaluationListingF();
                    $data['count'] = count($count)  ; 

                    $this->global['pageTitle'] = 'CodeInsect : club  Listing';
                 $this->global['active'] = 'projects';
                    $this->loadViews("evaluation/listF", $this->global, $data, NULL);   
            }

	public function evaluationListing()
		        {

              if( $this->role == 1 || ($this->role == 3 && $this->role == 'Gestion des talents') ) 
              
              {
      						$this->load->library('pagination');
      		                $searchText='' ;
        		              $data['evaluationRecords'] = $this->evaluation_model->evaluationListing($this->clubID);
         						      $count = $this->evaluation_model->evaluationListing($this->clubID);
                    			$data['count'] = count($count)  ; 

      		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
      		             $this->global['active'] = 'projects';
      		                $this->loadViews("evaluation/list", $this->global, $data, NULL);   
      		        }
                  else 
                  {
                  redirect('/') ;
              }

        }


	public function doEvaluation($EvalId) 
		        {

            if( $this->role == 1 || ($this->role == 3 && $this->role == 'Gestion des talents') ) 
              
              {
						$this->load->library('pagination');
		                $this->load->model('evaluation_model');
		                $eval = $this->evaluation_model->evaluationInfo($EvalId) ;
		                $data['evaluationRecord'] = $this->evaluation_model->evaluationInfo($EvalId) ;
 						
 						$this->load->model('ressource_model');
 						$data['ressourceRecords'] = $this->ressource_model->ressourceListingByProject($eval->projectId);	

		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             $this->global['active'] = 'projects';
		                $this->loadViews("evaluation/edit", $this->global, $data, NULL);   
                  }else 
                  {
                  redirect('/') ;
              }
		        }

	public function evalutionupdate($EvalId)  {
        $album = $this->input->post('album');
        $afterMovie = $this->input->post('album');
        $this->load->model('evaluation_model');
		    $this->load->model('ressource_model');

        $ScoreInfo = array(
          'clubID'=>$this->clubID,
          'titre'=>'',
          
        );
        
        $evalInfo = array(
          'album'=>$album,
          'afterMovie'=>$afterMovie,
          'doDate'=> date('Y-m-d H:i:s') ,
          'doBy'=>$this->vendorId , 
          'statut'=>'fini',
          'score_clubID'=>$this->scores_club_model-> addNewScoreClub($ScoreInfo),
      	);


        $result = $this->evaluation_model->editEvaluation($evalInfo, $EvalId);  
        $eval = $this->evaluation_model->evaluationInfo($EvalId);

        $rbp = $this->ressource_model->ressourceListingByProject($eval->projectId);		
        foreach ( $rbp as $r ) {
        	$score = $this->input->post($r->ressourceID);
        	$ressource = array(
        		'score'=>$score
        	);
			$this->ressource_model->editRessource($ressource, $r->ressourceID) ; 

        }


        redirect('Evaluation/evaluationListing');
            
    }

		
}