<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header('location: http://localhost:8081/meusProjetos/PW2/Sessoes/index.php');
?>