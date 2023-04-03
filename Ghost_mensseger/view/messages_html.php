<?php
include_once("model/message.php");
class MessageHTML {
    public static function CardMaking($messages) {

        foreach ($messages as $message):
       echo' <div class="card"> ';
       echo' <div class="container">';
          echo '<p class="username"><b> ' . $message->getUserName()->getUsernameReg() . '</b></p>';
       echo'<h4 id="title">' . $message->getText() . '</h4>
       <hr>';
       echo'<p>' .  $message->getTitle()  . '</p>';
      echo ' </div>';
      if($_SESSION['LoggedUserName'] == $message->getUserName()->getUsernameReg()) {
        echo'<a href="alter_messages.php?id='. $message->getId_message() .'"> Editar </a> ';
      }   
    echo '</div> ';

        endforeach;

    }
}