<?php
include('autentica.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de inseminacion</title>
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
                include_once('dataBaseConexion.php');
                $nombre = $_POST['nombreVaca'];
                $fechaInseminacion = $_POST['fechaInseminacion'];
                $fechaSecada = date("Y-m-d", strtotime($fechaInseminacion . "+ 7 month "));
                $fechaParto = date("Y-m-d", strtotime($fechaInseminacion . "+ 9 month "));

                $sql = "UPDATE `vacas` SET `fecha_inseminacion` = '$fechaInseminacion', `fecha_secada` = '$fechaSecada', `fecha_parto` = '$fechaParto' WHERE `vacas`.`id` = '$nombre'";
                $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                echo "<label> Registro exitoso </label>";
                ?>
            </div>
            <meta http-equiv="refresh" content="1;url=listaVacas.php" />
        </div>
    </div>
</body>

</html>