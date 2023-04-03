<?php

include_once("util/conexao.php");
include_once("model/register.php");

class RegisterDAO {
  
    private function mapUsuario($resultSql) {
        $usuarios = array();
        foreach ($resultSql as $reg):
            $usuario = new Register();
            $usuario->setIdUsuarioReg($reg['id_usuario']);
            $usuario->setGmailReg($reg['gmail']);
            $usuario->setUsernameReg($reg['username']);
            $usuario->setPasswordReg($reg['password']);
            array_push($usuarios, $usuario);
        endforeach;
        
        return $usuarios;
    }

    public function lookForId($idUsuario) {
        $conn = conectar_db(); 

        $sql = "SELECT u.* FROM tb_usuario u WHERE u.id_usuario = ?"; 

        $stmt = $conn->prepare($sql);
        $stmt->execute([$idUsuario]);
        $result = $stmt->fetchAll();

        $usuarios = $this->mapUsuario($result);

        if(count($usuarios) == 1)
           return $usuarios[0];
        elseif(count($usuarios)==0)
            return null;

        die();
    }
    public function saveUser(Register $register) {
        $conn = conectar_db();
        $sql = "INSERT INTO tb_usuario ( username , gmail, password)" .
            " VALUES (?, ?, ?)";
        $stmt = $conn-> prepare($sql);
        $stmt-> execute([$register->getUsernameReg(), $register->getGmailReg(),
                        $register->getPasswordReg()]);
    }
    public function UpdateUser(Register $register) {
        $conn = conectar_db();

        $sql = "UPDATE tb_usuario SET username = ?, gmail = ?,". 
                " password = ? WHERE id_usuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt-> execute([
            $register -> getUsernameReg(), $register->getGmailReg(),
            $register->getPasswordReg(), $register->getIdUsuarioReg()
        ]);

    }
}