<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Tfm_part_model extends CI_Model
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
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');

        $this->db->where('BaseTbl.tfmId =',6);
        $this->db->where('Users.isDeleted =', 0);
        $this->db->order_by('BaseTbl.dateInscrip','DESC');  
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
    function TFMPartListinByclub($clubId)
    {
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        $this->db->where('BaseTbl.tfmId =',6);
        $this->db->where('Users.isDeleted =', 0);
        $this->db->where('Users.clubID =', $clubId);    
        $this->db->order_by('BaseTbl.dateInscrip','DESC');  
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
   function TFMCountByClub()
    {
        $this->db->select('Clubs.name as ClubName ,  Clubs.city , count(Users.userId) as members , (select count(*) form tbl_tfm_part where  ) as autorise ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        
        $this->db->where('BaseTbl.tfmId =',6);
        $this->db->where('Users.isDeleted =', 0);

        $this->db->group_by('Users.clubID ');
        $this->db->order_by('BaseTbl.dateInscrip','DESC');  
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
    function TFMPartConfirmedByCityListing()
    {
        $this->db->select('  Clubs.city , count(BaseTbl.id) as countPart');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');

        $this->db->where('BaseTbl.tfmId =',6);
        $this->db->where('BaseTbl.p_tranch1 =',80);

         $this->db->group_by('Clubs.city');
          $this->db->order_by('countPart DESC');
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
    function TFMPartConfirmedByClubListing()
    {
        $this->db->select('  Clubs.name , count(BaseTbl.id) as countPart');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');

        $this->db->where('BaseTbl.tfmId =',6);
        $this->db->where('BaseTbl.p_tranch1 =',80);

         $this->db->group_by('Clubs.name');
         $this->db->order_by('countPart DESC');

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }
 





  
          
    

}

