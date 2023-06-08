<?php
include('autentica.php');
include_once('dataBaseConexion.php');
$nombreVaca = $_POST['nombreVaca'];

$sql = "SELECT * FROM `vacas` WHERE nombre_vaca = '$nombreVaca' ";
$resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion general</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <?php
            include 'menu.php';
            ?>
            <div class="login">

                <div class="table">

                    <table>
                        <caption>Informacion general</caption>
                        <thead>

                            <tr>
                                <th>Numero</th>
                                <th>Nombre</th>
                            </tr>

                        </thead>

                        <?php
                        while ($rowTotal = mysqli_fetch_assoc($resul)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $rowTotal['id']; ?></td>
                                    <td><?php echo $rowTotal['nombre_vaca']; ?></td>
                                </tr>

                                <tr>
                                    <td colspan="2">

                                    <?php
                                    if($rowTotal['foto']!=NULL){
                                    ?>
                                        <img src="data:image/jpg;base64, <?php echo base64_encode($rowTotal['foto']);?>" alt="imagen de la vaca">
                                        <?php
                                        } else {
                                            echo "<div class='addImg'>
                                                    <a href='formImg.php'>Agregar imagen</a>
                                                 </div>";
                                        }
                                        ?>

                                    </td>
                                </tr>

                            </tbody>

                            <thead>
                                <tr>
                                    <th colspan="2">
                                        Fecha inseminacion
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td colspan="2"><?php echo $rowTotal['fecha_inseminacion'] ?></td>
                                </tr>
                                <thead>
                                    <tr>
                                        <th>Fecha de secado</th>
                                        <th>Fecha de parto</th>

                                    </tr>
                                </thead>
                            <tbody>
                                <tr>
                                    <th><?php echo $rowTotal['fecha_secada'] ?></th>
                                    <th><?php echo $rowTotal['fecha_parto'] ?></th>

                                </tr>

                                <thead>
                                    <tr>
                                        <th>Fecha ultimo parto</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                            <tbody>
                                <tr>
                                    <th><?php echo $rowTotal['ultimo_parto'] ?></th>
                                    <th><?php echo $rowTotal['estado'] ?></th>

                                </tr>
                            </tbody>
                        <?php
                        }

                        ?>
                    </table>
                </div>


            </div>
        </div>

    </div>


</body>

</html>