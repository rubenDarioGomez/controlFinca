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
    <title>Registro terneras</title>
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
                $fechaNacimiento = $_POST['fechaNacimiento'];
                $nombreVaca = $_POST['nombreVaca'];

                $sql = "INSERT INTO `terneras` (`nombre_ternera`, `fecha_nacimiento`, `id_vaca`) VALUES ('$nombre', '$fechaNacimiento', '$nombreVaca');";
                $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                echo "<label>$nombre fue registrado con exito</label>";

                ?>
                <meta http-equiv="refresh" content="2;url=listaTerneras.php" />
            </div>
        </div>
    </div>
</body>

</html>