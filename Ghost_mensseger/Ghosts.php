<?php
 include_once ("login_verif.php");
 include_once ("controller/message_controller.php");
 include_once("view/messages_html.php");
 $nome = "(Sessão expirada)";
if(isset($_SESSION['LoggerUserId']))
    $nome = $_SESSION['LoggedUserName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="\Ghost_mensseger\util\sol.ico" type="image/x-icon"<?php echo time(); ?>>
    <title>Loguin Fantasma</title>
   
</head>
<body class = "index">
    <div id ="cab">
        <br>
        <div id = "d_esquerda" class ="d_cab"> 
        <a href="messages.php"> <button class = "botoes" id="writeMessage">  Write a message  </button> </a>
        </div>
       
        <div id = "d_central" class ="d_cab">
            <h1 id = "h1_cab"> Ghost messages </h1>
        </div>

        <div id = "d_direita" class ="d_cab">
        <div class="dropdown">

        <button id="username"class="dropbtn"> 
            <?php echo $nome;?>           
            <div class="dropdown-content">
                <a  href="alter_account.php" class=" dropa"> Editar</a>
                <br><br>
                <a  href="login_sair.php" class="dropa"> Deslogar</a> 
            </div>
        </button> 
  </div>
</div> 

    </div>
<div>
    <div id = "meio">

    <?php
            $messageCont = new messageController();
            $messages = $messageCont->show(); 
            
            MessageHTML::CardMaking($messages);
        ?>
      
    </div>

</div>
    <div id = "rodape">
        <div id= "insta">
            
        
            <p id = "p_guille" class = "p_instagram"> Guillermo -  <a  class = "link-as-button" href = "https://www.instagram.com/gui_deltoro/?next=%2F">
                                            @gui_deltoro 
                                </a>  
                        </p> 

            <p id = "p_rick" class = "p_instagram"> Ricardo - <a class = "link-as-button" href = "https://www.instagram.com/ricardovisk_s2/?next=%2F">
                                         @ricardovisk_s2
                                </a>
                        </p>

        </div>
     </div>
     <script src="js/confirmation.js"> </script>
</body>
</html>