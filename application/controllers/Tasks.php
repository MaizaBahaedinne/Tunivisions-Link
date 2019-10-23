<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Tasks extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('tasks_model');
        $this->load->model('project_model');
        $this->isLoggedIn();   
    }
    

		public function tasksListing()
		        {
		        		 $this->load->library('pagination');
		                $this->load->model('tasks_model');
		                $searchText='' ;
		                $data['tasksRecords'] = $this->tasks_model->tasksListing($this->clubID);
						$data['count'] = count($this->tasks_model->tasksListing($this->clubID));
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		           		 $this->global['active'] = 'tasks';
		                $this->loadViews("tasks/list", $this->global, $data, NULL);   
		        }

		public function myTasksListing()
		        {
		        		 $this->load->library('pagination');
		                $this->load->model('tasks_model');
		                $searchText='' ;
		                $data['tasksRecords'] = $this->tasks_model->myTasksListing($this->vendorId);
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		            	$this->global['active'] = 'tasks';
		                $this->loadViews("tasks/mytasks", $this->global, $data, NULL);   
		        }

		public function tasksIsfinish($taskID)
		        {
				        $taskInfo = array(
		                 'endDate' =>  date('Y-m-d H:i:s'), 
		                 'statut' => 'fini'  
		                 
		                     );
		        		  $this->tasks_model->editEvaluation($taskInfo,$taskID);
		        		  redirect ('Tasks/tasksListing') ;
		          
		        }


		public function addNew()
		        {
		                
		                	$this->global['pageTitle'] = 'CodeInsect : club  Listing';
		           		 $data['members'] = $this->user_model->userListingByclub($this->vendorId,$this->clubID);
		        		 $data['projectsRecords'] = $this->project_model-> projectListingByClubPast($this->clubID);
		        		 $this->global['active'] = 'tasks';
		        		 $this->loadViews("tasks/new", $this->global, $data, NULL); 
		        		  
		          
		        }  


		public function addNewTask()
		        {
		                
		               $Titre = $this->input->post('Titre');
		               $Description = $this->input->post('Description');
		        	   $deadline = $this->input->post('deadline');
			   		   $affectedTo = $this->input->post('ressource');
			   		   $affectedby = $this->vendorId;
			   		   $projectID = $this->input->post('project');

			   		   $taskInfo = array(
		                 'Titre' =>  $Titre, 
		                 'statut' => 'En Attend' , 
		                 'affectedby' => $affectedby ,
		                 'affectedTo' => $affectedTo , 
		                 'deadline' => $deadline ,
		                 'Description' => $Description,
		                 'projectId' => $projectID , 
		                 'createdDate' => date('Y-m-d H:i:s')
		                     );

			   		   $this->tasks_model->addNewTask($taskInfo);

		        		redirect('Tasks/tasksListing') ;  
		        		  
		          
		        }           
		
		
}