<?php

class paket_farrel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_paket');
    }
    public function index()
    {
        $isi['content'] = 'backend/paket/v_paket.php';
        $isi['judul'] = 'Daftar Data Paket';
        $isi['data_farrel'] = $this->m_paket->getDataPaketFarrel();
        $this->load->view('backend/dashboard_farrels', $isi);
    }
    public function tambah_paket()
    {
        $isi['content'] = 'backend/paket/t_paket.php';
        $isi['judul'] = 'Form Tambah Paket';
        $isi['kode_paket'] = $this->m_paket->generate_kode_paket_farrel();
        $this->load->view('backend/dashboard_farrels', $isi);
    }
    public function simpan_farrel()
    {
        $data = array(
            'kode_paket' => $this->input->post('kode_paket'),
            'nama_paket' => $this->input->post('nama_paket'),
            'harga_paket' => $this->input->post('harga_paket')
        );
        $query = $this->db->insert('paket', $data);
        if ($query = TRUE) {
            $this->session->set_flashdata('info', 'Data Paket Berhasil Disimpan');
            redirect('paket_farrel');
        }
        
    }
    public function edit_farrel($id)
        {
            $isi['content'] = 'backend/paket/e_paket.php';
            $isi['judul'] = 'Form Edit Paket';
            $isi['data_farrel'] = $this->m_paket->edit_farrels($id);
            $this->load->view('backend/dashboard_farrels', $isi);
        }
        public function update_farrel()
        {   $kode_paket = $this->input->post('kode_paket');
            $data = array(
                'kode_paket' => $this->input->post('kode_paket'),
                'nama_paket' => $this->input->post('nama_paket'),
                'harga_paket' => $this->input->post('harga_paket')
            );
            $query = $this->m_paket->update($kode_paket, $data);
            if ($query = TRUE) {
                $this->session->set_flashdata('info', 'Data Paket Berhasil Di Update');
                redirect('paket_farrel');
            }
            
        }
        public function delete($id)
        {
            $query = $this->m_paket->delete($id);
            if ($query = TRUE) {
                $this->session->set_flashdata('info', 'Data Paket Berhasil Di Delete');
                redirect('paket_farrel');
            }
        }
}