<?php
    require '../conexao.php';
    $conexao = conectar();
    $id = $_POST['id_usuario'];
    

    $query = "DELETE FROM tbl_login WHERE id_usuario = $id";
    $inseriu = mysqli_query($conexao, $query) or die("Não inserido");
    
    if($inseriu == 1){
        echo 'Registro deletado com sucesso <BR>';
        echo "O registro com  id = $id foi apagado com sucesso";
    } else {
        echo "Registro não apagado.";
    }
    fecharConexao($conexao);

?>