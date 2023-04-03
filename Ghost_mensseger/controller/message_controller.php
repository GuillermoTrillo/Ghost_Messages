<?php

include_once("DAO/message_DAO.php");

class MessageController {

    private $messageDAO;
    public function __construct() {
        $this->messageDAO = new MessageDAO();
    }
    
    public function save($message) {
    $this->messageDAO->saveMessage($message);
    }
    
    public function show() {
        return $this->messageDAO->showMessage();
    }
    public function update($message) {
        $this->messageDAO->updateMessage($message);
    }
}