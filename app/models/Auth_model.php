<?php

class Auth_model
{
    // private $nama = 'Muhammad Adi Agum';

    public function __construct()
    {
        session_start();
    }

    public function getLogin()
    {
        $username = "orva";
        $password = "vague0000";

        if (isset($_POST['submit'])) {
            if ($_POST['username'] == $username && $_POST['password'] == $password) {
                $_SESSION['username'] = $username;
                // local
                //header("Location: http://localhost/orva/_orva-local/log_dashboard");
                // server
                header("Location: " . BASEURL);
            } else {
                header("location: " . BASEURL . "/auth");
                // echo '<script>alert("Wrong Username or Password, check again!!!")</script>';
            }
        }
    }

    public function getLogout()
    {
        session_destroy();
        header("location: " . BASEURL . "/auth");
        exit;
    }
}
