<?php
    require ('./conexao.php');
    require ('./fechaConexao.php');
    $link = abrirConexao();

    $nome = $_POST['Nome'];
    $login = $_POST['Login'];

    $sql = 'INSERT INTO tbl_pessoa(nome, login) VALUES' . "('$nome', $login)";
        
    mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro");
    fecharConexao($link);

    header("Location: ./testeConexao.php");
    
?>