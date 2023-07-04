<?php

class About extends Controller
{

    public function __construct()
    {
        session_start();
    }

    public function index($nama = 'Adi', $status = 'Mahasiswa')
    {
        $data['nama'] = $nama;
        $data['status'] = $status;
        $data['title'] = 'About';
        $data['nav_link_about'] = 'active';

        if (!isset($_SESSION['username'])) {
            $data['nav_link_status'] = '';
            $data['nav_link_core'] = BASEURL . '/auth';
            $data['nav_link_name'] = 'Login';
            $data['back_btn'] = BASEURL . '/auth';
        } else {
            $data['nav_link_status'] = '';
            $data['nav_link_core'] = BASEURL;
            $data['nav_link_name'] = 'Home';
            $data['back_btn'] = BASEURL;
        }

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
