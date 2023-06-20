<?php
require 'conexao.php';
if ($_POST['acao'] == "create") {
    $nome = $_POST['nome'];
    $user = $_POST['user'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];

    // Realiza a inserção no banco de dados 
    $sql = "INSERT INTO usuarios (nome, usuario, senha, email, idempresa) 
    VALUES ('$nome', '$user', MD5('$senha'), '$email', $empresa)";

    if ($conn->query($sql) === true) {
        
        echo '<div class="alert alert-secondary" role="alert">Usuario'. $nome .' cadastrado com sucesso</div>';
        
    } else {
        echo '<div class="alert alert-secondary" role="alert">Erro ao cadastrar ->'. $conn->error . '</div>';;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();

    // Retorna a resposta para o Ajax
    echo $response;
}
if ($_POST['acao'] == "update") {
}
