<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyIndex extends CI_Controller {
	public function index()
	{
		$this->load->database();
		$this->load->model('Usermodel');
		$data=$this->Usermodel->getUser();
		echo json_encode($data);
	}
	public function show()
	{
		$this->load->database();
		$this->load->model('Usermodel');
		echo json_encode($this->Usermodel->getUser());
	}
	public function show2($id)
	{	
		echo json_encode($id);
	}
	public function url()
	{
		$a1=array("url"=>$this->load->helper('url'),
		"base_url"=>$this->config->item('base_url'));
		echo json_encode($a1);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */