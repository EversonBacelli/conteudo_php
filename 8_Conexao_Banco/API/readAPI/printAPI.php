<?php
    
    function printarAPI($listaDeProdutos, $perfil, $operacao){
    require "../view/principal/inicio.html";    
    require "../view/principal/inicioGrid.html";

    // percorrendo o conteúdo da listaDeProdutos
    foreach ($listaDeProdutos as $results => $produto ) {
        require "../view/principal/itemGridInicio.html";
        $idProduto = $produto ->id;
        $nomeProduto = $produto->name;
        $descricaoProduto =  $produto->description;
        $precoProduto = $produto->price; 
        $imgProduto = $produto->image;
        
       require '../view/principal/card.html.'; 
       switch ($operacao) {
           case 1: 
            require "../view/principal/botao/descricao.html";
           break;
           case 2: 
            require "../view/principal/botao/editar.html";
           break;
           case 3: 
            require "../view/principal/botao/delete.html";
           break;
           default:
               # code...
           break;
       } 
        require "../view/principal/itemGridFim.html";
    }

    require "../view/principal/fimGrid.html";
    require "../view/principal/fim.html";
    }

?>