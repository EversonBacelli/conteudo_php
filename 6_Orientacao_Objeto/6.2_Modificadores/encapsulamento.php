<?php
    require './Conta.php';

    // Os modificadores de acesso definem limites da disponibilidade de atributos e métodos.
    //public -- significa que o conteúdo de uma classe está disponível em qualquer outro local do código.
    //private -- Define que os atributos e métodos só podem ser manipulados pela própria classe.
    //protected -- Define que somente a classe e suas filhas podem manipular os atributos e métodos (Autoriza herança).
     
    $conta1 = new Conta("Everson", "366.203.268-66");
    echo $conta1->titular;
    //echo $conta1->numero;
    //echo $conta1->cpf;
    
    
    
?>