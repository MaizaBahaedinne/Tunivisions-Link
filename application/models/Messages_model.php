<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Messages_model extends CI_Model
{



   
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function messageListing($disscussionID)
    {
        $this->db->select('BaseTbl.actuID , BaseTbl.titre , BaseTbl.description , BaseTbl.image , BaseTbl.createdBy , BaseTbl.createdDate , Users.name , Users.userId ');
        $this->db->from('tbl_actu as BaseTbl');
        $this->db->join('tbl_users as Users','Users.UserId = BaseTbl.createdBy');
        $this->db->order_by('BaseTbl.createdDate','DESC'); 
        $this->db->limit(10);      
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNew($actuInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_message', $actuInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


   

    
 
    

    
   
}

