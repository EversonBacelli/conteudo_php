<?php
    // iniciando uma sessão
    session_start();
    session_abort();
	
    if(empty($_SESSION) == 1){
       $_SESSION['nome'] = "";
       $_SESSION['senha'] = "";	       
    }
    
    
    require './principal/inicio.html';
    require './principal/menu.html.';
    

    if($_SESSION['nome'] == "")
    {
        require './principal/form.html';
    } else     {
        echo 'você está logado';
    }
    	        
    
    require './principal/fim.html';
    
?>