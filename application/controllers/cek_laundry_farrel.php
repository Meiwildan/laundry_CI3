<?php

class Cek_laundry_farrel extends CI_Controller {
    public function index()
    {
        $this->load->view('frontend/header_farrel');
        $this->load->view('frontend/cek_laundry_farrels');
        $this->load->view('frontend/footer_farrel');
    }
}