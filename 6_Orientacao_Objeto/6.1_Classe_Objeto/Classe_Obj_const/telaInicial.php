<?php
    require './principal/inicio.html';
    require './Produto.php';

    $img = 'https://www.google.com/aclk?sa=L&ai=DChcSEwiK0PvXsYjyAhWSgpEKHVCIC_0YABAEGgJjZQ&ae=2&sig=AOD64_2gRmYCpZn7UrnltmJCsI-WTP7RUQ&ctype=5&q=&ved=2ahUKEwidm_TXsYjyAhUhppUCHU72DvkQwg96BAgBEEU&adurl=';
    $p = new Produto(1,'tablet', 'disposito eletrônico de tela grande', 1.55,'true', $img);
    var_dump($p);

    require './principal/fim.html';
?>