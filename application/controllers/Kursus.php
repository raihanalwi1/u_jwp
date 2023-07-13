<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kursus extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_kursus');
        
    }
    public function index(){
        $data = [
            'title' => 'Halaman Kursus'
        ];
        $kursus['kursus'] = $this->M_kursus->get_kursus();
        $this->load->view('template/header', $data);
        $this->load->view('kursus/index', $kursus);
    }
    public function tambah(){
        if($this->input->post()){
            $data = array(
                'nama' => $this->input->post('nama'),
                'keterangan' => $this->input->post('ket'),
                'lama' => $this->input->post('lama')
            );
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil ditambahkan!</div>');
            $id = $this->M_kursus->tambah_kursus($data);
            redirect('kursus/', 'refresh');
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Data Gagal ditambahkan!</div>');

    }
    public function edit($id){
        if ($this->session->userdata('Level')!= 'Admin'){
            redirect('auth');
        }
        $data = [
            'title' => 'Halaman Edit kursus'
        ];
        $kursus['record'] = $this->M_kursus->get_data_by_id($id);
        $this->load->view('template/header', $data);
        $this->load->view('kursus/edit', $kursus);
    }
    public function update($id){
        $data = array(
			'nama'=>$this->input->post('nama'),
			'keterangan'=>$this->input->post('ket'),
			'lama'=>$this->input->post('lama'),
		);
        $data['kursus'] = $this->M_kursus->update_kursus($id, $data);
        redirect('kursus/');
    }
    
    public function hapus($id){
        if ($this->session->userdata('Level')!= 'Admin'){
            redirect('auth');
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil dihapus!</div>');

        $data = $this->M_kursus->hapus_kursus($id);
        redirect('kursus/', 'refresh');
    }
    
}