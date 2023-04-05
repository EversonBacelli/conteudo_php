<?php


$classificacao = 'B';


switch ($classificacao) {
    case 'A':
        echo "Nascimento";
        break;
    case 'B':
        echo "Primeira Infância";
        break;
    case 'C':
        echo "Segunda Infância";
        break;
    case 'D':
        echo "Adolescência";
        break;
    case 'E':
        echo "Idade Adulta";
        break;
    case 'F':
        echo "Velice";
        break;
    default:
        echo 'Época da Morte';
        break;
}

?>