<?php
include('autentica.php');
include('menu.php');
include_once('dataBaseConexion.php');
$nombre = $_POST['nombreVaca'];
$estado = $_POST['estado'];


$sql = "UPDATE `vacas` SET `estado` = '$estado' WHERE `vacas`.`id` = '$nombre'";
$resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar estado</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <?php
            include 'menu.php';
            ?>
            <div class="login">
                <?php

                echo "<label> Registro exitoso </label>";
                ?>
                <meta http-equiv="refresh" content="2;url=listaVacas.php" />

            </div>
        </div>
    </div>
</body>

</html>