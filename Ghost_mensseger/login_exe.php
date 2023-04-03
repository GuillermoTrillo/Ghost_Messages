<?php

include_once("controller/login_controller.php");

session_start();


$gmail = $_POST['gmail'];
$password = $_POST['password'];

if( strpos($gmail, "@gmail.com") == true) {


$gmail = substr($gmail, 0, strpos($gmail, "@"));
//Validações
if(empty($gmail)) {
    echo "Informe o gmail do usuário.";
    exit;
}

if(empty($password)) {
    echo "Informe a senha do usuário.";
    exit;
}

$loginCont = new LoginController();
$login = $loginCont->lookForGmailPassword($gmail, $password);
if($login == null) {
    echo "Login ou senha inválidos.";
    exit;
}

$_SESSION['LoggerUserId'] = $login->getIdUsuario();
$_SESSION['LoggedUserName'] = $login->getUsername();

echo "";
}
else {
    echo 'Gmail invalido.';
    exit;
}