<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Posts extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('evaluation_model');
        $this->load->model('user_model');
        $this->load->model('scores_model');  
        $this->load->model('club_model'); 
        $this->load->model('project_model');   
        $this->load->model('Image_upload_model');
        $this->load->model('actualite_model');
        $this->load->model('notification_model');
        $this->load->model('finance_model');
        $this->load->model('Tfm_part_model');
        $this->load->model('ressource_model');
        $this->load->model('posts_model');
        
        $this->isLoggedIn();   
    }
    

public function Acceuil()
		        {


		        	    $data['ActuRecords'] = $this->actualite_model->actuListing();
		        	     $data['projectRecords'] = $this->project_model->projectListing();
		               $data  ['postRecords'] =  $this->posts_model->postsListing(); ; 

		                $this->loadViews("Acceuil", $this->global, $data, NULL);   
		        }


 public function addNewP()
                {

                    $postText = $this->input->post('postText');


                $postInfo = array(        
                 'Content' => NL2BR($postText) ,
                 'userId ' => $this->vendorId ,
                 'DatePosted '=> date('Y-m-d H:i:s') ,
                     );
                

                
                $result = $this->posts_model->addNewPost($postInfo);
                
                     redirect('/Posts/Acceuil');

                }

                


		
}