<?php 
    require './apoio.php';

    $lista = criarArray();

    // Apresenta o tamanho do array
    echo "- A lista de professores contem " . count($lista) . " registros";
    pularLinhas();

    $prof = $lista[0];
    // Procura em um array e retorna sua chave
    $chave = array_search("Bacelli", $prof);
    echo "- O meu sobre nome está na posição $chave";
    pularLinhas();

    // inverte o array
    $listaInversa = array_reverse($lista);

   var_dump($lista);
   pularLinhas();
   
   var_dump($listaInversa);
   pularLinhas();

    // Remove os valores duplicados
    //$listaUnica = array_unique($lista);

    // indica quais valores quero manter do array
    $input = array_splice($lista, 1, 1);
    var_dump($input);
    pularLinhas();

    // Ordena um array
    $carros = array("Fusca", "Uno", "Brasilia", "Gol");
    var_dump($carros);
    pularLinhas();
    sort($carros);
    var_dump($carros);

    
    // manual php - https://www.php.net/manual/pt_BR/ref.array.php

?>