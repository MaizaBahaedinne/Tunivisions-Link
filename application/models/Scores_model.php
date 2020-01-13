<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Scores_model extends CI_Model
{


    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function RaitingClub()
    {
        $this->db->select('BaseTbl.score_clubID , max(BaseTbl.createdDate) createdDate ,  BaseTbl.clubID , Clubs.name , sum(score) as scores ');
        $this->db->from('tbl_score_club as  BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.clubID','left');
        $this->db->order_by('scores', 'DESC');
        $this->db->group_by('Clubs.clubID'); 
     
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
    function RaitingUsers()
    {
        $this->db->select('BaseTbl.userId  , BaseTbl.avatar , BaseTbl.name ,  BaseTbl.clubName , sum(scoreByMembre) as scores  ');
        $this->db->from('memberscoring as  BaseTbl');
        $this->db->order_by('scores', 'DESC');
        $this->db->group_by('BaseTbl.userID');  
        $this->db->limit(10);  
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
    function badgeListing()
    {
        $this->db->select('');
        $this->db->from('tbl_badges as  BaseTbl'); 
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


   
}

  