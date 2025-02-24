<?php
//ARQUIVO PHP PARA DESLOGAR DA CONTA
    // Iniciando a sessão
    session_start();

    // Destruindo todas as variáveis de sessão
    session_unset();

    // Destruindo a sessão
    session_destroy();

    //Limpando cookie que deixa o usuário logado
    setcookie('usuario_logado', '', time() - 3600, '/');

    // Redirecionando para a página de login
    header("Location: login.php");
    exit();
?>