<?php
    

    function conexao()
    {
        $servername = "DESKTOP-2G043RB";
        $dataBase="correcaoAvaliacao";

        try{
            $db = new PDO("sqlsrv:Server=$servername;database=$dataBase","","");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        }catch(Exception $e){
            echo $e->getMessage();
        } 
    }
    
?>