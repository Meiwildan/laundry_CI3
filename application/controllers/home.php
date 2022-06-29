<?php

class home extends CI_Controller {

        public function index()
        {
            $this->load->view('frontend/header_farrel');
            $this->load->view('frontend/home_farrels');
            $this->load->view('frontend/footer_farrel');
        }

}   