<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if ($this->session->userdata('Level')!= 'Admin'){
            redirect('auth');
        }
    }
    public function index(){
        $data = [
            'title' => 'Halaman Pendaftaran'
        ];
        $data1 = [
            'header' => 'Pendaftaran Mahasiswa'
        ];
        $this->load->view('template/header', $data);
        $this->load->view('pendaftaran/index', $data1);
    }
}