<?php 

    function atualizarFornecedor(int $id){
        require "conection.php";
        require "baseTela/inicio.html";
        $funcionou = false;
        $update = montarStringSQL($nome, $endereco, $cnpj, $telefone);



        $link = conexao();
        $sql = "UPDATE tbl_fornecedores_Bianca SET $update WHERE id_fornecedor=$id";
        "nome_fornecedor=$nome, endereco_fornecedor=$endereco,CNPJ_fornecedor=$cnpj, telefone_fornecedor=$telefone";
        
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


<?php
    function montarStringSQL($nome, $endereco, $cnjp, $telefone){
        $query = "";
        // inserindo nome na string
        if($nome != ""){
            $query = $query ."nome_fornecedor=". $nome;
        }
        // inserindo endereço na string
        if($endereco != ""){
            if($query != ""){
                $query = $query . ", endereco_fornecedor=" . $endereco;
            } else {
                $query = $query ."endereco_fornecedor=" . $endereco;
            }
        }
        // inserindo cnpj na string
        if($cnjp != ""){
            if($query != ""){
                $query = $query . ", CNPJ_fornecedor=" . $cnjp;
            } else {
                $query = $query . "CNPJ_fornecedor=" . $cnjp;
            }
        }
        // inserindo telefone na string
        if($telefone != ""){
            if($query != ""){
                $query = $query . ", telefone_fornecedor=" . $telefone;
            } else {
                $query = $query . "telefone_fornecedor=" . $telefone;
            }
        }

        return $query;
    }
?>




