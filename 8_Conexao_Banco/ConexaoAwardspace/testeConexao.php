<?php

 require ('./conexao.php');
 require ('./fechaConexao.php');

 $link = abrirConexao();
 fecharConexao($link);
 echo 'OK'
    
?>

