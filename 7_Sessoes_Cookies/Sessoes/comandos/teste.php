<?php
// Iniciando uma sessão
session_start();
 

echo $_SESSION['nome'] . " -----   " . $_SESSION['sobreNome'];

?>