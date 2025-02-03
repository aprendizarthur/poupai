<?php
//ARQUIVO PHP PARA DESLOGAR DA CONTA
    // Iniciando a sessão
    session_start();

    // Destruindo todas as variáveis de sessão
    session_unset();

    // Destruindo a sessão
    session_destroy();

    // Redirecionando para a página de login
    header("Location: index.php");
    exit();
?>