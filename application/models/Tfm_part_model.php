<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Tfm_model extends CI_Model
{

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartListing()
    {
        $this->db->select(' BaseTbl.id , BaseTbl.name , Clubs.name cluName ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->from('BaseTbl.tfmId = ', 6 );
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->order_by('BaseTbl.dateInscrip','DESC'); 
           
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



 





  
          
    

}

