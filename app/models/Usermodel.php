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
        $data=array();
        $query = $this->db->query('SELECT * FROM emp');
    	$data["data"]=$this->tranAll($query->result());
        $query = $this->db->query('SELECT COUNT(id) as "all" from emp');
        $data["page"]=$query->result();

        /*$data=$this->input->get();
        if(!$data)
        {
            $data["total_rows"]=200;
            $data['per_page']=5;
        }
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/myApp/index.php/myIndex/all';
        $config['total_rows'] =$data["total_rows"];
        $config['per_page'] = $data['per_page']; 

        $this->pagination->initialize($config); 
        echo $this->pagination->create_links();*/
         /*$data["page"]=$this->pagination->create_links();
         */
         return $data;

    }
     public function one($id)
    {
        $data=array();
        $query = $this->db->query("SELECT *FROM emp WHERE id=".$id);
        $data["data"]=$this->tran($query->result()[0]);
        $data["success"]=TRUE;        
        return $data;
        //return array("data"=>$this->tran($data[0]));
    }

    /* transformer */
    public function tranAll($data)
    {
        $temp=array();
        foreach ($data as $value) {
            $temp[]= $this->tran($value);
        }
        return $temp;
    }
    public function tran($data)
    {
        return [
        "ID"=> $data->id,
        "NAME"=>$data->name,
        "SAL"=>$data->sal,
        ];

    }
}