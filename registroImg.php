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
    <title>Modificar o agregar foto</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="login">
                <?php
                $nombre = $_POST['nombre'];
                $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

                $sql = "UPDATE `vacas` SET `foto` = '$foto' WHERE `vacas`.`id` = '$nombre'";
                $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                echo "<label>Imagen agregada exitosamente</label>";
                ?>
                <meta http-equiv="refresh" content="2;url=buscarVaca.php" />
            </div>
        </div>
</body>

</html>