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
    $selecionaId = 
    "SELECT u.*, up.idperfil AS perfil 
    FROM users u 
    JOIN usuario_perfis up ON u.id = up.idusuario
    WHERE u.usuario = '$usuario' AND u.senha = md5('$senha');";
    //echo $selecionaId;
    $resultado = mysqli_query($conn, $selecionaId);
    $row = mysqli_num_rows($resultado);
    $user = mysqli_fetch_array($resultado);
    if ($row == 1) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['perfil'] = $user['perfil'];
        $_SESSION['id'] = $user['id'];
        header('Location: ../topicos.php');
        exit();
    } 
    if ($row == 0) {
        $_SESSION['nao_autenticado'] = true;
        header('Location: ../login.php');
        exit();
    }
}
