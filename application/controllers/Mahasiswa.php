<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_mahasiswa');
        if ($this->session->userdata('Level')!= 'Admin'){
            redirect('auth');
        }
    }
    public function index(){
        $data = [
            'title' => 'Halaman Mahasiswa'
        ];
        $mahasiswa['mahasiswa'] = $this->M_mahasiswa->get_mahasiswa();
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $mahasiswa);
    }
    public function tambah(){
        if($this->input->post()){
            $data = array(
                'npm' => $this->input->post('npm'),
                'kelas' => $this->input->post('kelas'),
                'nama' => $this->input->post('nama')
            );
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil ditambahkan!</div>');
            $id = $this->M_mahasiswa->tambah_mahasiswa($data);
            redirect('mahasiswa/', 'refresh');
        }
    }
    public function edit($id){
        if ($this->session->userdata('Level')!= 'Admin'){
            redirect('auth');
        }
        $data = [
            'title' => 'Halaman Edit Mahasiswa'
        ];
        $mahasiswa['record'] = $this->M_mahasiswa->get_data_by_id($id);
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/edit', $mahasiswa);
       
    }
    public function update($id){
        $data = array(
            'npm' => $this->input->post('npm'),
            'kelas' => $this->input->post('kelas'),
            'nama' => $this->input->post('nama')
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil di ubah!</div>');
        $data['record'] = $this->M_mahasiswa->update_mahasiswa($id, $data);
        redirect('mahasiswa/', 'refresh');
    }
    
    public function hapus($id){
        $this->session->set_flashdata('pesan', '<div class="alert alert-success"> Data berhasil dihapus! </div>');
        $data = $this->M_mahasiswa->hapus_mahasiswa($id);
        redirect('mahasiswa/', 'refresh');
    }
}