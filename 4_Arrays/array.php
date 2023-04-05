<?php 
    require './apoio.php';

    // criar arrays
    $professor=["Everson","Bacelli",18,"Gamer","SP"];
    $professora = array("Jeniffer","Johansen",20,"Dancer","SP");
    
    $novaProf = ["nome"=>"Thay", "idade" => 40, "Hobbie"=>"Beber", "Estado" => "SP"];
    $novoProf = ["nome"=>"Doni", "idade" => 28, "Hobbie"=>"Gamer", "Estado" => "SP"];

    $profMau = array("nome"=>"Maurício", "idade"=> 45, "Hobbie"=>"Fazer maudade", "Estado"=>"SP");

    //incluir em arrays
    $listaProfessores = [];
    array_push($listaProfessores, $professor, $professora, $novaProf);
    array_push($listaProfessores, $novoProf);
    array_push($listaProfessores, $profMau);
    
    // Deletar Itens de um array
    unset($listaProfessores[1]);        
    echo "Lista de professores modificada - ";
    var_dump($listaProfessores);
    pularLinhas();
 
    // retira o último item da lista
    array_pop($listaProfessores);

    // Editar uma posição
    $professor[2] = 36;
    $listaProfessores[0][4] = "Andar de Bicicleta";

    echo "Professor Everson Atualizado - ";
    var_dump($listaProfessores);
    pularLinhas();
?>