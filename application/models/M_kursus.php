<?php 
class M_kursus extends CI_model{
    public function get_kursus(){
        $query = $this->db->get('kursus');
        return $query->result();
    }
    public function tambah_kursus($data){
        $this->db->insert('kursus', $data);
        return $this->db->insert_id();
    }
    public function get_data_by_id($id){
        $query = $this->db->get_where('kursus', array('id_kursus' => $id));
        return $query->row();
    }
    public function update_kursus($id, $data){
        $this->db->where('id_kursus', $id);
        $this->db->update('kursus', $data);
	}
    public function hapus_kursus($id){
        $this->db->where('id_kursus', $id);
        $this->db->delete('kursus');
        return $this->db->affected_rows();
    }

}