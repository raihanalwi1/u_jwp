<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_pengguna');
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
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'telepon' => $this->input->post('telp')
            );
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil ditambahkan!</div>');
            $id = $this->M_pengguna->tambah_pengguna($data);
            redirect('pengguna/', 'refresh');
        }

    }
} 