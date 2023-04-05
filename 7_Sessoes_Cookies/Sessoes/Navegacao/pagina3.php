<?php
    session_start();
    require './estrutura/inicio.html';
    require './estrutura/nav.html';
    $autorizado = $_SESSION['autorizado'];

    echo 'Página 3 <br>';
    if($autorizado == true)
    {
        echo 'conteudo restrito';
    } else 
    {
       echo 'conteudo bloqueado';
    }

    require './estrutura/fim.html';

?>