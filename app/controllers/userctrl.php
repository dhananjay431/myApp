<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userctrl extends CI_Controller {
	 public function __construct()
       {
            parent::__construct();
            	$this->load->database();
            	$this->load->model('Usermodel');
            	$this->load->library('userclass');
            
       }
	public function index()
	{
		$data=$this->Usermodel->getUser();
		echo json_encode($data);
	}
	public function all()
	{
		$resp=array();
		$data=$this->Usermodel->all();
		echo json_encode($this->userclass->tranAll($data));

	}
	public function one($id)
	{
		echo json_encode($this->Usermodel->one($id));		
	}
	public function url()
	{
		$a1=array("url"=>$this->load->helper('url'),
		"base_url"=>$this->config->item('base_url'));
		echo json_encode($a1);
	}
	public function bsave()
	{
		$data=$this->userclass->rtran($this->input->get());
		echo json_encode($this->Usermodel->bsave($data));
	}
	public function bput($id)
	{
		$data=$this->userclass->rtran($this->input->get());
		echo json_encode($this->Usermodel->bput($id,$data));
		//echo json_encode($this->Usermodel->bsave($data));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */