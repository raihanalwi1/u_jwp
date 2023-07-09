<?php 
class M_jadwal extends CI_model{
    public function get_jadwal(){
        $query = $this->db->get('jadwal');
        return $query->result();
    }
}