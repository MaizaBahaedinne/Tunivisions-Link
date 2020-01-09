<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Club_model extends CI_Model
{


     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function clubListingCount()
    {
        $this->db->select('BaseTbl.clubID , BaseTbl.name , BaseTbl.birthday , BaseTbl.city ,BaseTbl.email , BaseTbl.is_Actif ');
        $this->db->from('tbl_club as BaseTbl');
           
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function clubListing()
    {
        $this->db->select('BaseTbl.clubID , BaseTbl.name , BaseTbl.birthday , BaseTbl.city ,BaseTbl.email , BaseTbl.is_Actif , Users.name P , Users.avatar , Users.userId , Users.isDeleted  ,count(Users1.userId) members  , BaseTbl.charte, BaseTbl.facebook ');
        $this->db->from('tbl_club as BaseTbl');
   
       $this->db->join('tbl_users as Users', 'Users.ClubID = BaseTbl.clubID', 'LEFT');
       $this->db->join('tbl_users as Users1', 'Users1.ClubID = BaseTbl.clubID', 'LEFT') ; 
        $this->db->where('Users.roleId = ','1') ;
        $this->db->where('Users1.isDeleted = ','0') ;
       $this->db->group_by('BaseTbl.clubId') ;
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


/**
     * This function used to get user information by id with role
     * @param number $userId : This is user id
     * @return aray $result : This is user information
     */
    function getClubInfo($clubID)
    {
        $this->db->select('BaseTbl.clubID , BaseTbl.name , BaseTbl.birthday , BaseTbl.city ,BaseTbl.email ,BaseTbl.facebook , BaseTbl.is_Actif , BaseTbl.charte ' );
        $this->db->from('tbl_club as BaseTbl');
        $this->db->where('BaseTbl.clubID', $clubID);
        $query = $this->db->get();
        
        return $query->row();
    }

     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function BureauListing($clubID)
    {
        $this->db->select(' Users.userId , Users.name as Tname , Users.cellule , Users.avatar , Role.role , Users.cellule   ');
            $this->db->from('tbl_users as Users'); 
            $this->db->join('tbl_roles as Role ', 'Users.roleId = Role.roleId', 'LEFT');
           $this->db->where('Users.roleId  IN (6,2,1,4,3) AND `ClubID` = ',$clubID) ;
       

        $this->db->order_by('Users.roleId', 'ASC') ;
        
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
    function editClub($clubInfo, $clubID)
    {
        $this->db->where('ClubID', $clubID);
        $this->db->update('tbl_club', $clubInfo);
        
        return TRUE;
    }

   
}

  