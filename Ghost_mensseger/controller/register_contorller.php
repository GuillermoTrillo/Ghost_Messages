<?php

include_once("dao/register_DAO.php");

class RegisterController {
    
    private $RegisterDAO;

    public function __construct() {
        $this->RegisterDAO = new RegisterDAO();
    }

    public function findById($idUsuario) {
        return $this->RegisterDAO->lookForId($idUsuario);
    }

    public function include($register) {
        $this->RegisterDAO->saveUser($register);
    }

    public function update($register) {
        $this->RegisterDAO->updateUser($register);
    }

}