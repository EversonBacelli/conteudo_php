<?php 
 require 'principal/inicio.html';
 
$professor=["Everson","Bacelli",18,"Gamer","SP"];
$professora = array("Jeniffer","Johansen",20,"Dancer","SP");

$professora[0] = $_POST['nome'];
$professora[1] = $_POST['sobrenome'];
$professora[2] = $_POST['idade'];
$professora[3] = $_POST['habilidade'];
$professora[4] = $_POST['estado'];

 require 'principal/inicioTabela.html';
 

 // repetir até finalizar o array
 echo '<tr>';
 foreach($professora as $item){
 
  // uma linha com uma célula cada
    echo '<td>' .  $item  .  '</td>'; 
 }

 echo '</tr>';  

 foreach($professor as $item){
 
  // uma linha com uma célula cada
    echo '<td>' .  $item  .  '</td>'; 
 }

 echo '</tr>';  


 require 'principal/fimTabela.html';
 require 'principal/fim.html';

?>