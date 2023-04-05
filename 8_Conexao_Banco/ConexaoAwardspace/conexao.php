<?php
    
    function abrirConexao(){
        $host = 'fdb29.awardspace.net';
        $usuario ='3755495_login';
        $senha = '*Everson2021';
        $bd = '3755495_login';
        //$bd_charset = 'utf8';
        //$porta = 3306;

        $mysql = new mysqli($host,$usuario, $senha, $bd) or die(mysqli_connect_errno());
        //mysqli_set_charset($mysql, $bd_charset)
        //or die(mysqli_error($mysql)); 
        return $mysql;
    }
?>


