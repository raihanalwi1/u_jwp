<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        // if ($this->session->userdata('Status')!= 'sudahLogin'){
        //     redirect('auth');
        // }
    }
	public function index()
	{
        $data = [
            'title' => 'Universitas Jewepe'
        ];
		$this->load->view('template/header', $data);
		$this->load->view('v_home');
	}
}
