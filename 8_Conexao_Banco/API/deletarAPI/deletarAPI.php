<?php
    require '../readAPI/readAPI.php';
    require '../readAPI/printAPI.php';
    $idProduto = $_POST['id'];
    //$idProduto = $_GET['id'];

    $produtos = consumirAPI();


    // retirei o produto indicado
    foreach($produtos as $results => $produto){
        if($produto->id == $idProduto){
            unset($produtos[($produto->id) - 1]);
        }
    }
    
    $contador = 1;
    $listaDeProdutos = [];

    foreach($produtos as $results => $produto){
        $produto->id = $contador;
        array_push($listaDeProdutos, $produto);
        $contador = $contador + 1;
    }

    $mensagem = json_encode($listaDeProdutos);
    deletarProduto($mensagem);
 
    function deletarProduto($mensagem){
        $dados = array("json"=>$mensagem); 

        $url = "http://pageteste.scienceontheweb.net/dadosExemploTreino/editar.php";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);
        curl_exec($ch);
        curl_close($ch);
    }


    printarAPI($listaDeProdutos, 2);
?>