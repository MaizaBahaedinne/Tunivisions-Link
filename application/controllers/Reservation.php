<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Reservation extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('user_model');
         $this->isLoggedIn();   

    }



    public function reservationListing()
                {
                        $this->load->library('pagination');
                        $this->load->model('reservation_model');
                        $searchText='' ;
                        $data['reservationRecords'] = $this->reservation_model->reservationListingAccepeted();
                       
                       
                        $this->global['pageTitle'] = 'CodeInsect : club  Listing';
                        $this->global['active'] = 'reservations';
                        $this->loadViews("reservation/calander", $this->global, $data, NULL);    
                }

    public function addNew()
                    {
                            $this->load->model('club_model');
                            
                            $data['clubRecords'] = $this->club_model->clubListing();

                            $this->global['pageTitle'] = '';
                        $this->global['active'] = 'reservations';
                            $this->loadViews("reservation/new", $this->global, $data, NULL);   
                    }



}

?>