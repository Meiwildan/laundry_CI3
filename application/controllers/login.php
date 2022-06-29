<?php

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard_farrel');
    }
    public function index()
    {
        
        $isi['content'] = 'backend/home_farrel';
        $isi['judul'] = 'Dashboard';
        $isi['total_konsumen'] = $this->m_dashboard_farrel->total_konsumen();
        $isi['transaksi_baru'] = $this->m_dashboard_farrel->transaksi_baru();
        $isi['total_transaksi'] = $this->m_dashboard_farrel->total_transaksi();
        $this->load->view('backend/dashboard_farrels', $isi);
    }
    public function logout()
    {
        $this->load->view('backend/login_farrel');
    }
}