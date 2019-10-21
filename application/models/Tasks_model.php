<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Tasks_model extends CI_Model
{


    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function tasksListing($clubID)
    {
        $this->db->select('BaseTbl.taskid , BaseTbl.Titre , Users.name as affectedby1 , Users1.name as affectedTo1 , BaseTbl.statut , BaseTbl.deadline , Projects.titre as titreP ');
        $this->db->from('tbl_tasks as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.affectedby','left');
        $this->db->join('tbl_users as Users1', 'Users1.userId = BaseTbl.affectedTo','left');
        $this->db->join('tbl_project as Projects', 'Projects.projectId = BaseTbl.projectId','left');
        $this->db->where('Users.clubID = ' , $clubID);     
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
    function myTasksListing($userID)
    {
        $this->db->select('BaseTbl.taskid , BaseTbl.Titre  , BaseTbl.createdDate , BaseTbl.statut , BaseTbl.deadline  ');
        $this->db->from('tbl_tasks as BaseTbl');

        $this->db->where('BaseTbl.affectedTo = ' , $userID);     
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
    function editEvaluation($tasksInfo, $taskId)
    {
        $this->db->where('taskid', $taskId);
        $this->db->update('tbl_tasks', $tasksInfo);
        
        return TRUE;
    }
    
    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewTask($taskInfo)
    {

        $this->db->trans_start();
        $this->db->insert('tbl_tasks', $taskInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
     



   
}

  