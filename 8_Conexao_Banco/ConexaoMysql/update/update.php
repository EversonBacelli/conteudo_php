<?php
    require '../conexao.php';
    $conexao = conectar();
    $id = $_POST['id_usuario'];
    $senha = $_POST['senha_usuario'];

    $query = "UPDATE tbl_login SET senha = $senha WHERE id_usuario = $id";
    $inseriu = mysqli_query($conexao, $query) or die("Não inserido");
    
    if($inseriu == 1){
        echo 'Registro editado com sucesso <BR>';
        echo "Seu Registro com id = $id possui uma nova senha - $senha";
    } else {
        echo "Dado não editado";
    }
    fecharConexao($conexao);
?>