<?php
class Usermodel extends  CI_Model 
{
	   function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
     function getUser()
    {
    	$query = $this->db->query('SELECT * FROM emp');
    	return $query->result();
    }
}