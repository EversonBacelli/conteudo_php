<?php
    require './principal/inicio.html';
    require './principal/menu.html.';
    session_start();
    
    if($_SESSION['nome'] == 'Everson' && $_SESSION['senha'] == '1234')
    {
        echo 'Acesso a área restrita da página 3';
    } else {
        echo 'Acesso Negado';
    }

    require './principal/fim.html';
    
?>