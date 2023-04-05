<?php
    require '../conexao.php';
    $conexao = conectar();
    
    $sql = "SELECT * FROM tbl_login";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";

    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {
        $id = $registro['id_usuario'];
        $senha = $registro['senha'];
        echo "Usuário n°: $id e sua senha é: $senha";
        echo "<BR>";
    }

    fecharConexao($conexao);
?>