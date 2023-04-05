<?php

    require 'Professores.php';
    $p1 = new Professores("Everson", "Bacelli", 34, "Gamer", "São Paulo");
    $p2 = new Professores("Jeniffer","Johansen",20,"Dancer","SP");
    
    $professores = [];
    
    array_push($professores, $p1, $p2);

    echo $p1->getNome();
    
?>