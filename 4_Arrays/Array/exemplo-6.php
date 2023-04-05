<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  /* create*/
//Criando um vetor simples
$professor=["Everson","Bacelli", 18,"Gamer","SP"];


/*criando um vetor que é um mapa ordenado você pode 
   relacionar valores a chaves.
  array(
    chave  => valor,
    chave2 => valor2,
    chave3 => valor3,
    ...
)*/
$professor=["Nome"=>"Everson","Sobrenome"=>"Bacelli","idade"=>18,"Hobby"=>"Gamer","Estado"=>"SP"];
$professora = array("Jeniffer","Johansen",20,"Dancer","SP");

/*Read*/
echo $professor["Nome"]." e ".$professora[0]." Lecionam PHP para o Segundo A. "."<p>";
echo "<p>";

echo $professor["Nome"]." é um excelente ".$professor ["Hobby"]." e ".$professora[0]." é uma boa ".$professora[3].".";

/*podemos misturar a chave com a ordenação
$professor=["Nome"=>"Everson","Bacelli",18,"Hobby"=>"Gamer","SP"];
$professora = array("Jeniffer","Johansen",20,"Dancer","SP");
echo $professor[0]." é um excelente ".$professor[3]." e ".$professora[0]." é uma boa ".$professora[3].".";*/

/*Read*/


echo $professor["Nome"]." e ".$professora[0]." Lecionam PHP para o Segundo A. "."<p>";
echo "<p>";

echo $professor["Nome"]." é um excelente ".$professor ["Hobby"]." e ".$professora[0]." é uma boa ".$professora[3].".";
/*echo $professor[0]." e ".$professora[0]." Lecionam PHP para o Segundo A. "."<p>";
echo $professor[0]." é um excelente ".$professor[3]." e ".$professora[0]." é uma boa ".$professora[3].".";*/
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