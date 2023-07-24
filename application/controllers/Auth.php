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

        $cek_admin = $this->M_auth->cekLogin($username, $password);
        $cek_mhs = $this->M_auth->cekLogin_mhs($username, $password);
        $row1 = $cek_admin->row();
        $row2 = $cek_mhs->row();
        $total1 = $cek_admin->num_rows();
        $total2 = $cek_mhs->num_rows();

        if ($total1 > 0){
            $this->session->set_userdata(
                [
                    'Username'=> $row1->username,
                    'Name'=> $row1->nama_user,
                    'Level'=> 'Admin',
                    'Npm' => $row1->npm,
                    'Status'=> 'sudahLogin'
                ]
            );
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Login Berhasil</div>');
            redirect('home','refresh');
        }elseif ($total2 > 0){
            $this->session->set_userdata(
                [
                    'Npm' => $row2->npm,
                    'Kelas' => $row2->kelas,
                    'Level' => 'Mahasiswa',
                    'Name' => $row2->nama_mhs,
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
