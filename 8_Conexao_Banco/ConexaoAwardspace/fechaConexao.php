<?php
    function fecharConexao($link){
        @mysqli_close($link) or 
        die(mysqli_error($link));
    }
?>