<?php
class M_login extends CI_Model{

    public function cek_admin($u, $p){
        return $this->db->get_where('user', array('user_nama'=>$u, 'user_password'=>$p));
    }
}