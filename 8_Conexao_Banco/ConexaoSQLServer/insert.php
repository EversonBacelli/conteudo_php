<?php 

    function inserirFornecedor(int $id, $nome_fornecedor, $endereco_fornecedor, $CNPJ_Fornecedor, $telefone_fornecedor){
        require "conection.php";
        require "baseTela/inicio.html";
        $funcionou = false;

        $link = conexao();
        $sql = "INSERT INTO tbl_fornecedores_Bianca (id_fornecedor, nome_fornecedor, endereco_fornecedor,". 
        "CNPJ_fornecedor, telefone_fornecedor) VALUES " . 
        "(?,?,?,?,?)";
        $stmt = $link->prepare($sql);
        $stmt->execute([$id, $nome_fornecedor, $endereco_fornecedor, $CNPJ_Fornecedor, $telefone_fornecedor]);

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