<?php

class M_auth extends CI_model
{
    public function cekLogin($username, $password){
        return $this->db->get_where('user', ['username'=> $username, 'password'=> $password]);
    }
    public function cekLogin_mhs($username, $password){
        return $this->db->get_where('mahasiswa', ['npm'=> $username, 'npm'=> $password]);
    }
}