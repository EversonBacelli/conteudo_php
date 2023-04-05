<?php
    require "./select.php";
    require "./insert.php";
    require "./delete.php";
    require "./update.php";

    $operacao = $_GET['op'];

    switch ($operacao) {
        case '1':
            select();
        break;
        
        case 2:
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $endereco = $_POST['endereco'];
            $cnpj = $_POST['cnpj'];
            $telefone = $_POST['telefone'];
            inserirFornecedor($id,$nome, $endereco, $cnpj, $telefone);
        break;
        case 3:
            $id = $_GET["id"];
            deletarFornecedor($id);
        break;
        case 4:
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $cnpj = $_POST["cnjp"];
            $telefone = $_POST["telefone"];
            atualizarFornecedor($id, $nome, $endereco, $cnpj, $telefone);
        break;
    }
?>