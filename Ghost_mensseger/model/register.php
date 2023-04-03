<?php

class Register {

    private $idUsuarioReg;
    private $usernameReg;
    private $gmailReg;
    private $passwordReg;
    

    /**
     * Get the value of idUsuarioReg
     */ 
    public function getIdUsuarioReg()
    {
        return $this->idUsuarioReg;
    }

    /**
     * Set the value of idUsuarioReg
     *
     * @return  self
     */ 
    public function setIdUsuarioReg($idUsuarioReg)
    {
        $this->idUsuarioReg = $idUsuarioReg;

        return $this;
    }

    /**
     * Get the value of usernameReg
     */ 
    public function getUsernameReg()
    {
        return $this->usernameReg;
    }

    /**
     * Set the value of usernameReg
     *
     * @return  self
     */ 
    public function setUsernameReg($usernameReg)
    {
        $this->usernameReg = $usernameReg;

        return $this;
    }

    /**
     * Get the value of gmailReg
     */ 
    public function getGmailReg()
    {
        return $this->gmailReg;
    }

    /**
     * Set the value of gmailReg
     *
     * @return  self
     */ 
    public function setGmailReg($gmailReg)
    {
        $this->gmailReg = $gmailReg;

        return $this;
    }

    /**
     * Get the value of passwordReg
     */ 
    public function getPasswordReg()
    {
        return $this->passwordReg;
    }

    /**
     * Set the value of passwordReg
     *
     * @return  self
     */ 
    public function setPasswordReg($passwordReg)
    {
        $this->passwordReg = $passwordReg;

        return $this;
    }
}