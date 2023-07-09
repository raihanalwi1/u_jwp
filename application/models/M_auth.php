<?php

class M_auth extends CI_model
{
    public function cekLogin($username, $password){
        return $this->db->get_where('user', ['username'=> $username, 'password'=> $password]);
    }
}