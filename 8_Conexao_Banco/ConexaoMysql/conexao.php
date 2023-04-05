<?php
    // parâmetros
    
    function conectar(){
        $host = 'localhost';
        $usuario = 'root';
        $senha = 'e189539';
        $bd = 'db_teste';

        // realizar a conexão 
        $conection = mysqli_connect($host, $usuario, $senha, $bd);
        return $conection;
    }
 
    function fecharConexao($conexao){
        mysqli_close($conexao);
    }
  
    

?>