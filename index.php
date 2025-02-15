<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include('conexao.php');
    session_start();
    if (empty($_SESSION['login'])){
		header("Location: login.php");
	}
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/botoes.css"/>
    <title>Cadastrar Veículo</title>
</head>

<body>
    
    <?php
    include('menu.php');
    ?>
    <center>
    <h1> Tela de cadastro de veículos </h1>
    <form method="POST" action="gravarInformacoes.php">
        <label> Vaga: </label>
        <input type="number" name="idvaga" placeholder="Número da vaga" /> <br /> <br>
        <label> Dono: </label>
        <input type="text" name="dono" placeholder="Seu nome completo" /> <br /> <br>
        <label> Tipo: </label>
        <input type="text" name="tipo" placeholder="Carro, moto, outro" /> <br /> <br>
        <label> Marca: </label>
        <input type="text" name="marcas" placeholder="Fabricante do veículo" /> <br /> <br>
        <label> Modelo: </label>
        <input type="text" name="modelo" placeholder="Modelo do veículo" /> <br /> <br>
        <label> Placa: </label>
        <input type="text" name="placa" placeholder="Placa do veículo" maxlength="8"/> <br /> <br>
        <label> Cor: </label>
        <input type="text" name="cor" placeholder="Cor do veículo" /> <br /> <br>
        <input class = "botoes" type="submit" value="Cadastrar" />
        <input class = "botoes" type="reset" value="Limpar" />

    </form>
    </center>
    <?php
    include('listar.php');
    ?>
</body>

</html>