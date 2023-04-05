<?php
    session_start();
    $_SESSION['autorizado'] = false;
    require './estrutura/inicio.html';
    require './estrutura/nav.html';
    
    // simulando a consulta a base de dados    
    $senha_bd = 1234;
    $login_bd = "everson@gmail.com";

    // informações do formulário
    $login = "everson@gmail.com";
    $senha = 1234;

    if($senha == $senha_bd && $login == $login_bd)
    {
        $_SESSION['autorizado'] = true;
    }
    $autorizado = $_SESSION['autorizado'];

    echo 'Página Principal <br>';
    echo $autorizado;
    
    require './estrutura/fim.html';
?>