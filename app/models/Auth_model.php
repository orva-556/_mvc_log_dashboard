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
                // header("Location: " . BASEURL);
            } else {
                $_SESSION['username'] = null;
            }
        }
    }

    public function getLogout()
    {
        session_unset();
        header("location: " . BASEURL . "/auth");
        // exit;
    }
}
