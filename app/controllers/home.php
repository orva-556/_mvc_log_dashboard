<?php

class Home extends Controller
{

    public function __construct()
    {
        session_start();
    }

    public function search($keyword = '')
    {
        $data['log_search'] = $this->model('Log_model')->searchLog($keyword);
        $data['log_searchCount'] = $this->model('Log_model')->countSearchLog($keyword);

        $this->view('home/search', $data);
    }

    public function index()
    {
        $data['title'] = 'Log Dashboard';

        $data['nav_link_status'] = 'active';
        $data['nav_link_core'] = BASEURL;
        $data['nav_link_name'] = 'Home';

        $data['log'] = $this->model('Log_model')->getAllLog();
        $data['log_count'] = $this->model('Log_model')->countLog();

        if (!isset($_SESSION['username'])) {
            header("Location: " . BASEURL . "/auth");
        } else {
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }
    }
}
