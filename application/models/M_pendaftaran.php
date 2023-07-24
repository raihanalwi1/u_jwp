<?php
class M_pendaftaran extends CI_model{
    public function get_pendaftaran(){
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->join('jadwal', 'pendaftaran.id_jadwal = jadwal.id_jadwal', 'inner');
        $this->db->join('mahasiswa', 'pendaftaran.npm = mahasiswa.npm', 'inner');
        // $query = $this->db->get('pendaftaran');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_status($status){
        $this->db->select('*');
        $this->db->join('jadwal', 'pendaftaran.id_jadwal = jadwal.id_jadwal', 'inner');
        $this->db->join('mahasiswa', 'pendaftaran.npm = mahasiswa.npm', 'inner');
        $this->db->like('status',$status);
        // var_dump($status) or die;
        $query = $this->db->get('pendaftaran');

        if($query->num_rows() > 0)
            return $query->result();                
        else
            return FALSE;
        
        // $this->db->like('status', $status);
        // $query = $this->db->get();
    }
    public function tambah_daftar($data){
        $this->db->insert('pendaftaran', $data);
        return $this->db->insert_id();
    }

}