<?php
include('autentica.php');
include_once('dataBaseConexion.php');

$sql = "SELECT * FROM `vacas`";
$resul   = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <?php
            include 'menu.php';
            ?>
            <div class="login">

                <h1>Eliminar vaca</h1>
                <form action="deleteVaca.php" method="post">
                    <select name="nombre" id="nombre">
                        <option value="0">Nombre Vaca</option>
                        <?php
                        $sql = "SELECT * FROM `vacas`";
                        $resul   = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);

                        while ($rowTotal = mysqli_fetch_assoc($resul)) {
                            echo "<option value = '$rowTotal[id]'> $rowTotal[nombre_vaca] </option>";
                        }
                        ?>
                    </select>

                    <button type="submit">Eliminar vaca</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>