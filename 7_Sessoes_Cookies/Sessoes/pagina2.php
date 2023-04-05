<?php
    require './principal/inicio.html';
    session_start();

    require './principal/menu.html.';
    if($_SESSION['nome'] == 'Everson' && $_SESSION['senha'] == '1234')
    {
        echo 'Acesso a área restrita da página 2';
    } else {
        echo 'Acesso Negado';
    }

    require './principal/fim.html';
    
?>