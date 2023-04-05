<?php
    require '../conexao.php';
    $conexao = conectar();
    $id = $_POST['id_usuario'];
    $senha = $_POST['senha_usuario'];

    $query = "INSERT INTO tbl_login VALUES ($id,'" . $senha."')";
    $inseriu = mysqli_query($conexao, $query) or die("Não inserido");
    
    if($inseriu == 1){
        echo 'Registro inserido com sucesso <BR>';
        echo "Seu id = $id e a senha = $senha";
    } else {
        echo "Dados não inseridos com sucesso";
    }
    fecharConexao($conexao);

?>