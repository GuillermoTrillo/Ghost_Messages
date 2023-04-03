<?php


include_once("util/conexao.php");
include_once("model/login.php");

class LoginDAO {

    public function findByGmailPassword($gmail, $password) {
        $conn = conectar_db();

        $sql = "SELECT * FROM tb_usuario u" . " 
        WHERE u.gmail =  ?  AND u.password =  ?";
        $stm = $conn->prepare($sql);
        $stm ->execute([$gmail, $password]);
        $result = $stm->fetchAll();
    
        $logins = array();
        foreach($result as $reg):
            $login = new Login();
            $login-> setIdUsuario($reg['id_usuario']);
            $login-> setUsername($reg['username']);
            $login-> setGmail($reg['gmail']);
            $login-> setPassword($reg['password']);
            array_push($logins, $login);
        endforeach;

        if(count($logins) == 1) {
            return $logins[0];
        }
        elseif (count($logins) == 0) {
            return null;
            die("loginDAO.findByGmailPassword()" . 
            " - Erro: mais de um usuário encontrado.");
        }
    }
}