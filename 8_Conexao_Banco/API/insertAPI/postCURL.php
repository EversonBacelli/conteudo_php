<?php    
    require '../readAPI/readAPI.php';
    require '../model/Produto.php';
    require '../readAPI/printAPI.php';
    $perfil = $_GET['perfil'];
    $op = $_GET['op'];
    
    // Obtendo os produtos em formado de objeto PHP
    $produtos = consumirAPI();

    // parâmetros do objeto produto
    $id = count($produtos) + 1;
    $name = $_POST['nomeProduto'];
    $descricao = $_POST['descricaoProduto'];
    $precoProduto = $_POST['precoProduto'];
    $disponibilidade = $_POST['availableProduto'];
    $imagem = $_POST['imgProduto'];
    
    // criando objeto
    $produto = new Produto($id, $name,$descricao, $precoProduto, 
    $disponibilidade, $imagem);

    // inserindo na lista
    if($produto->name != null){
        array_push($produtos, $produto);
    }

    // transformando em JSON
    $produtos_json = json_encode($produtos);


    inserirProduto($produtos_json);

    // atualizando o JSON no Servidor
    function inserirProduto($produtos_json){
        
        $dados = array("json"=>$produtos_json); 

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

    printarAPI($produtos, $perfil);
?>