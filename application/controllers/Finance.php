<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Finance extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('evaluation_model');
        $this->isLoggedIn();   
    }
    

	public function addNew()
		        {
						
		                $data['last'] = 'date'   ;
		                $this->global['active'] = 'finance';
		                $this->loadViews("finance/new", $this->global, $data, NULL);   
		        }

	public function addNewBilan()

		        {		$titre = ucwords(strtolower($this->security->xss_clean($this->input->post('titre'))));
						$charges = ucwords(strtolower($this->security->xss_clean($this->input->post('charges'))));
						$produits = ucwords(strtolower($this->security->xss_clean($this->input->post('produits'))));
			            $description_produits = ucwords(strtolower($this->security->xss_clean($this->input->post('description_produits'))));
			            $description_Charge = ucwords(strtolower($this->security->xss_clean($this->input->post('description_Charge'))));

			             $bilanInfo = array(
		                 'titre' => $titre ,  
		                 'createdDate'=>date('Y-m-d H:i:s'),
		                 'description_Produit'=>$this->vendorId,
		                 'description_Charge'=>$this->vendorId,
		                 'produit'=>$produits,
		                 'description_Charge'=>$this->vendorId,
		                 'charge'=>$charges,
		                 'clubID'=>$this->clubID,
		                 'createdBy'=>$this->vendorId
		   
                     );

 				$this->load->model('finance_model');
                $result = $this->finance_model->addNew($bilanInfo);

                redirect('Finance/financeListing') ;
		                 
		        }


public function financeListing()
		        {
						$this->load->library('pagination');
		                $this->load->model('finance_model');
		                $searchText='' ;
		                $data['financeRecords'] = $this->finance_model->financeListing($this->clubID);
 						$count = $this->finance_model->financeListing($this->clubID);
            			$data['count'] = count($count)  ; 

		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             $this->global['active'] = 'finances';
		                $this->loadViews("finance/list", $this->global, $data, NULL);   
		        }


		public function financeListingF()
		        {
						$this->load->library('pagination');
		                $this->load->model('finance_model');
		                $searchText='' ;
		                $data['financeRecords'] = $this->finance_model->financeListingF();
 						$count = $this->finance_model->financeListingF();
            			$data['count'] = count($count)  ; 

		                $this->global['pageTitle'] = 'CodeInsect : club  Listing';
		             $this->global['active'] = 'finances';
		                $this->loadViews("finance/list", $this->global, $data, NULL);   
		        }



		
}