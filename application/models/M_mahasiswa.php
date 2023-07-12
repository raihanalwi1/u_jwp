<?php
class M_mahasiswa extends CI_model{
    public function get_mahasiswa(){
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
    public function tambah_mahasiswa($data){
        $this->db->insert('mahasiswa', $data);
        return $this->db->insert_id();
    }
    public function get_data_by_id($id){
        $query = $this->db->get_where('mahasiswa', array('npm'=> $id));
        return $query->row();
    } 
    public function update_mahasiswa($id, $data){
        $this->db->where('npm', $id);
        $this->db->update('mahasiswa', $data);
    }

    public function hapus_mahasiswa($id){
        $this->db->where('npm', $id);
        $this->db->delete('mahasiswa');
        return $this->db->affected_rows();
    }
}