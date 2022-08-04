<?php 

    require_once('LoginServiceInterface.php');

    class LoginService implements LoginServiceInterface
    {
        public function login($username, $password) {
            echo "Login Berhasil, Selamat Datang ".$username."</br>"; 
        }
    }
?>