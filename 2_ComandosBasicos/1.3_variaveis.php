<?php
    $nome = "Everson";
    $idade = 36;
    $peso = 80.5;
    $endereco = "Travessa Sonho por Sonho n° xxx";
    $estadoCivil = false;

    echo "É String: " . is_string($nome) . "<br>";
    echo "É Integer " . is_integer($idade) . "<br>";
    echo "É Double " . is_double($idade) . "<br>";
    echo "É Boolean " . is_bool($estadoCivil) . "<br>";
    echo "É numérico " . is_numeric($nome) . "<br>";
    echo "É nulo" . is_null($endereco) . "<br>";
    echo "<br>";
    echo gettype($endereco) . "<br>";

    const sobreNome = "Bacelli";
    echo sobreNome . "<br>";
    // Não é possível alterar o conteúdo de uma constante.
    //sobreNome "Willian Pereira Bacelli";
    define("sobreNomeCompleto", "Willian Pereira Bacelli" );
    print("$nome " . sobreNomeCompleto);
?>