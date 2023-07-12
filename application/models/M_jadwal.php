<?php 
class M_jadwal extends CI_model{
    public function get_jadwal(){
        $this->db->select('jadwal.id_kursus, id_jadwal, waktu, kursus.nama');
        $this->db->from('jadwal');
        $this->db->join('kursus', 'jadwal.id_kursus = kursus.id_kursus', 'left');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambah_jadwal($data){
        $this->db->insert('jadwal', $data);
        return $this->db->insert_id();
    }
    public function get_data_by_id($id){
        $this->db->join('kursus', 'jadwal.id_kursus = kursus.id_kursus', 'left');
        $query = $this->db->get_where('jadwal', array('id_jadwal' => $id));
        return $query->row();
    }
    public function update_jadwal($id, $data){
        $this->db->where('id_jadwal', $id);
        $this->db->update('jadwal', $data);
    }
    public function hapus_jadwal($id){
        $this->db->where('id_jadwal', $id);
        $this->db->delete('jadwal');
        return $this->db->affected_rows();
    }
}