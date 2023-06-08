<?php
include('autentica.php');
include_once('dataBaseConexion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar ternera</title>
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
                $nombreTernera = $_POST['nombreTernera'];
                $sql = "DELETE FROM `terneras` WHERE `terneras`.`id` = '$nombreTernera'";
                $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                echo "<label>Eliminacion de registro exitoso</label>";
                ?>
                <meta http-equiv="refresh" content="2;url=listaTerneras.php" />

            </div>
        </div>
    </div>
</body>

</html>