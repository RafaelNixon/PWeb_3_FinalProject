<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_player extends CI_Model {

    function get_players() {
        return $this->db->get('player');
    }

    

}
