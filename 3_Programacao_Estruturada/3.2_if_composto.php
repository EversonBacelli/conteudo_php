<?php 
    // if composto
    // Categorizar pela idade
    // Até 7 Criança
    // Até 13 Pré-Adolescente
    // Até 24 Adolescente
    // Até 60 Adulto
    // mais que 60 idoso

    $idade = 35;
    
    if($idade <= 7){
        echo "Criança";
    } else if($idade <= 13){
        echo "Pré-Adolescente";
    } else if($idade <= 24){
        echo "Adolescente";
    } else if($idade <= 60){
        echo "Adulto";
    } else {
        echo "Idoso";
    }
    phpinfo();
?>