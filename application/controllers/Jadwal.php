<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_jadwal');
        $this->load->model('M_kursus');
        $this->load->model('M_pendaftaran');
        // if ($this->session->userdata('Status')!= 'sudahLogin'){
        //     redirect('auth');
        // }
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
        if ($this->session->userdata('Level')!= 'Admin'){
            redirect('auth');
        }
        $data = [
            'title' => 'Halaman Edit Jadwal'
        ];

        $jadwal['record'] = $this->M_jadwal->get_data_by_id($id);
        $this->load->view('template/header', $data);
        $this->load->view('jadwal/edit', $jadwal);
    }
    public function update($id){
        $data = array(
            'id_kursus' => $this->input->post('id'),
            'waktu' => $this->input->post('waktu')
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berhasil di ubah!</div>');
        $data['record'] = $this->M_jadwal->update_jadwal($id, $data);
        redirect('jadwal/', 'refresh');
    }
    public function hapus($id){
        $this->session->set_flashdata('pesan', '<div class="alert alert-success"> Data berhasil dihapus! </div>');
        $data = $this->M_jadwal->hapus_jadwal($id);
        redirect('jadwal', 'refresh');
    }
    public function daftar($id){
        $data = ['title' => 'Halaman Daftar Kursus' ];
        $jadwal['record'] = $this->M_jadwal->get_data_by_id($id);
        $this->load->view('template/header', $data);
        $this->load->view('jadwal/daftar/index', $jadwal);
    }
    public function do_upload()
    {
        $data = array(
            'id_jadwal' => $this->input->post('id_jdwl'),
            'npm' => $this->input->post('npm'),
            'status' => 'Menunggu Persetujuan'
        );
        $config['upload_path']          =  './assets/upload/';
        $config['allowed_types']        = 'pdf';
        $config['file_name']            = date("dmy") . "_" . $data['npm'].'_KRS';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('krs'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('jadwal/daftar', $error);
        }
        else
        {
            $upload_data = $this->upload->data();
            $data['krs'] = $upload_data['file_name'];
            $this->M_pendaftaran->tambah_daftar($data);
            redirect('jadwal/', 'refresh');
        }

    }
}