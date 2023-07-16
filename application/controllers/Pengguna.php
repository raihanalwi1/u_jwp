<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_pengguna');
        if ($this->session->userdata('Level')!= 'Admin'){
                redirect('auth');
        }
    }
    public function index(){
        $data = [
            'title' => 'Halaman Pengguna'
        ];
        $data['pengguna'] = $this->M_pengguna->get_pengguna();
        $this->load->view('template/header', $data);
        $this->load->view('pengguna/index');
    }
    public function tambah(){
        if($this->input->post()){
            $data = array(
                'nama_user' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'telepon' => $this->input->post('telp'),
                'password' => $this->input->post('password'),
                'level' => 'Mahasiswa'
            );
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil ditambahkan!</div>');
            $id = $this->M_pengguna->tambah_pengguna($data);
            redirect('pengguna/', 'refresh');
        }

    }
    public function edit($id){
        $data = [
            'title' => 'Halaman edit Pengguna'
        ];
        $pengguna['record'] = $this->M_pengguna->get_data_by_id($id);
        $this->load->view('template/header', $data);
        $this->load->view('pengguna/edit', $pengguna);
    }
    public function update($id){
        $data = array(
            'nama_user' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'telepon' => $this->input->post('telp'),
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil di ubah!</div>');
        $data['pengguna'] = $this->M_pengguna->update_pengguna($id, $data);
        redirect('pengguna/');
    }
    public function hapus($id){
        $this->session->set_flashdata('pesan', '<div class="alert alert-success"> Data berhasil dihapus!</div>');
        $data = $this->M_pengguna->hapus_pengguna($id);
        redirect('pengguna/', 'refresh');
    }
} 