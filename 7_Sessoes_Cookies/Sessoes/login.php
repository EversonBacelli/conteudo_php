<?php
    // iniciando sessão
    session_start();
    $nome_db = 'Everson';
    $senha_db = '1234';
    //guardando nome e senha na sessão
    
    	
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];


    if($nome_db == $nome  && $senha_db == $senha )
    {
        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['senha'] = $_POST['senha'];
        echo 'acesso permitido';
        echo $_SESSION['nome'];
        echo $_SESSION['senha'];
        
    } else {
        echo 'acesso negado';
    }


	
   header('location: http://localhost:8081/meusProjetos/PW2/Sessoes/index.php');
    
    
?>