<?php
    session_start();
    include_once("conexao.php");
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if(!empty($id)){
        $excluir = "DELETE FROM vagas WHERE idvaga='$id'";
        $resultado = mysqli_query($conexao, $excluir);
    }
    header("Location:index.php");
?>
