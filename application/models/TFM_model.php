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
    function TFMListing()
    {
        $this->db->select('BaseTbl.tfmId , BaseTbl.nom , BaseTbl.dateDebut , BaseTbl.dateFin , BaseTbl.local , BaseTbl.banner , BaseTbl.prix ');
        $this->db->from('tbl_tfm as BaseTbl');
        $this->db->order_by('BaseTbl.dateFin','DESC'); 
           
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }





    
 
    

    
   
}

