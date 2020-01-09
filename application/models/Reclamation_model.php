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
    function reclamationListing($to)
    {
        $this->db->select('BaseTbl.reclamId , BaseTbl.Sujet , BaseTbl.Text ,BaseTbl.createdDate , BaseTbl.createdBy , BaseTbl.staut , Users.name as faitpar , Users.avatar , Clubs.name as clubName ');
        $this->db->from('tbl_reclamation as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.createdBy','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.clubId','left');
        $this->db->where('BaseTbl.reciver = ',$to) ; 
        $this->db->order_by('BaseTbl.createdDate ','DESC') ;


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
    function waitReclamationListing($to)
    {
        $this->db->select('BaseTbl.reclamId , BaseTbl.Sujet , BaseTbl.Text ,BaseTbl.createdDate , BaseTbl.createdBy , BaseTbl.staut , Users.name as faitpar , Users.avatar , Clubs.name as clubName ');
        $this->db->from('tbl_reclamation as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.createdBy','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.clubId','left');
        $this->db->where('BaseTbl.staut = ','En attend') ;
        $this->db->order_by('BaseTbl.createdDate ','DESC') ;
        $this->db->where('BaseTbl.reciver = ',$to) ; 

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


 /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
    */
    function editReclamation($reclamationInfo, $reclamationId)
    {
        $this->db->where('reclamId', $reclamationId);
        $this->db->update('tbl_reclamation', $reclamationInfo);
        
        return TRUE;
    }

    

    /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $userId : This is user id
     * @return {mixed} $result : This is searched result
     */
    function reclamInfo($reclamationId)
    {
        $this->db->select('BaseTbl.reclamId , BaseTbl.Sujet , BaseTbl.Text ,BaseTbl.createdDate , BaseTbl.createdBy , BaseTbl.staut , BaseTbl.responsedText , BaseTbl.responsedBy , BaseTbl.responsedDate  , Users.name as faitpar , Users.avatar , Clubs.name as clubName , Users2.name as rep , Users2.avatar avatarrep , Clubs2.name as clubNamerep   ');
        $this->db->from('tbl_reclamation as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.createdBy','left');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.clubId','left');  
        $this->db->join('tbl_users as Users2', 'Users2.userId = BaseTbl.responsedBy','left');
        $this->db->join('tbl_club as Clubs2', 'Clubs2.clubID = Users2.clubId','left');  
        $this->db->where('BaseTbl.reclamId =', $reclamationId) ; 
        $query = $this->db->get();

         return $query->row();
    }

   
}

  