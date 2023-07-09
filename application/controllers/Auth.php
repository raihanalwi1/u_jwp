<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('M_auth');
        
    }
	
	public function index()
	{
		$this->load->view('v_login');
	}
    public function prosesLogin(){
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->M_auth->cekLogin($username, $password);
        $row = $cek->row();
        $total = $cek->num_rows();

        if ($total > 0){
            $this->session->set_userdata(
                [
                    'Username'=> $row->username,
                    'Name'=> $row->nama,
                    'Level'=> $row->level,
                    'Status'=> 'sudahLogin'
                ]
            );
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Login Berhasil</div>');
            redirect('home','refresh');
        }else{
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Login Gagal</div>');
            redirect('auth/','refresh');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/','refresh');
    }
}
