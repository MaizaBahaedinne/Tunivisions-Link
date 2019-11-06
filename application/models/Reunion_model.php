<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login_model (Login Model)
 * Login model class to get to authenticate user credentials 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Reunion_model extends CI_Model
{
	function ReuinionListing($clubID)
    {
        $this->db->select('BaseTbl.reunionId , BaseTbl.dateDo , BaseTbl.timeDo , BaseTbl.cellule , BaseTbl.clubID   , BaseTbl.clubID  , BaseTbl.Sujet  , BaseTbl.local , BaseTbl.PV , BaseTbl.createdBy ');
        $this->db->from('tbl_reunion as BaseTbl');
        $this->db->where('BaseTbl.clubID=',$clubID) ;
        $this->db->where('YEAR(BaseTbl.dateDo) = YEAR(curdate()) AND Month(BaseTbl.dateDo) = Month(curdate()) ') ;
        $this->db->order_by('BaseTbl.dateDo','DESC') ;

         $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getReunionInfoById($reunionId)
    {
        $this->db->select('reunionId, BaseTbl.cellule , dateDo, timeDo , Clubs.name as clubName  , Sujet, local , PV , Users.name as userName');
        $this->db->from('tbl_reunion        as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.createdBy', 'LEFT');
        $this->db->where('reunionId', $reunionId);
        $query = $this->db->get();
        
        return $query->row();
    }

     /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewReunion($reunionInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_reunion', $reunionInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


/**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
    */
    function editEvaluation($reunionInfo, $reunionId)
    {
        $this->db->where('reunionId', $reunionId);
        $this->db->update('tbl_reunion', $reunionInfo);
        
        return TRUE;
    }
    

}