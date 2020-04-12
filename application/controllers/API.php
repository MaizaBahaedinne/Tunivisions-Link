<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Api extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('club_model');
        $this->load->model('scores_model');
        $this->load->model('project_model');

    }

    public function Users()
    {
            header('Content-Type: application/json');
            echo json_encode( $this->user_model->userListing(0), JSON_PRETTY_PRINT);
    }

    public function Clubs()
    {
            header('Content-Type: application/json');
            echo json_encode( $this->club_model->clubListing(), JSON_PRETTY_PRINT);
    }

    public function RateClubs()
    {
            header('Content-Type: application/json');
            echo json_encode( $this->scores_model->RaitingClub() , JSON_PRETTY_PRINT);
    }

    public function RateMembers()
    {
            header('Content-Type: application/json');
            echo json_encode( $this->scores_model->RaitingUsers() , JSON_PRETTY_PRINT);
    }

    public function Projects()
    {
            header('Content-Type: application/json');
            echo json_encode( $this->project_model->projectListing() , JSON_PRETTY_PRINT);
    } 



}