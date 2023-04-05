<?php

    $numero = $_POST['login'];
    
    require './conexao.php';
    require './fechaConexao.php';
    $sql ="DELETE FROM tbl_pessoa WHERE login = $numero";
    $link = abrirConexao();
    mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro");
    fecharConexao($link);
    
?>