<?php 
 
class Account extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('m_account');
	}
 
	function index(){
		//Nothing
	}

	function request_forgot() {

		$this->load->library('email');

		$this->form_validation->set_rules('email', 'Email', 'required|trim');

		if($this->form_validation->run() == false) {
			redirect(base_url('index.php/welcome/login'));
		} else {
			$email = $this->input->post('email');
			$where = array(
				'email' => $email,
				);
				
			$data = $this->m_account->check_login($where)->row_array();

			if($data) {
			 
				
				$this->email->from('support@savorgame.com', 'SavorGame');
				$this->email->to($email);
				
				$this->email->subject('SavorGame | Forgot Password');
				$this->email->message('Sorry, we cannot perform your request now, but we will add this feature soon ');

				$this->email->send();
				
				$this->message('Request Success', 'Your request has been successfuly sended. Please check your email.'. $res);
				
			} else {
				
				$this->message('Request Error', 'Cannot find account with that email.');
				//redirect(base_url("index.php/welcome/login"));
				//echo "Invalid username and/or password";
			}
		}
	}

	public function message($title = "404", $msg = "We're sorry, but we can't find what you are looking for") {
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('m_game');
		$this->load->model('m_account');
		
		$lsession['games'] = $this->m_game->get_games()->result();
		$lsession['msg'] = array('title' => $title, 'msg' => $msg);
		$this->load->view('v_sidebar', $lsession);
		$this->load->view('v_info_msg', $lsession);
	}
 
	function do_logout(){
		$this->session->sess_destroy();
		redirect(base_url("index.php/welcome"));
	}
}

?>