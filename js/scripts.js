/*!
* Start Bootstrap - Personal v1.0.1 (https://startbootstrap.com/template-overviews/personal)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-personal/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
function enviarEmail() {
    if (validarFormulario()) {
        var nome = document.getElementById("nomeInput").value;
        var email = document.getElementById("emailInput").value;
        var mensagem = document.getElementById("msgInput").value;

        var link = "mailto:contatofemachado@gmail.com"
            + "?subject=" + encodeURIComponent("Contato pelo Formulário")
            + "&body=" + encodeURIComponent("Nome: " + nome + "\nE-mail: " + email + "\nMensagem: " + mensagem);

        window.open(link, "_blank");
    }
}
function validarFormulario() {
    var nome = document.getElementById("nomeInput").value;
    var email = document.getElementById("emailInput").value;
    var mensagem = document.getElementById("msgInput").value;

    if (nome === "") {
        alert("Por favor, digite seu nome.");
        return false;
    }

    if (email === "") {
        alert("Por favor, digite seu e-mail.");
        return false;
    } else if (!email.includes("@")) {
        alert("Por favor, digite um e-mail válido.");
        return false;
    }

    if (mensagem === "") {
        alert("Por favor, digite sua mensagem.");
        return false;
    }

    return true;
}