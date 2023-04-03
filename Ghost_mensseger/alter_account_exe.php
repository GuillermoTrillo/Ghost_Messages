<?php

include_once("model/register.php");
include_once("controller/register_contorller.php");
include_once("login_verif.php");

$id = $_SESSION['LoggerUserId'];
$username = $_POST['usernameAlter'];
$gmail = $_POST['gmailAlter'];
$password = $_POST['passwordAlter'];
if( strpos($gmail, "@gmail.com") == true) {


    $gmail = substr($gmail, 0, strpos($gmail, "@"));
    //Validações
$usuario = new Register();
$usuario->setIdUsuarioReg($id);
$usuario->setUsernameReg($username);
$usuario->setGmailReg($gmail);
$usuario->setPasswordReg($password);

$usuarioCont = new RegisterController();
$usuarioCont->update($usuario);

$_SESSION['LoggedUserName'] = $usuario->getUsernameReg();

header("location: Ghosts.php");
}
else {
    header("location: alter_account.php");

}
