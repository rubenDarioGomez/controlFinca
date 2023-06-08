<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro nuevo</title>
    <link href="style.css" type="text/css" rel="stylesheet" />

</head>

<body>
    <div class="main">
        <div class="container">

            <?php
            // error_reporting(0);
            include("menu.php");
            include_once('dataBaseConexion.php');
            ?>
           

            <div class="login">
                <?php
                $nombre = $_POST['nombre'];
                $estado =  $_POST['estado'];
                $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

                    $sql = "INSERT INTO `vacas` (`nombre_vaca`, `estado`,`foto`) VALUES ('$nombre', '$estado', '$foto')";
                    $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                      echo "<label>Registro exitoso</label>";
                

                    
    
                ?>

                <meta http-equiv="refresh" content="2;url=listaVacas.php" />
            </div>
        </div>
    </div>
</body>

</html>

