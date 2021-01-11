<?php 
 
class User extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/account"));
		}
	}
 
	function index(){
		$this->load->view('v_sidebar.html');
		$this->load->view('v_navbar.html');
		$this->load->view('v_landing.html');
	}
}