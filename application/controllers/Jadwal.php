<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_jadwal');
        $this->load->model('M_kursus');
        if ($this->session->userdata('Status')!= 'sudahLogin'){
            redirect('auth');
        }
    }
    public function index(){
        $data = [
            'title' => 'Halaman Jadwal'
        ];
        $jadwal = $this->M_jadwal->get_jadwal();
        $kursus = $this->M_kursus->get_kursus();
        $datadb['jadwal'] = $jadwal;
        $datadb['kursus'] = $kursus;
        // $data_db = $jadwal, $kursus;
        // var_dump($jadwal) or die;
        $this->load->view('template/header', $data);
        $this->load->view('jadwal/index', $datadb);
    }
    public function tambah(){
        if($this->input->post()){
            $data = array(
                'id_kursus' => $this->input->post('kursus'),
                'waktu' => $this->input->post('waktu')
            );
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil ditambahkan!</div>');
        $id = $this->M_jadwal->tambah_jadwal($data);
        redirect('jadwal/', 'refresh');
    }
    public function edit($id){
        $data = [
            'title' => 'Halaman Edit Jadwal'
        ];

        $jadwal['record'] = $this->M_jadwal->get_data_by_id($id);
        $this->load->view('template/header', $data);
        $this->load->view('jadwal/edit', $jadwal);
    }
    public function update($id){
        
    }
}