<?php 
    function pularLinhas(){
        echo "<br>";
        echo "<br>";
    }

    function criarArray(){
        $professor=["Everson","Bacelli",18,"Gamer","SP"];
        $professora = array("Jeniffer","Johansen",20,"Dancer","SP");
    
        $novaProf = ["nome"=>"Thay", "idade" => 40, "Hobbie"=>"Beber", "Estado" => "SP"];
        $novoProf = ["nome"=>"Doni", "idade" => 28, "Hobbie"=>"Gamer", "Estado" => "SP"];

        $profMau = array("nome"=>"Maurício", "idade"=> 45, "Hobbie"=>"Fazer maudade", "Estado"=>"SP");

        //incluir em arrays
        $listaProfessores = [];
        array_push($listaProfessores, $professor, $professora, $novaProf, $novoProf, $profMau);
        
        return $listaProfessores;
    }
?>