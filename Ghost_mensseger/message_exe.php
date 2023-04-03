<?php
include_once("login_verif.php");
include_once("model/message.php");
include_once("model/register_messages.php");
include_once("controller/message_controller.php");

$title = trim($_POST["title"]);
$message = trim($_POST['textArea']);
$id_usuario = $_SESSION['LoggerUserId'];
$username_Usuario = $_SESSION['LoggedUserName'];

if(empty($title) or empty($message)) {
echo "Sem campos vazios.";
    exit;
}
if(strlen($title) > 100 ) {
    echo "Titulo muito longo.";
    exit;
}
if(strlen($message) > 500) {
 echo "Mensagem muito longa.";
 exit;
}
$ghostMessage = new Message();
$ghostMessage->setTitle($title);
$ghostMessage->setText($message);



$register = new RegisterMessages($id_usuario, $username_Usuario);
$ghostMessage->setId_usuario($register);
$ghostMessage->setUserName($register);


$ghostCont = new MessageController();
$ghostCont -> save($ghostMessage);


echo "";

