<?php
// Iniciando uma sessão
session_start();
 
// Guardando dados na sessão
$_SESSION["nome"] = "Everson";
$_SESSION["sobreNome"] = "Bacelli";

echo $_SESSION['nome'] . " -----   " . $_SESSION['sobreNome'] . "<br>";

echo 'Sessão iniciada exemplo';
?>