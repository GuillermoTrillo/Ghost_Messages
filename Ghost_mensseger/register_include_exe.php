<?php

include_once("model/register.php");
include_once("controller/register_contorller.php");

$username = $_POST["username"];
$gmailReg = $_POST["gmailReg"];
$passwordReg = $_POST["passwordReg"];
$confirmPassword = $_POST["confirmPassword"];

if($passwordReg != $confirmPassword or  strpos($gmailReg, "@gmail.com") == false) {
    header("location: register.php");
}
else if($username == "" or $gmailReg == "" or $passwordReg == "" or $confirmPassword == "") {
    header("location: register.php");

}
else {
    $gmailReg = substr($gmailReg, 0, strpos($gmailReg, "@"));

    $register = new Register();
    $register -> setUsernameReg($username);
    $register -> setGmailReg($gmailReg);
    $register -> setPasswordReg($passwordReg);

    $registerCont = new RegisterController();
    $registerCont->include($register);

    header("location: login.php");
}    
?>
