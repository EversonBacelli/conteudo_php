<?php
    
    function consumirAPI(){
        $url = "http://pageteste.scienceontheweb.net/dadosExemploTreino/produtos.json"; // endereço do recurso
        $ch = curl_init($url);    // iniciar CURL 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   //  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false); // desabilitar a segurança do protocolo de rede 
        $listaDeProdutos = json_decode(curl_exec($ch));  // execução

    return $listaDeProdutos;   
}
?>