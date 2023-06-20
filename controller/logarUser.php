<?php

session_start();

require 'conexao.php';

if (
    isset($_POST['login']) ||
    !empty($_POST['login']) ||
    isset($_POST['senha']) ||
    !empty($_POST['senha'])
) //Neste caso > 0 é só uma verificação se a chave do usuário é valida
{

    $usuario = mysqli_real_escape_string($conn, $_POST['login']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $selecionaId = "SELECT * FROM `users` WHERE usuario = '$usuario' AND senha = md5('$senha')";
    //echo $selecionaId;
    $resultado = mysqli_query($conn, $selecionaId);
    $row = mysqli_num_rows($resultado);
    $user = mysqli_fetch_array($resultado);
    $id = $user['id'];
    if ($row == 1) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['id'] = $id;
        header('Location: ../topicos.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: ../login.php');
        exit();
    }
}
