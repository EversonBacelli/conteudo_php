<?php 
  
// substituir os comandos html puros, pelo getstarted do bootStrap  
require 'principal/inicio.html';

// body
$professor=["Nome"=>"Everson","Sobrenome"=>"Bacelli","idade"=>18,"Hobby"=>"Gamer","Estado"=>"SP"];
$professora = array("Jeniffer","Johansen",20,"Dancer","SP");

/*Read*/
echo $professor["Nome"]." e ".$professora[0]." Lecionam PHP para o Segundo A. "."<p>";
echo "<p>";

echo $professor["Nome"]." é um excelente ".$professor ["Hobby"]." e ".$professora[0]." é uma boa ".$professora[3].".";


 require 'principal/inicioTabela.html';
 // linhas e colunas
   var_dump($professor);
   echo "<p>";
   print_r($professora);
require 'principal/fimTabela.html';  
   // substituir os comandos html puros, pelo getstarted do bootStrap  
require 'principal/fim.html';
?>