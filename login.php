<?php
session_start();
include_once("conexao.php");
?>
<html>

<head>
	<title> Cadastro de donos de veículos</title>
	<link rel="stylesheet" type="text/css" href="css/botoes.css"/>
</head>
<?php



$msg1 = "";
$login = "";
$senha = "";
//isset verifica se login e senha existentem ou se eles não possui o valor igual a NULL
//informa se as variáveis foram iniciadas, retornando true or false
if ((isset($_POST['login'])) && (isset($_POST['senha']))) {
	//busca no banco de dados
	$resultado_select = "SELECT login, senha FROM administrador WHERE login='" . $_POST['login'] . "' and senha = '" . $_POST['senha'] . "'";
	$resultado_usuario = mysqli_query($conexao, $resultado_select);
	$resultado = mysqli_fetch_assoc($resultado_usuario);
	//verifica se login e senha são iguais	
	if (isset($resultado)) {
		$_SESSION['login'] = $resultado['login'];
		//estou redirecionando ao realizar o login        
		header("Location: index.php");
		//se não forem iguais, exibe a mensagem
		//}else{
		//	javascript:alert('Email ou senha inválidos!');
		//	javascript:window.location='index.php';
		//$mensg1 = "Usuário ou senha inválidos";
	}
}
?>

<body>
	<center>
	<div id = "tela-login">
	<h2> Área de login</h2>
	<form action="" method="post">
		<!-- DADOS DE LOGIN -->
		<label for="login">Login: </label> <br>
		<input type="text" name="login" id="login"> <br>
		<label for="senha">Senha: </label> <br>
		<!--password é a máscara para ficar as bolinhas-->
		<input type="password" name="senha" id="senha">
		<?php echo $msg1; ?>
		<p>
		<input class = "botoes" type="submit" value="Entrar">
		<input class = "botoes" type="reset" value="Limpar">
		</p>
		<img id = "qrcode" src = "img/qrcode.png"/>
	</form>
	</div>
	</center>
</body>

</html>