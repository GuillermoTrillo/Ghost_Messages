<?php
session_start();

if(isset($_SESSION['LoggerUserId'])) {
    header("location: Ghosts.php");
    exit;
}


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
        </div>
       
        <div id = "d_central" class ="d_cab">
            <h1 id = "h1_cab"> Ghost messages </h1>
        </div>

        <div id = "d_direita" class ="d_cab">
            <button type ="button" id = "login" class = "botoes">
                <p class = "p_botao">
          
                <a  class = "link-as-button" href = "login.php"> login</a>
                

                </p> 
        
            </button> 
            <button type ="button" id = "Reg" class = "botoes"> 
                <p class = "p_botao">
                
                <a  class = "link-as-button" href = "register.php">
                
                Registrar

                </a>

                </p> </button> 
        </div>


    </div>
    <div id = "meio">

        <br><br><br><br>

        <div class = "explic">

            <p id ="p_explic">
            Não tem nada aqui.<br><br> Mas, já pensou em se registrar?<br><br> Ou se logar? <br>Talvez há algo secreto...</p> 

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
</body>
</html>