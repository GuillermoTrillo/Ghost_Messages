<?php

include_once("DAO/login_Dao.php");

class LoginController {

    private $loginDao;

    public function __construct() {
        $this->loginDao = new LoginDAO();
    }

    public function lookForGmailPassword($gmail, $password) {
        return $this->loginDao -> findByGmailPassword($gmail, $password);
    }
}