<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User2ctrl extends CI_Controller {
	 public function __construct()
       {
            parent::__construct();

              	//migration
            	$this->load->library('migration');

				if ( ! $this->migration->current())
				{
					show_error($this->migration->error_string());
				}
				//migration


				
            	$this->load->database();
            	$this->load->model('User2model');
            	$this->load->library('user2class');

          
            
       }
	public function index()
	{
		$data=$this->Usermodel->getUser();
		echo json_encode($data);
	}
	public function all()
	{
		$resp=array();
		$data=$this->User2model->all();
		echo json_encode($this->user2class->tranAll($data));

	}
	public function one($id)
	{
		echo json_encode($this->User2model->one($id));		
	}
	public function bsave()
	{
		$data=$this->user2class->rtran($this->input->get());
		$data['createAt']= date("Y-m-d H:i:s");
		echo json_encode($this->User2model->bsave($data));
	}
	public function bput($id)
	{
		$data=$this->user2class->rtran($this->input->get());
		$data['updateAt']= date("Y-m-d H:i:s");
		echo json_encode($this->User2model->bput($id,$data));
		//echo json_encode($this->Usermodel->bsave($data));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */