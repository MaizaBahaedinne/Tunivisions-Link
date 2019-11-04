<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Finance_model extends CI_Model
{



    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function financeInfo($bilan)
    {
        $this->db->select('financeid, createdDate, description_Produit , produit , charge , description_Charge , createdBy');
        $this->db->from('tbl_finance');
        $this->db->where('financeid', $bilan);
        $query = $this->db->get();
        
        return $query->row();
    }


/**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function financeInfostat($clubID)
    {
        $this->db->select(' sum(produit) as produits , sum(charge) as charges , createdDate ');
        $this->db->from('tbl_finance');
        $this->db->where('clubID', $clubID);
        
        $query = $this->db->get();
           
        return $query->row();
      

    }


    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function financeListing($clubID)
    {
         $this->db->select('BaseTbl.financeid,BaseTbl.titre ,BaseTbl.createdDate, BaseTbl.description_Produit , BaseTbl.produit , BaseTbl.charge , BaseTbl.description_Charge , Users.name');
        $this->db->from('tbl_finance as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.clubID','left');
        $this->db->join('tbl_users as Users', 'Users.userID = BaseTbl.createdBy','left');
        $this->db->where('Clubs.clubID', $clubID);    
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
    function financeListingF()
    {
         $this->db->select('BaseTbl.financeid,BaseTbl.titre ,BaseTbl.createdDate, sum(BaseTbl.produit) as produits , sum(BaseTbl.charge) as charges , Users.name , Clubs.name  as clubName  ');
        $this->db->from('tbl_finance as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.clubID','left');
        $this->db->join('tbl_users as Users', 'Users.userID = BaseTbl.createdBy','left'); 
        $this->db->order_by('BaseTbl.createdDate','DESC'); 
        $this->db->group_by('BaseTbl.clubID'); 
          
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNew($financeInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_finance', $financeInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


  
    
 
    

    
   
}

  