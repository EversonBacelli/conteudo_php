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
//podemos misturar a chave com a ordenação

$professor=["Nome"=>"Everson","Bacelli",18,"Hobby"=>"Gamer","SP"];
 var_dump($professor);
   echo "<p>";
   print_r($professor);

/*Read*/
 ?> 
 </pre>
  <?php
   echo '$professor["Nome"] mora no estado de $professor[3]. <p>';

echo $professor["Nome"]." mora no estado de ".$professor[2];
 ?> 

</body>
</html>  