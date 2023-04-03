<?php 
class Message {
private  $title;
private $text;
private $id_message;
private $id_usuario;
private $userName;

/**
 * Get the value of id_usuario
 */ 
public function getId_usuario()
{
return $this->id_usuario;
}

/**
 * Set the value of id_usuario
 *
 * @return  self
 */ 
public function setId_usuario($id_usuario)
{
$this->id_usuario = $id_usuario;

return $this;
}

/**
 * Get the value of id_message
 */ 
public function getId_message()
{
return $this->id_message;
}

/**
 * Set the value of id_message
 *
 * @return  self
 */ 
public function setId_message($id_message)
{
$this->id_message = $id_message;

return $this;
}

/**
 * Get the value of text
 */ 
public function getText()
{
return $this->text;
}

/**
 * Set the value of text
 *
 * @return  self
 */ 
public function setText($text)
{
$this->text = $text;

return $this;
}

/**
 * Get the value of title
 */ 
public function getTitle()
{
return $this->title;
}

/**
 * Set the value of title
 *
 * @return  self
 */ 
public function setTitle($title)
{
$this->title = $title;

return $this;
}

/**
 * Get the value of userName
 */ 
public function getUserName()
{
return $this->userName;
}

/**
 * Set the value of userName
 *
 * @return  self
 */ 
public function setUserName($userName)
{
$this->userName = $userName;

return $this;
}
}