<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	public function index() { 
		$data['content'] = 'dashboard';
  		$this->load->view('template/temp',$data);
		}
}
?>