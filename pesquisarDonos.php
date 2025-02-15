<?php
//session_start();
include_once("conexao.php");
include('menu.php');
?>

<html>

<head>
    <title>Listar donos</title>
    <link rel="stylesheet" type="text/css" href="css/botoes.css"/>
</head>

<body>
    <center>
    <h1>Pesquisar donos</h1>
    <form method="POST" action="">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome do dono">
        <input class = "botoes" name="pesquisar" type="submit" value="Pesquisar">
    </form>

    <?php

    $pesquisar = filter_input(INPUT_POST, 'pesquisar', FILTER_SANITIZE_STRING);
    if ($pesquisar) {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        //as porcentagens ao lado da variável nome, é para que sejam exibidas todos os
        //cadastros. Caso tenham 3 pessoas com Maria no nome, vai aparecer. Sem as porcentagens,
        //irá aparecer apenas 1 por vez.
        $Usuario = "SELECT * FROM vagas WHERE dono LIKE '%$nome%'";
        $usuario = mysqli_query($conexao, $Usuario);

        echo '<table border="5">';
        echo '<tr>';
        echo '<td>Número da vaga</td>';
        echo '<td>Dono</td>';
        echo '<td>Tipo</td>';
        echo '<td>Marca</td>';
        echo '<td>Modelo</td>';
        echo '<td>Placa</td>';
        echo '<td>Cor</td>';
        echo '</tr>';

        while ($row_usuario = mysqli_fetch_assoc($usuario)) {
            echo '<tr>';
            echo '<td>' . $row_usuario['idvaga'] . '</td>';
            echo '<td>' . $row_usuario['dono'] . '</td>';
            echo '<td>' . $row_usuario['tipo'] . '</td>';
            echo '<td>' . $row_usuario['marcas'] . '</td>';
            echo '<td>' . $row_usuario['modelo'] . '</td>';
            echo '<td>' . $row_usuario['placa'] . '</td>';
            echo '<td>' . $row_usuario['cor'] . '</td>';

            if (!empty($_SESSION['login'])) {
                echo "<td><a href='excluir.php?tipo=2&id=" . $row['idvaga'] . "'><img src='img/del.png' width='20' height='20' title='Excluir' /></td>";
                echo "<td><a href='alterar.php?tipo=2&id=" . $row['idvaga'] . "'><img src='img/edit.png' width='20' height='20' title='Alterar' /></td>";
            }
        }
        echo '</table>';
    }
    ?>
    <br>
    <a href="index.php">Voltar para a tela de cadastro</a>
    </center>
</body>

</html>