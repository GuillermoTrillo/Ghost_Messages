
function DataValidForm() {
    var textarea = document.getElementById('Areatexto').value;
    var title = document.getElementById('title').value;
   
    var data = new FormData();
    data.append('textArea', textarea);
    data.append('title', title);

    var url = "message_exe.php";
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", url, false);
    xhttp.send(data);
    var retorno = xhttp.responseText;

  
    if(retorno != "") {
        
        var divErro = document.getElementById("pMsgErro");
        divErro.innerHTML = retorno;
        divErro.style.animationName = "error";
        divErro.style.color = "rgb(255, 44, 44)";
    } else {
        window.location = "Ghosts.php";
    }
}
