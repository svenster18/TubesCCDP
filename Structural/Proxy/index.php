<?php
require_once('LoginProxy.php');
require_once('LoginService.php');

$loginService = new LoginProxy(new LoginService);

$loginService->login('admin', 'admin');
$loginService->login('member', 'admin');
