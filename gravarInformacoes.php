<?php
session_start();
include_once("conexao.php");
?>

<?php
    $idvaga = filter_input(INPUT_POST, 'idvaga', FILTER_SANITIZE_NUMBER_INT);
    $dono = filter_input(INPUT_POST, 'dono', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    $marca = filter_input(INPUT_POST, 'marcas', FILTER_SANITIZE_STRING);
    $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
    $placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
    $cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
    
    $resultado = "INSERT INTO vagas (idvaga, dono, tipo, marcas, modelo, placa, cor) VALUES ('$idvaga', '$dono', '$tipo', '$marca', '$modelo', '$placa', '$cor')";
    $resultado_banco = mysqli_query($conexao, $resultado);
    header("Location:index.php");
?>    