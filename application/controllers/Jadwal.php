<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_jadwal');
    }
    public function index(){
        $data = [
            'title' => 'Halaman Jadwal'
        ];
        $jadwal['jadwal'] = $this->M_jadwal->get_jadwal();
        $this->load->view('template/header', $data);
        $this->load->view('jadwal/index', $jadwal);
    }
}