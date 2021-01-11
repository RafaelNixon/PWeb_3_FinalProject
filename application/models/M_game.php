<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_game extends CI_Model {

    function get_games() {
        return $this->db->get('game');
    }

    function get_game($game_id) {
        return $this->db->get_where('game', ['game_id' => $game_id]);
    }

    function get_news($where) {
        return $this->db->from('news')->where($where)->order_by('news_published', 'DESC')->get();
    }

}
