<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Absence_model extends CI_Model
{



    
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function absenceListing($reunionID)
    {
        $this->db->select('BaseTbl.absenceId , BaseTbl.reunionId , BaseTbl.userID , Users.name , Users.avatar , BaseTbl.DateAbsence , BaseTbl.etat ');
        $this->db->from('tbl_absence as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userID', 'LEFT');
        $this->db->where('BaseTbl.reunionId =',$reunionID)  ; 
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNew($absenceInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_absence', $absenceInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


   
    
 
    

    
   
}

