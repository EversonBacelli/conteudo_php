<?php 
    
    var_dump($_SERVER);
    echo "<br>";
    echo $_SERVER["HTTP_HOST"];
    pularLinhas();
    echo $_SERVER["REQUEST_METHOD"];
    pularLinhas();
    echo $_SERVER["REQUEST_URI"];
    pularLinhas();
    echo $_SERVER['WINDIR'];

    function pularLinhas(){
        echo "<br>";
        echo "<br>";
    }
?>