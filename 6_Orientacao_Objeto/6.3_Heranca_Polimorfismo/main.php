<?php
    require './Conta.php';
    $conta = new Conta('564654', '56564',45, 100, 'sdfasd');
    
    echo $conta->getAgencia() . "<br>"  ;
    echo $conta->getCliente() . "<br>"  ;
    echo $conta->getConta() . " <br>";
    echo $conta->getSaldo() . " <br>";
    echo $conta->getSenha() . " <br>";

?>