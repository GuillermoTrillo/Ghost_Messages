function login() {
    var gmail = document.getElementById("gmail_log").value;
    var password = document.getElementById("senha_log").value;
    var data = new FormData();
    data.append("gmail", gmail);
    data.append("password", password);

    var url = "login_exe.php"
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