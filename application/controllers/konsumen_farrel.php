<?php

class Konsumen_farrel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_konsumen');
    }
    public function index()
    {
        $isi['content'] = 'backend/konsumen_farrels/v_konsumen';
        $isi['judul'] = 'Data Konsumen';
        $isi['data'] = $this->m_konsumen->getALLDataKonsumenFarrel();
        $this->load->view('backend/dashboard_farrels', $isi);
    }
    public function tambah_konsumen()
    {
        $isi['content'] = 'backend/konsumen_farrels/t_konsumen';
        $isi['judul'] = 'Form Tambah Konsumen';
        $isi['kode_konsumen'] = $this->m_konsumen->generate_kode_konsumen_farrel();
        $this->load->view('backend/dashboard_farrels', $isi);
    }
    public function simpan_farrel()
    {
        $data = array(
            'kode_konsumen'     => $this->input->post('kode_konsumen'),
            'nama_konsumen'     => $this->input->post('nama_konsumen'),
            'alamat_konsumen'   => $this->input->post('alamat_konsumen'),
            'no_telp'           => $this->input->post('no_telp'),
        );
        $query = $this->db->insert('konsumen', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Konsumen Berhasil DI Input');
            redirect('konsumen_farrel');
        }
    }
    public function edit_farrel($id)
    {
        $isi['content'] = 'backend/konsumen_farrels/e_konsumen';
        $isi['judul'] = 'Form Edit Konsumen';
        $isi['konsumen'] = $this->m_konsumen->edit_farrels($id);
        
        $this->load->view('backend/dashboard_farrels', $isi);
    }
    public function update_farrel()
    {
        $kode_konsumen = $this->input->post('kode_konsumen');
        $data = array(
            'kode_konsumen'     => $this->input->post('kode_konsumen'),
            'nama_konsumen'     => $this->input->post('nama_konsumen'),
            'alamat_konsumen'   => $this->input->post('alamat_konsumen'),
            'no_telp'           => $this->input->post('no_telp'),
        );
        $query = $this->m_konsumen->update($kode_konsumen, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Konsumen Berhasil Di Update');
            redirect('konsumen_farrel');
        }
    }
    public function delete_farrel($id)
    {
        $query = $this->m_konsumen->delete($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Konsumen Berhasil Di Delete');
            redirect('konsumen_farrel');
        }
    }
}