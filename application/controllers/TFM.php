<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class TFM extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('notification_model');
        $this->load->model('tfm_model');
        $this->isLoggedIn();   
    }
    

		public function TFMListing()
		        {

		                $searchText='' ;
		                $data['tfmRecords'] = $this->tfm_model->TFMListing();
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFM';
		                $this->loadViews("TFM/list", $this->global, $data, NULL);   
		        }


		public function partant($tfmId)
		        {
		                $searchText='' ;
		                $data['tfmRecords'] = $this->tfm_model->TFMListing();
		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             	$this->global['active'] = 'TFM';
		                $this->loadViews("TFM/partant", $this->global, $data, NULL);   
		        }

		

}