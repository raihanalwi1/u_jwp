<?php 
class M_pengguna extends CI_model{
    public function get_pengguna(){
        $query = $this->db->get('user');
        return $query->result();
    }
    public function tambah_pengguna($data){
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
    public function get_data_by_id($id){
        $query = $this->db->get_where('user',array('id_user' => $id));
        return $query->row();
    }
    

}