<?php
require 'conexao.php';
if ($_POST['acao'] == "create") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // Realiza a inserção no banco de dados 
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', MD5('$senha'))";
    
    if ($conn->query($sql) === true) {
        $response = 'Usuário cadastrado com sucesso!';
    } else {
        $response = 'Erro ao cadastrar o usuário: ' . $conn->error;
    }
    
    // Fecha a conexão com o banco de dados
    $conn->close();
    
    // Retorna a resposta para o Ajax
    echo $response;

}
if ($_POST['acao'] == "update") {
    

}
