<?php
include('autentica.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso parto</title>
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
                $id = $_POST['nombreVaca'];
                $fechaParto = $_POST['fechaParto'];

                $sql = "UPDATE `vacas` SET `ultimo_parto` = '$fechaParto', `estado` = 'en ordeño' WHERE `vacas`.`id` = '$id'";
                $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                echo "<label>Registro exitoso</label>";
                ?>
                <meta http-equiv="refresh" content="3;url=listaVacas.php" />
            </div>
        </div>
    </div>
</body>

</html>