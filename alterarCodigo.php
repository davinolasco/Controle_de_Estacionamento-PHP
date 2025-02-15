<?php 
    session_start();
    include_once("conexao.php");
    $vagaatual = filter_input(INPUT_POST, 'vagaatual', FILTER_SANITIZE_NUMBER_INT);
    $vaganova = filter_input(INPUT_POST, 'vaganova', FILTER_SANITIZE_NUMBER_INT);
    $dono = filter_input(INPUT_POST, 'dono', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    $marca = filter_input(INPUT_POST, 'marcas', FILTER_SANITIZE_STRING);
    $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
    $placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
    $cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
    
    $result_usuario = "UPDATE vagas SET idvaga = '$vaganova', dono = '$dono', tipo = '$tipo', marcas = '$marca', modelo = '$modelo', placa = '$placa', cor = '$cor' WHERE idvaga = '$vagaatual'";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);

    header("Location: index.php");
?>