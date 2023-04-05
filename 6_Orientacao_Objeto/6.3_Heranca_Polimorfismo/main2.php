<?php
    //require './Conta.php';
    require './ContaCorrente.php';
    require './ContaPoupanca.php';
    require './Cliente.php';

    $cliente = new Cliente('654','6464','m','656','5645456', 'fkglçsklçfdkgls');
   // var_dump($cliente);
    echo '<br>';
    echo 'Dados da Conta Corrente <br>';
    $contaCorrente = new ContaCorrente('5454654','654465456',$cliente, 'qwrqw', 'qwreqw');
    echo $contaCorrente->getAgencia() . "<br>"  ;
    echo var_dump($contaCorrente->getCliente()->getNome()) . "<br>"  ;
    echo $contaCorrente->getConta() . " <br>";
    echo $contaCorrente->getSaldo() . " <br>";
    echo $contaCorrente->getSenha() . " <br>";    

    echo '<br>';
    echo 'Dados da Conta Poupanca <br>';
    $contaPoupanca = new ContaPoupanca('564654655','465456465',$cliente, 'qwer', 'qweqwer');
    echo $contaPoupanca->getAgencia() . "<br>"  ;
    echo $contaPoupanca->getCliente()->getNome() . "<br>"  ;
    echo $contaPoupanca->getConta() . " <br>";
    echo $contaPoupanca->getSaldo() . " <br>";
    echo $contaPoupanca->getSenha() . " <br>"; 

?>