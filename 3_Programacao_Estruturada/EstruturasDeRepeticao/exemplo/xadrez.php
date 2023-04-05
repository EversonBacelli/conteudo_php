<?php
    require "./baseTela/inicio.html";
    
    montarTabuleiro();

    require "./baseTela/fim.html";
?>


<?php 
    function montarTabuleiro(){
        
        $coluna = 1;
        $linha = 1;
        $cor ="gridItem";

        while ($linha <= 8) {
            require "./baseTela/inicioGrid.html";
            while ($coluna <= 8) {
                if($cor=="gridItem"){
                    $cor="gridItem1";
                } else{
                    $cor = "gridItem";
                }
                require "./baseTela/itemGridInicio.html";
                echo "1";
                require "./baseTela/itemGridFim.html";

                $coluna = $coluna + 1;
            }
            if($cor=="gridItem"){
                $cor="gridItem1";
            } else{
                $cor = "gridItem";
            }
            require "./baseTela/fimGrid.html";
            $coluna = 1;
            $linha = $linha + 1;
            echo "<br>" ;
            
        }        
    }


?>