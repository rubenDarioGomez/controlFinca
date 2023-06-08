<?php
include('autentica.php');
include_once('dataBaseConexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar vaca</title>
</head>

<body>
    <div class="main">
        <div class="container">
            <?php
            include 'menu.php';
            ?>
            <div class="login">
                <?php
                $nombre = $_POST['nombre'];
                $sql = "DELETE FROM vacas WHERE `vacas`.`id` = '$nombre'";
                $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                echo "<label>Eliminacion de registro exitoso</label>";
                ?>
                <meta http-equiv="refresh" content="2;url=listaVacas.php" />

            </div>
        </div>
    </div>
</body>

</html>