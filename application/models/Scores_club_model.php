<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Scores_club_model extends CI_Model
{


    
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function scoreClubListing($clubID)
    {
        $this->db->select('BaseTbl.score_clubID , BaseTbl.clubID , BaseTbl.titre , BaseTbl.score ,BaseTbl.affectedBy ');
        $this->db->from('tbl_score_club as BaseTbl');
        $this->db->join('tbl_project as Users', 'Users.userId = BaseTbl.doBy', 'LEFT');
        $this->db->where('BaseTbl.clubID =' ,  $clubID);
        $this->db->order_by('BaseTbl.createdDate ASC');
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
    function scoreClubbyProjectListing($projectId)
    {
        $this->db->select('BaseTbl.score_clubID , BaseTbl.clubID , BaseTbl.titre , BaseTbl.score ,BaseTbl.affectedBy ');
        $this->db->from('tbl_score_club as BaseTbl');
        $this->db->join('tbl_evaluation as Evals', 'Evals.score_clubID = BaseTbl.score_clubID', 'LEFT');
        $this->db->where('Evals.projectId =' ,  $projectId);
       
      
        $query = $this->db->get();

         return $query->row();
    }



    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewScoreClub($ScoreInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_score_club', $ScoreInfo);
        
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
    function editScoreClub($scoreClubInfo, $scoreClubId)
    {
        $this->db->where('score_clubID', $scoreClubId);
        $this->db->update('tbl_score_club', $scoreClubInfo);
        
        return TRUE;
    }
    


   
}

  