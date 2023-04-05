<?php 
    // Estrutura Escolha
    // Utilizada quando há várias opções e todas são previamente definidas
    
    // variável de controle
    $opc = "a";
    
    switch ($opc) {
        case "a":
            echo "Excelente";
            break;
        case "b":
            echo "Cumpriu o que foi solicitado";
            break;
        case "c":
            echo "Suficiente, mas pode melhorar";
            break;
        case "d":
            echo "Precisa melhorar urgente";
            break;
        default:
            echo "Opção inválida";
            break;
    }
?>