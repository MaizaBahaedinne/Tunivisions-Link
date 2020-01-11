<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Ressource_model extends CI_Model
{





    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewRessource($ressourceInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_ressource', $ressourceInfo);
        
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
    function editRessource($ressourceInfo, $ressourceId)
    {
        $this->db->where('ressourceId', $ressourceId);
        $this->db->update('tbl_ressource', $ressourceInfo);
        
        return TRUE;
    }



    /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function ressourceListingByProject($projectID)
    {
         $this->db->select('BaseTbl.ressourceID , BaseTbl.userID , Users.name  , BaseTbl.score ,  Users.avatar ,  Users.userId');
        $this->db->from('tbl_ressource as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userID', 'LEFT');
        $this->db->where('BaseTbl.projectID =', $projectID );
        $this->db->order_by('BaseTbl.score DESC  ' );

        
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



     /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function ressourceListingBUser($UserId)
    {
         $this->db->select('BaseTbl.ressourceID , BaseTbl.userID , Users.name  , BaseTbl.score ,  Users.avatar ,  Users.userId , Project.titre , Badges.name badge , Badges.code ');
        $this->db->from('tbl_ressource as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userID', 'LEFT');
        $this->db->join('tbl_project as Project', 'Project.projectId = BaseTbl.projectID', 'LEFT');
        $this->db->join('tbl_badges as Badges', 'Badges.badgeId = BaseTbl.badgeId', 'LEFT');
        $this->db->where('BaseTbl.UserId =', $UserId );
        $this->db->where('BaseTbl.badgeId !=', 0 );
        $this->db->order_by('BaseTbl.score DESC  ' );

        
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


   
}

  