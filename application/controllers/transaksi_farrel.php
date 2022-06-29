<?php

class Transaksi_farrel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_transaksi');
    }
    public function tambah_farrel()
    {
        $isi['content']         = 'backend/transaksi/t_transaksi';
        $isi['judul']           = 'Form Tambah Transaksi';
        $isi['konsumen']        = $this->db->get('konsumen')->result();
        $isi['paket']           = $this->db->get('paket')->result();
        $isi['kode_transaksi']  = $this->m_transaksi->generateKodeFarrel();
        $this->load->view('backend/dashboard_farrels', $isi);
    }
    public function getHargaPaket()
    {
        $kode_paket = $this->input->post('kode_paket');
        $data       = $this->m_transaksi->getHargaPaketFarrel($kode_paket);
                       echo json_encode($data);
    }
    public function simpan_farrel()
    {
        $data = array(
            'kode_transaksi'    => $this->input->post('kode_transaksi'),
            'kode_konsumen'     => $this->input->post('kode_konsumen'),
            'kode_paket'        => $this->input->post('kode_paket'),
            'tgl_masuk'         => $this->input->post('tgl_masuk'),
            'tgl_ambil'         => '',
            'berat'             => $this->input->post('berat'),
            'grand_total'       => $this->input->post('grand_total'),
            'bayar'             => $this->input->post('bayar'),
            'status'            => $this->input->post('status')
            
        );
        $query = $this->db->insert('transaksi', $data);
        if ($query = TRUE) {
            $this->session->set_flashdata('info', 'Data Transaksi Berhasil Disimpan');
            redirect('transaksi_farrel/tambah_farrel');
        }
    }
    public function riwayat_farrel()
    {
        $isi['content']         = 'backend/transaksi/v_transaksi';
        $isi['judul']           = 'Form Riwayat Transaksi';
        $isi['data_farrel']     = $this->m_transaksi->getAllRiwayatFarrel();
        $this->load->view('backend/dashboard_farrels', $isi);
    }
    public function edit_farrel($kode_transaksi){

        $isi['content']   = 'backend/transaksi/e_transaksi';
        $isi['judul']     = 'Form Edit Transaksi';
        $isi['transaksi'] = $this->m_transaksi->edit_transaksi($kode_transaksi);
        $isi['konsumen']  =$this->db->get('konsumen')->result();
        $isi['paket']     =$this->db->get('paket')->result();
        $this->load->view('backend/dashboard_farrels', $isi);

    }
    public function update(){
        $kode_transaksi = $this->input->post('kode_transaksi');
        $data = array(

            'kode_transaksi' => $this->input->post('kode_transaksi'),
            'kode_konsumen'  => $this->input->post('kode_konsumen'),
            'kode_paket'     => $this->input->post('kode_paket'),
            'tgl_masuk'      => $this->input->post('tgl_masuk'),
            'tgl_ambil'      => '',
            'berat'          => $this->input->post('berat'),
            'grand_total'    => $this->input->post('grand_total'),
            'bayar'          => $this->input->post('bayar'),
            'status'         => $this->input->post('status'),

        );

        $query = $this->m_transaksi->update($kode_transaksi, $data);
        if($query = true){
            $this->session->set_flashdata('info','Data Transaksi Berhasil Disimpan');
            redirect('transaksi_farrel/riwayat_farrel', 'refresh');
        }
    }
    public function delete_farrel($id)
        {
            $query = $this->m_transaksi->delete($id);
            if ($query = TRUE) {
                $this->session->set_flashdata('info', 'Data transaksi Berhasil Di Delete');
                redirect('transaksi_farrel/riwayat_farrel', 'refresh');
            }
        }
}