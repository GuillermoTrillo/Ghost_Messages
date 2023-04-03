<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style_log.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="\Ghost_mensseger\util\sol.ico" type="image/x-icon">
    <title>Loguin Fantasma</title>
</head>
<body class = "login">
<div id ="cab_log">
        <br>
        <div id = "d_esquerda_log" class ="d_cab_log"> 
       
                    
                <button id = "voltar_log"><a href="index.php" class = "link-as-button_log"> Voltar </a> </button>

        </div>
       
        <div id = "d_central_log" class ="d_cab_log">
        <a href = "index.php"><h1 id = "h1_cab_log"> Ghost messages </h1> </a>
        </div>

        <div id = "d_direita_log" class ="d_cab_log">
            
        </div>

    </div>
    <div id = "meio_log">

    <br><br><br><br>

        <div id = "form_log"><h1 id = "p_cadastro_log"><br> <br>
            <form id="dentro_form_log" method="POST">
                <label for="gmail" class = "label_log">G-mail</label><br>
                <input id="gmail_log" type = "text" placeholder = "G-mail" class= "dados_log" name = "gmail">
                <br>
                <label for="senha"class = "label_log">Senha</label><br>
                <input id="senha_log" type = "password" placeholder = "Senha" class = "dados_log" name = "password">
                <br>
                <button type ="button" id = "enviar_log"  onclick="login()">  Enviar </button>
    
                <br>
            </form>
        </div>
    </div>
    <div class="col-6">
                <div id="divMsgErro">
               Estado:   <p id="pMsgErro">  Funcional. </p>
                </div>
     </div>

    <div id = "rodape_log">
        
        <div id= "insta_log">
            
        
            <p id = "p_guille_log" class = "p_instagram_log"> Guillermo -  <a  class = "link-as-button" href = "https://www.instagram.com/gui_deltoro/?next=%2F">
                                            @gui_deltoro 
                                </a>  
                        </p> 

            <p id = "p_rick_log" class = "p_instagram_log"> Ricardo - <a class = "link-as-button" href = "https://www.instagram.com/ricardovisk_s2/?next=%2F">
                                         @ricardovisk_s2
                                </a>
                        </p>

       
        </div>
    </div>

        <script src="js/login.js"></script>
</body>
</html>