<?php
    echo "----- Senha Criptografada -------";
    echo "<br>";
    echo "<br>";
    $email = "alex@gmail";
    $senha = "1234";

    echo "login sem criptografia : " . $senha;
    echo "<br>";
    echo "senha sem criptografia : " . $senha;
    echo "<br>";
    // encriptando
    $emailCriptografado = password_hash($email, PASSWORD_BCRYPT);
    echo "<br>";
    $senhaCriptograda = password_hash($senha, PASSWORD_BCRYPT);
    echo "<br>";
    //$senha = "everson@gmailaa";
    echo "email com criptografia : " . $emailCriptografado;
    echo "<br>";
    echo "senha com criptografia : " . $senhaCriptograda;
    
    echo "<br>";
    $data = buscarData();
    echo "<br>";
    echo "token estático: " . md5($email . $senha . $data);

    function buscarData(){
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:i');
        return $date;
    }


?>