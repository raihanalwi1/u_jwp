<?php
class M_pendaftaran extends CI_model{
    public function get_pendaftaran(){
        $this->db->select('pendaftaran.npm, mahasiswa.kelas, mahasiswa.nama_mhs, kursus.nama_kursus, jadwal.waktu, pendaftaran.krs, pendaftaran.status');
        $this->db->from('pendaftaran');
        $this->db->join('jadwal', 'pendaftaran.id_jadwal = jadwal.id_jadwal');
        $this->db->join('kursus', 'jadwal.id_kursus = kursus.id_kursus');
        $this->db->join('mahasiswa', 'pendaftaran.npm = mahasiswa.npm');
        // $query = $this->db->get('pendaftaran');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_status($status){
        $this->db->select('pendaftaran.npm, mahasiswa.kelas, mahasiswa.nama_mhs, kursus.nama_kursus, jadwal.waktu, pendaftaran.krs, pendaftaran.status');
        $this->db->join('jadwal', 'pendaftaran.id_jadwal = jadwal.id_jadwal');
        $this->db->join('kursus', 'jadwal.id_kursus = kursus.id_kursus');
        $this->db->join('mahasiswa', 'pendaftaran.npm = mahasiswa.npm');
        $this->db->where('pendaftaran.status =',$status);
        // var_dump($status) or die;
        $query = $this->db->get('pendaftaran');

        return $query->result();
    }
    public function tambah_daftar($data){
        $this->db->insert('pendaftaran', $data);
        return $this->db->insert_id();
    }

}