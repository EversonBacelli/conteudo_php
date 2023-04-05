<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <pre> 
  <?php
  /* create*/
//Criando um vetor simples
$professor=["Nome"=>"Everson","Sobrenome"=>"Bacelli","idade"=>18,"Hobby"=>"Gamer","Estado"=>"SP"];
$professora = array("Jeniffer","Johansen",20,"Dancer","SP");

/*Read*/
echo $professor["Nome"]." tem ".$professor["idade"]." anos. "."<p>";
echo "<p>";
echo $professor["Nome"]." ".$professor ["Sobrenome"]." é seu nome completo ";
echo "<p> <strong> Após UpDate</strong> <p>";

/*Update*/
$professor["idade"]=25;
echo $professor["Nome"]." tem ".$professor["idade"]." anos. "."<p>";


var_dump($professor);
   echo "<p>";
   echo "<p> <strong> Após  Delete</strong> <p>";?> 
 </pre> 
  
  <?php
/*Delete*/

unset( $professor["idade"]);
echo $professor["Nome"]." tem ".$professor["idade"]." anos. "."<p>";
 ?> 
 
 <pre>
  <?php
   var_dump($professor);
   echo "<p>";
   print_r($professora);
  ?> 
 </pre>
</body>
</html>  