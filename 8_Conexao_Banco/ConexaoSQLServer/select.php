<?php
    
    function select()
    {
        require "conection.php";     // conexão com banco de dados
        require "baseTela/inicio.html";

        $link = conexao();
    
        echo '<br>';
        $sql = "SELECT * FROM tbl_fornecedores_Bianca";    
        $query = $link->query($sql);     // executando o comando
        $res = $query->fetchAll();       // atribuir os resultados para avariável
    
        require "baseTela/inicioTabela.html";
        foreach($res as $fornecedor){
            echo "<tr>";   // iniciar linha 
                // celulas
                echo "<td>" . $fornecedor['id_fornecedor']  ."</td>";       
                echo "<td>" . $fornecedor['nome_fornecedor']  ."</td>";
                echo "<td>" . $fornecedor['endereco_fornecedor']  ."</td>";
                echo "<td>" . $fornecedor['CNPJ_fornecedor']  ."</td>";
                echo "<td>" . $fornecedor['telefone_fornecedor']  ."</td>";
            echo "</tr>"; // finalizar linha
        }
    
        require "baseTela/fimTabela.html";
        require "baseTela/fim.html";
    }
   
?>