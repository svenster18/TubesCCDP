<?php 

    require_once('LoginServiceInterface.php');
    require_once('LoginService.php');

    class LoginProxy implements LoginServiceInterface
    {
        public function __construct($loginService)
        {
            $this->loginService = $loginService;
        }

        public function login($username, $password){
            if($username == 'admin' && $password == 'admin') {
                $this->loginService->login($username, $password);
            }
            else {
                echo 'Username dan/atau password salah';
            }
        }
    }
?>