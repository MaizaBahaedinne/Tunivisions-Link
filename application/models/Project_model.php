<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Project_model extends CI_Model
{

    function projectListing()
    {
         $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local ,BaseTbl.banner ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->order_by('BaseTbl.startDate','ASC');
        $this->db->where('NOW() < BaseTbl.endDate ') ;

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function projectListingByClubThisWeek($clubID)
    {
         $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local ,BaseTbl.banner ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->where('Clubs.clubID' , $clubID ) ;
        $this->db->where('  DAY(startDate) - DAY(NOW()) < 7 AND MONTH(startDate) - MONTH(NOW()) = 0 ') ;
        
        $this->db->order_by('BaseTbl.startDate','ASC');

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function projectListingByClubThisMounth($clubID)
    {
         $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local ,BaseTbl.banner ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->where('Clubs.clubID' , $clubID ) ;
        $this->db->where('  DAY(startDate) - DAY(NOW()) < 31') ;
        $this->db->where('  MONTH(startDate) - MONTH(NOW()) = 0') ;
        $this->db->order_by('BaseTbl.startDate','ASC');

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function projectListingByClubPast($clubID)
    {
         $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local ,BaseTbl.banner ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->where('Clubs.clubID = ' , $clubID ) ;
        $this->db->where('  endDate > NOW()') ;

        $this->db->order_by('BaseTbl.startDate','ASC');

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

        function projectListingByType($type,$clubID)
    {
         $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local ,BaseTbl.banner ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->where('Clubs.clubID =' , $clubID ) ;
        $this->db->where('BaseTbl.type =' , $type ) ;
        $this->db->order_by('BaseTbl.startDate','ASC');
        

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }



    function addNewProject($projectInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_project', $projectInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


    function getProjectInfo($projectID)
    {
        $this->db->select('BaseTbl.projectId , BaseTbl.startDate , BaseTbl.endDate , BaseTbl.titre , BaseTbl.type , BaseTbl.cible , Clubs.name as ClubName ,  BaseTbl.prix , BaseTbl.capacite , BaseTbl.description ,  BaseTbl.local ');
        $this->db->from('tbl_project as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.ClubID', 'LEFT');
        $this->db->where('BaseTbl.projectID', $projectID);
        $query = $this->db->get();
        
        return $query->row();
    }

    

}

?>