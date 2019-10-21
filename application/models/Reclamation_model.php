<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Reclamation_model extends CI_Model
{



    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function reclamationListing()
    {
        $this->db->select('BaseTbl.reclamId , BaseTbl.Sujet , BaseTbl.Text ,BaseTbl.createdDate , BaseTbl.createdBy , BaseTbl.staut , Users.name as faitpar , Users.avatar , Clubs.name as clubName ');
        $this->db->from('tbl_reclamation as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.createdBy','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.clubId','left');


        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


     function addNewReclamation($reclamtionInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_reclamation', $reclamtionInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    


   
}

  