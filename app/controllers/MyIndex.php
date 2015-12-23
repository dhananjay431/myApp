<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyIndex extends CI_Controller {
	public function index()
	{
		$this->load->database();
		$this->load->model('Usermodel');
		return $this->Usermodel->getUser();
		//$this->load->view('welcome_message');
	}
	public function show()
	{
		$this->load->database();
		$this->load->model('Usermodel');
	echo json_encode($this->Usermodel->getUser());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */