<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('m_game');
		$this->load->model('m_account');

		$this->check_status();
	}

	public function index()
	{
		$this->home();
	}

	function check_status() {
		if($this->session->userdata("username")) {
			if($this->session->userdata("status") != 1 ) {
				redirect('index.php/account/do_logout');
			}
		}
	}

	public function download($game_id) {
		$lsession['games'] = $this->m_game->get_games()->result();
		$lsession['game_id'] = $game_id;
		$game['game'] = $this->m_game->get_game($game_id)->row_array();
		$ori = $game['game']['game_description'];
		$game['game']['game_description'] = str_replace("\n","<br>", $ori);
		
		$this->load->view('v_sidebar', $lsession);
		$this->load->view('v_navbar', $lsession['game_id']);
		$this->load->view('v_download', $game['game']);
		$this->load->view('v_ending');
	}

	public function home() {
		redirect(base_url("index.php/welcome/download/1"));
	}

	function login() {

		if($this->session->userdata("status") > 0) {
			redirect(base_url("index.php/welcome"));
		}

		$this->form_validation->set_rules('lusername', 'Username', 'required|trim');
		$this->form_validation->set_rules('lpassword', 'Password', 'required|trim');

		if($this->form_validation->run() == false) {
			$lsession['games'] = $this->m_game->get_games()->result();
			$this->load->view('v_sidebar', $lsession);
			$this->load->view('v_login');
		} else {
			$username = $this->input->post('lusername');
			$password = md5($this->input->post('lpassword'));
			$where = array(
				'username' => $username,
				'password' => $password
				);
				
			$data = $this->m_account->check_login($where)->row_array();

			if($data) {
				
				switch($data['status']) {
					case 0:
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Incorrect username or password.</div>');
						redirect($this->uri->uri_string());
						break;
					case 1:

						$data_session = array(
							'username' => $username,
							'status' => $data['status']
						);
						
						$this->session->set_userdata($data_session);
						
						redirect(base_url("index.php/welcome"));

						break;
					case 2:
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your account has not been activated. Please check your email.</div>');
						redirect($this->uri->uri_string());
						break;
					default:
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your account has been banned for some reason. You are not allowed to access your account.</div>');
						redirect($this->uri->uri_string());
						break;
				}
				
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Incorrect username or password.</div>');
				redirect($this->uri->uri_string());
			}
		}
	}

	public function forgotpass() {
		$lsession['games'] = $this->m_game->get_games()->result();
		$this->load->view('v_sidebar', $lsession);
		$this->load->view('v_forgot');	
	}

	function register() {

		if($this->session->userdata("status") > 0) {
			redirect(base_url("index.php/welcome"));
		}

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[player.email]', ['is_unique' => 'Email already registered']);
		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[6]|is_unique[player.username]', ['min_length' => 'Username too short', 'is_unique' => 'Username too short']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]', ['min_length' => 'Password too short']);
		$this->form_validation->set_rules('repassword', 'Repassword', 'required|trim|matches[password]', ["matches" => "Repeated password doesn't match with password"]);
	 
		if($this->form_validation->run() == false) {
			$lsession['games'] = $this->m_game->get_games()->result();
			$this->load->view('v_sidebar', $lsession);
			$this->load->view('v_register');
		} else {

			$email = htmlspecialchars($this->input->post('email'), true);
			$username = htmlspecialchars($this->input->post('username'), true);
			$password = md5($this->input->post('password'));
			$data = array(
				'email' => $email,
				'username' => $username,
				'password' => $password
            );
			
			$this->m_account->register_account($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account successfuly created! Please check your email to activate your account.</div>');
			redirect(base_url('index.php/welcome/login'));
		
		}
	}

	function changeprofile() {

		if($this->session->userdata("status") != 1) {
			redirect(base_url("index.php/welcome"));
		}

		$lsession['profile'] = $this->m_account->get_player($this->session->userdata("username"))->result();

		// $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[player.email]', ['is_unique' => 'Email already registered']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]', ['min_length' => 'Password too short']);
		$this->form_validation->set_rules('repassword', 'Repassword', 'required|trim|matches[password]', ["matches" => "Repeated password doesn't match with password"]);
	 
		if($this->form_validation->run() == false) {
			$lsession['games'] = $this->m_game->get_games()->result();
			$this->load->view('v_sidebar', $lsession);
			$this->load->view('v_changeprofile', $lsession['profile']);
		} else {
			// $email = htmlspecialchars($this->input->post('email'), true);
			$password = md5($this->input->post('password'));
			$data = array(
				'password' => $password
            );
			
			$this->m_account->update_account($this->session->userdata("username"), $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been updated!</div>');
			redirect(base_url('index.php/welcome/profile'));
		
		}
	}

	public function profile() {
		if($this->session->userdata("status")) {
			if($this->session->userdata("status") == 1) {
				$lsession['games'] = $this->m_game->get_games()->result();
				$lsession['profile'] = $this->m_account->get_player($this->session->userdata("username"))->result();
				
				$this->load->view('v_sidebar', $lsession);
				$this->load->view('v_profile', $lsession['profile']);
			}
		} else {
			$this->login();
		}
	}

	public function profilepicture() {
		
		$this->load->helper("file");

		$lsession['profile'] = $this->m_account->get_player($this->session->userdata("username"))->result();

		$config['upload_path']          = 'images/profile/';
		$config['allowed_types']        = 'png';
		$config['overwrite']			= TRUE;
		$config['max_size']             = 2000;
		$config['max_width']            = 1024;
		$config['max_height']           = 1024;
		$config['file_name']			= 'profile_' . $lsession['profile'][0]->player_id.'.png';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
	
        if ($this->upload->do_upload('newimg')) {
			$this->resizephoto($lsession['profile'][0]->player_id);
            redirect('welcome/profile');
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
            $this->message('Change Profile Picture Failed', $error);
        }
		
	}

	function resizephoto($id_user)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'images/profile/' . $id_user . '.png';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 240;
        $config['height']       = 240;

        $this->load->library('image_lib', $config);

        $this->image_lib->resize();
    }

	public function banlist($game_id) {
		$lsession['games'] = $this->m_game->get_games()->result();
		$lsession['game_id'] = $game_id;
		$lsession['ban_list'] = $this->m_account->get_ban_list($game_id)->result();
		$this->load->view('v_sidebar', $lsession);
		$this->load->view('v_navbar', $lsession['game_id']);
		$this->load->view('v_banlist', $lsession);
		$this->load->view('v_ending');
	}
	
	public function news($game_id) {
		$lsession['games'] = $this->m_game->get_games()->result();
		$lsession['game_id'] = $game_id;
		
		$where_news = array(
			'game_id' => $game_id,
			'news_status' => 1
		);

		$lsession['news'] = $this->m_game->get_news($where_news)->result();
		$this->load->view('v_sidebar', $lsession);
		$this->load->view('v_navbar', $lsession['game_id']);
		$this->load->view('v_news', $lsession);
		$this->load->view('v_ending');
	}

	public function message($title = "404", $msg = "We're sorry, but we can't find what you are looking for") {
		$lsession['games'] = $this->m_game->get_games()->result();
		$lsession['msg'] = array('title' => $title, 'msg' => $msg);
		$this->load->view('v_sidebar', $lsession);
		$this->load->view('v_info_msg', $lsession);
	}

}

?>