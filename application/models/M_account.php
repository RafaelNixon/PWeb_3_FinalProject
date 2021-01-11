<?php 
 
class M_account extends CI_Model {

	function check_login($where){		
		return $this->db->get_where('player', $where);
	}

	function register_account($data){
		$this->db->insert('player', $data);
	}

	function update_account($username, $data){
		$this->db->where('player.username', $username);
		$this->db->update('player', $data);
	}

	function get_ban_list($game_id) {
		// return $this->db->get(['banned', 'player'], ['player_id' => 'ban_id_player', 'ban_game' => $game_id]);
		//return $this->db->select('player.player_id', 'player.username', 'banned.ban_id_player', 'banned.ban_game', 'banned.ban_reason', 'banned.ban_date')->from('player', 'banned')->where(['player.player_id' =>  'banned.ban_id_player'])->get();
		return $this->db->select('p.player_id, p.username, b.*')->from('player p')->join('banned b', 'p.player_id = b.ban_id_player', 'LEFT')->where('b.ban_game = '.$game_id)->order_by('ban_date', 'DESC')->get();
	}

	function get_player($username) {
		return $this->db->select('player_id, username, email, joined, status')->from('player')->where(['username' => $username])->get();
	}
}