<?php
session_start();
include_once("conexao.php");
include("menu.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM vagas WHERE idvaga = '$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Informações</title>
    <link rel="stylesheet" type="text/css" href="botoes.css"/>
</head>

<body>
    <center>
    <h1> Tela de edição </h1>
    <form method="POST" action="alterarCodigo.php">
        <label> Dono: </label>
        <input type="text" name="dono" value="<?php echo $row_usuario['dono']; ?>"/> <br /> <br>
        <label> Tipo: </label>
        <input type="text" name="tipo" value="<?php echo $row_usuario['tipo']; ?>"/> <br /> <br>
        <label> Marca: </label>
        <input type="text" name="marcas" value="<?php echo $row_usuario['marcas']; ?>"/> <br /> <br>
        <label> Modelo: </label>
        <input type="text" name="modelo" value="<?php echo $row_usuario['modelo']; ?>"/> <br /> <br>
        <label> Placa: </label>
        <input type="text" name="placa" value="<?php echo $row_usuario['placa']; ?>" maxlength="8"/> <br /> <br>
        <label> Cor: </label>
        <input type="text" name="cor" value="<?php echo $row_usuario['cor']; ?>"/> <br /> <br>
        
        <p><h3>Caso queira trocar a vaga de seu veículo: </h3></p>
        <label> Vaga atual: </label>
        <input type="text" name="vagaatual" value="<?php echo $row_usuario['idvaga']; ?>" readonly/> <br /> <br>
        <label> Vaga nova: </label>
        <input type="number" name="vaganova" value="<?php echo $row_usuario['idvaga']; ?>"/> <br /> <br>
        <input class = "botoes" type="submit" value="Atualizar" />
        <input class = "botoes" type="reset" value="Limpar" /> <br /> <br>

        <a href="http://localhost/estacionamento/index.php">Voltar para a página de cadastro</a>
    </form>
    </center>
    <?php
    include('listar.php');
    ?>
</body>

</html>