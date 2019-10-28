<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Evaluation_model extends CI_Model
{



        /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function evaluationInfo($evalId)
    {
        $this->db->select('evaluationId, album , afterMovie , projectId, titre , doDate , doBy');
        $this->db->from('tbl_evaluation');
        $this->db->where('evaluationId', $evalId);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function evaluationListing($clubId)
    {
        $this->db->select('BaseTbl.evaluationId , BaseTbl.projectId , BaseTbl.titre , BaseTbl.statut , BaseTbl.doDate , Users.name   ');
        $this->db->from('tbl_evaluation as BaseTbl');
        $this->db->join('tbl_project as Projects', 'Projects.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.doBy', 'LEFT');
         $this->db->where('Projects.clubID = ', $clubId);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function evaluation_A_ValidListing($clubId)
    {
        $this->db->select('BaseTbl.evaluationId , BaseTbl.projectId , BaseTbl.titre , BaseTbl.statut , BaseTbl.doDate , Users.name   ');
        $this->db->from('tbl_evaluation as BaseTbl');
        $this->db->join('tbl_project as Projects', 'Projects.projectId = BaseTbl.projectId', 'LEFT');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.doBy', 'LEFT');
         $this->db->where('Projects.endDate < NOW()  ') ; 
         $this->db->where('Projects.clubID = ', $clubId);
         $this->db->where('BaseTbl.statut = ','En Attend') ;

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

/**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function scoreClubListing()
    {
        $this->db->select('BaseTbl.evaluationId , BaseTbl.projectId , BaseTbl.titre , BaseTbl.statut , BaseTbl.doDate , BaseTbl.doBy   ');
        $this->db->from('tbl_evaluation as BaseTbl');
           
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNew($evaluationInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_evaluation', $evaluationInfo);
        
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
    function editEvaluation($evalInfo, $evaluationId)
    {
        $this->db->where('evaluationId', $evaluationId);
        $this->db->update('tbl_evaluation', $evalInfo);
        
        return TRUE;
    }
    
 
    

    
   
}

  