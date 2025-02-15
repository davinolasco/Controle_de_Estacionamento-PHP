<center>
	<nav id="menu">

		<ul style=" list-style: none">
			<h3>MENU</h3>
			<li>
				<a href="listar.php"> Listar veículos </a>
			</li>

			<li>
				<a href="pesquisarDonos.php"> Ver donos </a>
			</li>

			<?php
			//verificando se esta sessão existe
			if (empty($_SESSION['login'])) {
				//se ela não existir, continue na área restrita
				echo "<li><a href='login.php'>Área Restrita </a></li>";
				//senão, apresente apenas para o administrador as seguintes páginas
			} else {
				echo "<li><a href='index.php'>Cadastro de veículos</a></li>";
			}
			?>
		</ul>
	</nav>
</center>