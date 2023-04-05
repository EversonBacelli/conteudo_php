<?php
    $lista = ["laranja", "banana", "morango", "abacaxi", "limao", "laranja"];
    
    foreach($lista as $item){
        echo $item . "\n";
    }
    echo "\n";
    sort($lista);
    foreach($lista as $item){
        echo $item . "\n";
    }

?>