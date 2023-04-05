<?php 
 
    require './usuario.php';
    header('Access-Control-Allow-Origin: *');

    $nome = $_POST['nome'];
    $foto = $_FILES['foto'];
    $usuario1 = [$nome, $foto['name'], 25];

    $nomeArquivo = "./img_upload/" . $foto['name'];
 
    move_uploaded_file($foto['tmp_name'], $nomeArquivo );

    $json = json_encode($usuario1);
    echo $json;

?>