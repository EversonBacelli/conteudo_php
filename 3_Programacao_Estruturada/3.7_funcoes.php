<?php 
    // Funções são blocos de código que podem ser invocados por identificador
    // e necessariamente preveem UM retorno
    function realizarCalculo($operacao, $n1, $n2){
        switch($operacao){
            case "+":
                return $n1 + $n2;
                break;
            case "-":
                return $n1 - $n2;
                break;
            case "x":
                return $n1 * $n2;
                break;
            case "/":
                return $n1 / $n2;
                break;
        }
    }
     
    $resultado = realizarCalculo("+", 2, 2);
    // Procedimento, por sua vez, também consiste em um bloco de código invocado por um 
    // identificador, porém não prevê retorno.
    function printar($res){
        echo $res;
    }
    printar($resultado);
    //OBS: O nome dos parâmetros não importa, a funções e procedimentos esperam argumentos
    // em ordem.
?>