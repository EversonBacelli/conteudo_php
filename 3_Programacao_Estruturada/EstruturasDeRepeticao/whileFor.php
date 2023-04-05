<?php
    require './principal/inicio.html';

    require './principal/inicioGrid.html';
    require './principal/itemGridInicio.html';
    inserirEstrutura(1);
    require './principal/itemGridFim.html';

    require './principal/itemGridInicio.html';
    inserirEstrutura(2);
    require './principal/itemGridFim.html';
    require './principal/fimGrid.html';
    

    require './principal/fim.html';


?>

<?php
    function inserirEstrutura($numero){
        switch ($numero) {
            case 1:
                $img = 'estruturasWhile.png';
                $texto = "O while é a estrutura de repetição mais simples do PHP. Com ele informamos que 
                            um bloco de código deve ser repetido enquanto a condição declarada for verdadeira. A sintaxe é 
                            composta por uma expressão, validada antes de cada iteração do loop, e pelo bloco de código a ser 
                             executado, declarado entre chaves { }.";
                require './principal/card.html';
            break;
            case 2:
                $img = 'estruturaFor.png';
                $texto = "O for é a estrutura de repetição do PHP que utilizamos quando sabemos a quantidade de repetições 
                que devem ser executadas. <br> A sintaxe é composta por três expressões separadas por ponto e vírgula, cada uma delas podendo ter zero, uma ou mais declarações separadas por vírgula:
                <br>
                Expressão 1: Executada somente uma vez, ao iniciar o loop. Normalmente a utilizamos para declarar e inicializar as variáveis que faremos uso para controlar o número de iterações do loop;
                <br>
                Expressão 2: Expressão booleana, validada antes de cada iteração do loop. Se a expressão contiver múltiplas expressões, todas serão executadas, mas somente o resultado da última será considerado. Se a expressão for vazia, ela será interpretada como verdadeira. O loop somente será executado enquanto essa expressão retornar true;
                <br>
                Expressão 3: Executada ao final de cada iteração, normalmente a utilizamos para declarar a forma de atualização do valor da variável avaliada na expressão 2.";
                require './principal/card2.html';
            break;
                

            default:
                # code...
                break;
        }
    }

    
?>