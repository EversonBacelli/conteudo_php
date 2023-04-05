<?php 
    $dados = json_decode(file_get_contents('php://input'));

    $codigo = intval($dados->codigo);
    $nome = $dados->nome;
    $preco = $dados->preco;
    $qtd = intval($dados->qtd);
    
    $produto = [$codigo, $nome, $preco, $qtd];
    $json = json_encode($produto);
    
    echo $json;
?>