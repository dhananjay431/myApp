<?php
class Usermodel extends  CI_Model 
{
	  public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
     public function all()
    {
        $resp =array();
        $query = $this->db->query('SELECT * FROM emp');
        return $query->result();
    }
     public function one($id)
    {
        $data=array();
        $query = $this->db->query("SELECT *FROM emp WHERE id=".$id);
        $data["data"]=$query->result()[0];

        $data["success"]=TRUE;        
        return $data;
        //return array("data"=>$this->tran($data[0]));
    }
    //insert 
    public function bsave($data)
    {
        $this->db->insert('emp', $data); 
        return $this->one($this->db->insert_id());
    }
    /* transformer */
    

}