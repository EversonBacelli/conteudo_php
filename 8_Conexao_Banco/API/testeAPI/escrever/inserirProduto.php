<?php 
    require '../../Produto.php';
    require '../../api.php';
    require '../../printAPI.php';
    $perfil = $_GET['perfil'];


    $listaProdutos = consumirAPI();

    $id = count($listaProdutos);
    $name = $_POST['nomeProduto'];
    $descricao = $_POST['descricaoProduto'];
    $precoProduto = $_POST['precoProduto'];
    $disponibilidade = $_POST['availableProduto'];
    $imagem = $_POST['imgProduto'];

    $produto = new Produto($id, $name,$descricao, $precoProduto, $disponibilidade, $imagem);
    //array_push($listaProdutos, $produto);
    $mensagem = json_encode($listaProdutos);
    inserirProduto($mensagem);

    
    function inserirProduto($mensagem){
        $mensagem = "deu certo";
        $url = "http://pageteste.scienceontheweb.net/dadosExemploTreino/editar.php?teste=$mensagem";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);
        curl_exec($ch);
        curl_close($ch);
    }

    printarAPI($listaProdutos, $perfil);
    
?>