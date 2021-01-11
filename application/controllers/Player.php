<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_game');
		$this->load->model('m_player');
	}
	
	public function index() {
		$this->load->view('v_home.php', $lsession);
	}
    
    function show_players() {
		$lsession['game'] = $this->m_game->get_games()->result();
		$lsession['players'] = $this->m_player->get_players()->result();
		$this->load->view('v_home.php', $lsession);
	}

	public function redirecting()
	{
        $lsession['user'] = $this->db->get_where('player', ['username' => $this->session->userdata('username')])->row_array();

		if(!$this->session->userdata('logged_in')) {
            redirect('Welcome');
        } else if($lsession['user']['status'] != 1) {
            redirect('Welcome/error_login/');
        }
        
	}
	
}

?>