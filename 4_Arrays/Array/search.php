<?php
    // declaração
    $lista = ["laranja", "banana", "morango", "abacaxi", "limao", "laranja"];
    
    // insert
    array_push($lista, "ameixa");

    // read
    echo $lista[0];

    // delete 
    unset($lista[5]);

    // update   -- sobescreve
    $lista[3] = "Morango";

    echo "<br>";
    // leitura de todos os objetos
    foreach($lista as $item){
        echo $item . "<br >";
    }
    
    //  array_search();
    //  sort();

    
?>