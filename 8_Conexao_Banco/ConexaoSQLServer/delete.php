<?php 

    function deletarFornecedor(int $id){
        require "conection.php";
        require "baseTela/inicio.html";
        $funcionou = false;

        $link = conexao();
        $sql = "DELETE FROM tbl_fornecedores_Bianca WHERE id_fornecedor=$id ";
        $stmt = $link->prepare($sql);
        $stmt->execute();

        echo '<br>';
        $sql = "SELECT * FROM tbl_fornecedores_Bianca";
        $query = $link->query($sql);
        $res = $query->fetchAll();
    
        require "baseTela/inicioTabela.html";
        foreach($res as $fornecedor){
            echo "<tr>";
                echo "<td>" . $fornecedor['id_fornecedor']  ."</td>";  
                echo "<td>" . $fornecedor['nome_fornecedor']  ."</td>";
                echo "<td>" . $fornecedor['endereco_fornecedor']  ."</td>";
                echo "<td>" . $fornecedor['CNPJ_fornecedor']  ."</td>";
                echo "<td>" . $fornecedor['telefone_fornecedor']  ."</td>";
            echo "</tr>";
        }
    
        require "baseTela/fimTabela.html";
        require "baseTela/fim.html";
    }
?>