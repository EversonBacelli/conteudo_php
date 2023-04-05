<?php
    require '../readAPI/readAPI.php';
    require '../readAPI/printAPI.php';
    $perfil = $_GET['perfil'];
    $op = $_GET['op'];

    $produtos = consumirAPI();
    printarAPI($produtos, $perfil, $op);
?>