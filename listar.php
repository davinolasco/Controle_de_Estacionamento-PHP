<!DOCTYPE html>
<html lang="pt-br">

<?php
include_once("menu.php")
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar veículos</title>
    <link rel="stylesheet" type="text/css" href="css/botoes.css"/>
</head>
<body>
    <center>
    <h1>Listar veículos </h1>

    <?php 
    $busca ="";
        $mysqli = new mysqli("localhost","root","","estacionamento");
        //a variável está recebendo o select do bd
        if($resultado_sel = $mysqli->query("SELECT idvaga,dono,tipo,marcas,modelo,placa,cor FROM vagas WHERE dono like '".$busca."%'")){
            echo'<table border="1">';
            echo'<tr>';
            echo'<td>Vaga</td>';
            echo'<td>Dono</td>';
            echo'<td>Tipo</td>';
            echo'<td>Marca</td>';
            echo'<td>Modelo</td>';
            echo'<td>Placa</td>';
            echo'<td>Cor</td>';
            echo'<td>Apagar';
            echo'<td>Alterar';
            echo'</tr>';

            while($row = mysqli_fetch_assoc($resultado_sel)){
                echo'<tr>';
                echo'<td>'.$row['idvaga'].'</td>';
                echo'<td>'.$row['dono'].'</td>';
                echo'<td>'.$row['tipo'].'</td>';
                echo'<td>'.$row['marcas'].'</td>';
                echo'<td>'.$row['modelo'].'</td>';
                echo'<td>'.$row['placa'].'</td>';
                echo'<td>'.$row['cor'].'</td>';
                echo "<td> <a href='deletar.php?tipo=2&id=".$row['idvaga']."'>
                <img src='img/del.png' width='20' height='20' title='Excluir'/>
                </td>";
                echo "<td> <a href='alterar.php?tipo=2&id=".$row['idvaga']."'>
                <img src='img/edit.png' width='20' height='20' title='Alterar'/>
                </td>";
                echo'</tr>';
            
            }
            echo'</table>';
            //$resultado_sel->close();
        }
    ?>
    <br>
    <a href="gerarPDF.php">Clique para gerar um PDF da lista de veículos.</a>
    </center>
</body>

</html>