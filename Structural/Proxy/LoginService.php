<?php 

    require_once('LoginServiceInterface.php');

    class LoginService implements LoginServiceInterface
    {
        public function login($nama) {
            echo "Login Berhasil, Selamat Datang ".$nama; 
        }
    }
?>