<?php 
    // Um array associativo contendo referências para todas as variáveis que estão atualmente definidas no escopo global 
    //do script. O nome das variáveis são chaves do array.
    $carro = "Fiat Uno";
    $produto = "Maça";
    $objetos = ["Carro", "Cimento", 13];
    $preço = 25.50;

    var_dump($GLOBALS);
    
?>