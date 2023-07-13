<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_pendaftaran');
        $this->load->model('M_kursus');
        if ($this->session->userdata('Status') != 'sudahLogin'){
            redirect('auth');
        }
    }
    public function index(){
        $data = [
            'title' => 'Halaman Pendaftaran'
        ];
        // $data1 = [
        //     'header' => 'Pendaftaran Mahasiswa'
        // ];
        $datadb['tes'] = $this->M_pendaftaran->get_pendaftaran();
        $datadb['kursus'] = $this->M_kursus->get_kursus();
        
        $this->load->view('template/header', $data);
        $this->load->view('pendaftaran/index', $datadb);
    }
    public function searchStatus(){
        $data = [
            'title' => 'Halaman Pendaftaran'
        ];
        $status = $this->input->post('status');
        $records['kursus'] = $this->M_kursus->get_kursus();
        $records['tes'] =  $this->M_pendaftaran->get_status($status);
        
        $this->load->view('template/header', $data);
        $this->load->view('pendaftaran/index', $records);
        // var_dump($records) or die;
        // foreach ($records as $record) 
        // {
        //     $status['record'] = $record->status;
        //     echo $record->status;
        // }
        
    }

}