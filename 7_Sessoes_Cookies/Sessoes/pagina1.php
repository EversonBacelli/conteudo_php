<?php
    require './principal/inicio.html';
    session_start();
    require './principal/menu.html.';
    
    $nome = $_SESSION['nome'];
    $senha = $_SESSION['senha'];
     
    echo $nome . " " . $senha;  
    /*	
    if($nome == 'Everson' && $senha == '1234')
    {
        echo 'Acesso a área restrita da pagina 1';
    } else {
        echo 'Acesso Negado';
    }
    
    */

    require './principal/fim.html';
    
?>