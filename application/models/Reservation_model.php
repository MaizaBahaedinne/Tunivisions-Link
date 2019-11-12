<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Reservation_model extends CI_Model
{



    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function reservationListing()
    {
        $this->db->select('BaseTbl.reservationID , BaseTbl.type , BaseTbl.sujet ,BaseTbl.startDate , BaseTbl.inTime  ,BaseTbl.outTime , BaseTbl.nombre , BaseTbl.clubID ,BaseTbl.createDTM   , BaseTbl.Accepted ,  Clubs.name as clubName ');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.clubID','left');
        $this->db->from('tbl_reservation as BaseTbl');
     

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
    function reservationListingAccepeted()
    {
        $this->db->select('BaseTbl.reservationID , BaseTbl.type , BaseTbl.sujet ,BaseTbl.startDate , BaseTbl.inTime  ,BaseTbl.outTime ,  BaseTbl.nombre , BaseTbl.clubID ,BaseTbl.createDTM   , BaseTbl.Accepted , Clubs.name as clubName  ');
        $this->db->from('tbl_reservation as BaseTbl');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = BaseTbl.clubID','left');
        $this->db->where('BaseTbl.Accepted =',1) ;



        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

}