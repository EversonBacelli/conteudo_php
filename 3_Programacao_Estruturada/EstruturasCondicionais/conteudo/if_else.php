<?php
    $estrutura1 = 'CASE';
    $img = "case.png";
    $texto1 = retornaTexto(1);

    $estrutura2 = 'IF Simples';
    $img2 = "../img/ifSimples.png";
    $texto2 = retornaTexto(2);

    $estrutura3 = 'IF Aninhado';
    $img3 = "../img/ifComplexo.png";
    $texto3 = retornaTexto(3);

    // estrutura da tela
    require('../principal/inicio.html');
    require('../principal/inicioGrid.html');

    Card(1, $estrutura1, $img,$texto1);
    Card(2, $estrutura2, $img2,$texto2);
    Card(3, $estrutura3, $img3,$texto3);

    require('../principal/fimGrid.html');
    require('../principal/fim.html');
?>




<?php 
    function retornaTexto($card){
        $texto = "";
        
        if($card ==1){
            $texto = "A declaração switch é similar a uma série de declarações 
                IF na mesma expressão. Em muitos casos, se deseja comparar as mesmas variáveis
                (ou expressões), com diferentes valores, e executar pedaços diferentes de 
                código dependendo de qual valor ela é igual. Esta é exatamente a serventia da 
                declaração switch";
            return $texto;
        } if ($card ==2) {
        $texto = "elseif, como o nome sugere, é uma combinação do if e else. Como o 
            else, estende um if para executar instruções diferentes no caso da expressão 
            if original ser avaliada como false. Entretanto, diferentemente do else, 
            executará uma expressão alternativa somente se a expressão condicional do 
            elseif for avaliada como true. Por exemplo, o código a seguir exibirá a is 
            bigger than b, a equal to b ou a is smaller than b:";
        return $texto;
        } else {
            $texto = "Chamamos de estruturas de decisão encadeadas, quando uma estrutura de 
            decisão está localizada dentro do lado falso da outra. Este tipo de estrutura 
            também é conhecida como seleção “aninhada” ou seleção “encaixada”.";        
        }
        return $texto;
    }

    
    function Card($card, $estrutura, $img, $texto){
        switch($card){
            case 1:
                require('../principal/itemGridInicio.html');
                require('../principal/card.html');
                require('../principal/itemGridFim.html');
            break;
            case 2:
                require('../principal/itemGridInicio.html');
                require('../principal/card2.html');
                require('../principal/itemGridFim.html');
            break;
            case 3:
                require('../principal/itemGridInicio.html');
                require('../principal/card3.html');
                require('../principal/itemGridFim.html');
            break;
        }
    }
?>

