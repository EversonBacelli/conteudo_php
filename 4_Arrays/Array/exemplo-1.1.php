<?php 
 require 'principal/inicio.html';
 require 'Professores.php';

// recebendo a posição a ser apagada
//$index = $_POST['index'];

// Array unidimencional
//$professor=["Everson","Bacelli",18,"Gamer","SP"];
//$professora = array("Jeniffer","Johansen",20,"Dancer","SP");

// Array com 02 objetos
$p1 = new Professores("Everson","Bacelli",18,"Gamer","SP");
$p2 = new Professores("Jeniffer","Johansen",20,"Dancer","SP");

$professores = [];
array_push($professores, $p1, $p2); // INSERT
//unset($professor[$index]);        // DELETE

//unset($professor[$index]);  // retirar objetos da lista


//*Update*/
var_dump($professores[0]->getNome());
echo "<br>";
$professores[0]->setNome("EVERSON");
echo $professores[0]->getNome();

 require 'principal/inicioTabela.html';
 

// READ
foreach($professores as $item => $professor){
 
    echo '</tr>';
    //uma linha com uma célula cada
    echo '<td>' .  $professor->getNome() .  '</td>'; 
    echo '<td>' .  $professor->getsobreNome()  .  '</td>'; 
    echo '<td>' .  $professor->getidade()  .  '</td>'; 
    echo '<td>' .  $professor->getHabilidade()  .  '</td>'; 
    echo '<td>' .  $professor->getEstadoNascimento()  .  '</td>'; 
    echo '</tr>'; 
 }

 require 'principal/fimTabela.html';
 require 'principal/fim.html';
?>