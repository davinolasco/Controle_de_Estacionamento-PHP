<?php
$servidor = "localhost";
$usuario = "root";
$senha="";
$dbname = "estacionamento";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conexao){
    die("Houve um erro: ".mysqli_connect_error());
}

function selectAllVagas(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM vagas ORDER BY idvaga";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $vagas[] = $row;
    }
    return $vagas;
}

function selectIdModelo($id){
    $banco = abrirBanco();
    $sql = "SELECT * FROM vagas WHERE idvaga =".$id;
    $resultado = $banco->query($sql);
    $banco->close();
    $vagasUsadas = mysqli_fetch_assoc($resultado);
    return $vagasUsadas;
}

function abrirBanco(){
    $conexao = new mysqli("localhost", "root", "", "estacionamento");
    return $conexao;
}

function formatoData($data){
    $array = explode("-", $data);
    // $data = 2016-04-14
    // $array[0]= 2016, $array[1] = 04 e $array[2]= 14;
    $novaData = $array[2]."/".$array["1"]."/".$array[0];
    return $novaData;
}
?>