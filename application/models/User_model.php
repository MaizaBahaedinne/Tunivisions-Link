<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User_model extends CI_Model
{
        
    /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function userListing($userID)
    {
         $this->db->select('BaseTbl.userId, BaseTbl.gouvernorat , BaseTbl.delegation , BaseTbl.CLubID as club , BaseTbl.cin, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role , Clubs.name as ClubName , Clubs.city as ClubCity ,BaseTbl.sexe ,BaseTbl.isDeleted , BaseTbl.avatar , BaseTbl.cellule , Paren.name parrain  ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
         $this->db->join('tbl_users as Paren', 'Paren.userId = BaseTbl.createdBy', 'LEFT');
       
        $this->db->where('BaseTbl.userId !=', $userID );
        $this->db->order_by('BaseTbl.userId', 'DESC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


    /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function userListingApprouve($searchText = '', $userId )
    {
         $this->db->select('BaseTbl.userId, BaseTbl.gouvernorat , BaseTbl.delegation , BaseTbl.CLubID as club , BaseTbl.cin, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role , Clubs.name as ClubName , Clubs.city as ClubCity ,BaseTbl.sexe ,BaseTbl.isDeleted , BaseTbl.avatar , BaseTbl.cellule , Freinds.id fId ,  Freinds.id_tunSender  , Freinds.id_tunReciver , Freinds.statut ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->join('tbl_freinds as Freinds', 'Freinds.id_tunReciver = BaseTbl.userId and  Freinds.id_tunReciver =  '.$userId , 'LEFT');
            if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        
        $this->db->where('BaseTbl.isDeleted =', 0 );
        $this->db->where('BaseTbl.userId !=', $userId );
        $this->db->order_by('BaseTbl.userId , BaseTbl.roleId ', 'ASC');
        $this->db->limit(50); 
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function userListingApprouveF($searchText = '')
    {
         $this->db->select('BaseTbl.userId, BaseTbl.gouvernorat , BaseTbl.delegation , BaseTbl.CLubID as club , BaseTbl.cin, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role , Clubs.name as ClubName , Clubs.city as ClubCity ,BaseTbl.sexe ,BaseTbl.isDeleted , BaseTbl.avatar , BaseTbl.cellule  ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
            if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        
        $this->db->where('BaseTbl.isDeleted !=', 1 );
        $this->db->where('Clubs.SenJun =', 0 );
        $this->db->order_by('BaseTbl.ClubID', 'ASC');
       
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



     /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function userListingApprouveFJ($searchText = '')
    {
         $this->db->select('BaseTbl.userId, BaseTbl.gouvernorat , BaseTbl.delegation , BaseTbl.CLubID as club , BaseTbl.cin, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role , Clubs.name as ClubName , Clubs.city as ClubCity ,BaseTbl.sexe ,BaseTbl.isDeleted , BaseTbl.avatar , BaseTbl.cellule  ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
            if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        
        $this->db->where('BaseTbl.isDeleted !=', 1 );
        $this->db->where('Clubs.SenJun =', 1 );
        $this->db->order_by('BaseTbl.ClubID', 'ASC');
       
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


     /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function userListingApprouveFA($searchText = '')
    {
         $this->db->select('BaseTbl.userId, BaseTbl.gouvernorat , BaseTbl.delegation , BaseTbl.CLubID as club , BaseTbl.cin, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role , Clubs.name as ClubName , Clubs.city as ClubCity ,BaseTbl.sexe ,BaseTbl.isDeleted , BaseTbl.avatar , BaseTbl.cellule  ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
            if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        
        $this->db->where('BaseTbl.isDeleted !=', 1 );
        $this->db->where('Clubs.clubID =', 2 );
        $this->db->order_by('BaseTbl.ClubID', 'ASC');
       
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }







/**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function userListing2($searchText)
    {
         $this->db->select('BaseTbl.userId, BaseTbl.gouvernorat , BaseTbl.delegation , BaseTbl.CLubID as club , BaseTbl.cin, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role , Clubs.name as ClubName , Clubs.city as ClubCity ,BaseTbl.sexe ,BaseTbl.isDeleted , BaseTbl.avatar , BaseTbl.cellule  ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        
        $this->db->where('BaseTbl.isDeleted =', 0);
        $this->db->order_by('BaseTbl.userId', 'ASC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function userListingByclub($userID,$clubID)
    {
         $this->db->select('BaseTbl.userId, BaseTbl.gouvernorat , BaseTbl.delegation , BaseTbl.CLubID as club , BaseTbl.cin, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role , BaseTbl.cellule , Clubs.name as ClubName , Clubs.city as ClubCity ,BaseTbl.sexe ,BaseTbl.isDeleted , BaseTbl.avatar  ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');

        $this->db->where('BaseTbl.roleId !=', 1);
        $this->db->where('BaseTbl.userId !=', $userID );
        $this->db->where('BaseTbl.CLubID =', $clubID);
        $this->db->where('BaseTbl.isDeleted =', 0);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function userListingByclubToApprouve($userID,$clubID)
    {
         $this->db->select('BaseTbl.userId, BaseTbl.gouvernorat , BaseTbl.delegation , BaseTbl.CLubID as club , BaseTbl.cin, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role , BaseTbl.cellule , Clubs.name as ClubName , Clubs.city as ClubCity ,BaseTbl.sexe ,BaseTbl.isDeleted , BaseTbl.avatar  ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');

        $this->db->where('BaseTbl.roleId !=', 1);
        $this->db->where('BaseTbl.isDeleted =', 1) ;
        $this->db->where('BaseTbl.userId !=', $userID );
        $this->db->where('BaseTbl.CLubID =', $clubID);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



    /**
     * This function is used to get the user listing count
     * @return array $result : This is result
     */
    function userListingByclubINFO($clubID)
    {
         $this->db->select('BaseTbl.userId, BaseTbl.gouvernorat , BaseTbl.delegation , BaseTbl.CLubID as club , BaseTbl.cin, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role , BaseTbl.cellule , Clubs.name as ClubName , Clubs.city as ClubCity ,BaseTbl.sexe ,BaseTbl.isDeleted , BaseTbl.avatar  ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');

        $this->db->where('BaseTbl.CLubID =', $clubID);
        $this->db->limit(5);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    /**
     * This function is used to get the user roles information
     * @return array $result : This is result of the query
     */
    function getUserRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $this->db->where('roleId !=', 2);
        $query = $this->db->get();
        
        return $query->result();
    }

     function getClubs()
        {
            $this->db->select('clubID, name ');
            $this->db->from('tbl_club');
            $this->db->where('clubID !=', 0);
            $query = $this->db->get();
            
            return $query->result();
        }


     function getMembersByCellule($clubID,$cellule)
        {
            $this->db->select('userId, name ');
            $this->db->from('tbl_users');
            $this->db->where("isDeleted", 0);
            $this->db->where('cellule =', $cellule );
            $this->db->where('ClubID =', $clubID );


            $query = $this->db->get();
            
            return $query->result();
        }






    /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $userId : This is user id
     * @return {mixed} $result : This is searched result
     */
    function checkEmailExists($email)
    {
        $this->db->select("name");
        $this->db->from("tbl_users");
        $this->db->where("email", $email);   
      
        $query = $this->db->get();

         return $query->row();
    }


        /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $userId : This is user id
     * @return {mixed} $result : This is searched result
     */
    function checkPasswordExists($email,$cin,$mobile)
    {
        $this->db->select("userId");
        $this->db->from("tbl_users");
        $this->db->where("email =", $email);
        $this->db->where("cin =", $cin);
        $this->db->where("mobile =", $mobile);
 
      
        $query = $this->db->get();

         return $query->row();
    }
    
        /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewUser($userInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_users', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


     /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewLink($linkInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_freinds', $linkInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }




     /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function linkRequest($reciver)
    {
         $this->db->select(' Sender.userId , Sender.name , Sender.avatar ,  BaseTbl.Addeddate , BaseTbl.statut ');
        $this->db->from('tbl_freinds as BaseTbl');
        $this->db->join('tbl_users as Reciver', 'Reciver.userId = BaseTbl.id_tunReciver ' ,'left');
        $this->db->join('tbl_users as Sender', 'Sender.userId = BaseTbl.id_tunSender  '  ,'left');
        $this->db->where('BaseTbl.id_tunReciver = '.$reciver.' AND  BaseTbl.statut = 0 ' ) ; 

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;  
    }
    
    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getUserInfo($userId)
    {
        $this->db->select('userId, name, email, mobile, roleId , avatar');
        $this->db->from('tbl_users');

        $this->db->where('userId', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    
    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editUser($userInfo, $userId)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        
        return TRUE;
    }
    
    
    
    /**
     * This function is used to delete the user information
     * @param number $userId : This is user id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        
        return $this->db->affected_rows();
    }


    /**
     * This function is used to match users password for change password
     * @param number $userId : This is user id
     */
    function matchOldPassword($userId, $oldPassword)
    {
        $this->db->select('userId, password');
        $this->db->where('userId', $userId);        
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_users');
        
        $user = $query->result();

        if(!empty($user)){
            if(verifyHashedPassword($oldPassword, $user[0]->password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
    
    /**
     * This function is used to change users password
     * @param number $userId : This is user id
     * @param array $userInfo : This is user updation info
     */
    function changePassword($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        
        return $this->db->affected_rows();
    }


    /**
     * This function is used to get user login history
     * @param number $userId : This is user id
     */
    function loginHistoryCount($userId, $searchText, $fromDate, $toDate)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.userAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.sessionData LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '".date('Y-m-d', strtotime($fromDate))."'";
            $this->db->where($likeCriteria);
        }
        if(!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '".date('Y-m-d', strtotime($toDate))."'";
            $this->db->where($likeCriteria);
        }
        if($userId >= 1){
            $this->db->where('BaseTbl.userId', $userId);
        }
        $this->db->from('tbl_last_login as BaseTbl');
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    /**
     * This function is used to get user login history
     * @param number $userId : This is user id
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function loginHistory($userId, $searchText, $fromDate, $toDate, $page, $segment)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.userAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        $this->db->from('tbl_last_login as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.sessionData  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '".date('Y-m-d', strtotime($fromDate))."'";
            $this->db->where($likeCriteria);
        }
        if(!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '".date('Y-m-d', strtotime($toDate))."'";
            $this->db->where($likeCriteria);
        }
        if($userId >= 1){
            $this->db->where('BaseTbl.userId', $userId);
        }
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getUserInfoById($userId)
    {
        $this->db->select('userId, name, email, mobile, roleId , avatar , cellule');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $this->db->where('userId', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }

    /**
     * This function used to get user information by id with role
     * @param number $userId : This is user id
     * @return aray $result : This is user information
     */
    function getUserInfoWithRole($userId)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.roleId, Roles.role, BaseTbl.birthday, BaseTbl.gouvernorat, BaseTbl.delegation, BaseTbl.facebook, BaseTbl.instagram, BaseTbl.linkedin , BaseTbl.ClubID , Clubs.name as ClubName ,   BaseTbl.avatar ,  BaseTbl.cellule , BaseTbl.cin , BaseTbl.SA , BaseTbl.createdDtm ');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Roles','Roles.roleId = BaseTbl.roleId');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->where('BaseTbl.userId', $userId);
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        return $query->row();
    }

function bonus (){
        
        $this->db->select('BaseTbl.userId , BaseTbl.roleId');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->where('BaseTbl.createdDtm < ','2019-11-01' );
                
        $query = $this->db->get();
        
        return $query->row();
}


}

  
