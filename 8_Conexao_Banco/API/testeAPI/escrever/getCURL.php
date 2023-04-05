<?php 
    require '../../api.php';
    $produtos = consumirAPI();
    $produtos_json = json_encode($produtos);

    var_dump($produtos_json);
    InserirProduto($produtos_json);

    function inserirProduto($msg){
        $url = "http://pageteste.scienceontheweb.net/dadosExemploTreino/editar.php?teste=<?php echo $msg?>";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);
        curl_exec($ch);
        curl_close($ch);
    }
?>