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
    <title>Consulta general</title>
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

                        <caption> Cantidad de vacas Registradas</caption>
                        <thead>
                            <tr>
                                <th>Vacas en ordeño</th>
                                
                            </tr>
                        </thead>
                        <?php 
                        $sql = "SELECT COUNT(*) FROM `vacas` WHERE estado = 'en ordeño'";
                        $resul   = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                        while ($rowTotal = mysqli_fetch_assoc($resul)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $rowTotal['COUNT(*)'] ?></td>
                                </tr>
                            </tbody>
                            
                        <?php } ?>
                    
                        <thead>
                            <tr>
                                <th>Vacas secas</th>
                                
                            </tr>
                        </thead>
                        <?php 
                        $sql = "SELECT COUNT(*) FROM `vacas` WHERE estado = 'seca'";
                        $resul   = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                        while ($rowTotal = mysqli_fetch_assoc($resul)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $rowTotal['COUNT(*)'] ?></td>
                                </tr>
                            </tbody>
                            
                        <?php } ?>

                        <thead>
                            <tr>
                                <th>Total de vacas</th>
                                
                            </tr>
                        </thead>
                        <?php 
                        $sql = "SELECT COUNT(*) FROM `vacas`";
                        $resul   = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                        while ($rowTotal = mysqli_fetch_assoc($resul)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $rowTotal['COUNT(*)'] ?></td>
                                </tr>
                            </tbody>
                            
                        <?php } ?>
                    </table>
                </div>
            </div>

            <div class="login">

                <div class="table">

                    <table>

                        <caption>Lista de vacas en ordeño</caption>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha inseminacion</th>
                                <th>Fecha secada</th>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT * FROM `vacas` WHERE `estado` = 'En ordeño' ORDER BY `vacas`.`fecha_parto` asc";
                        $resul   = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                        while ($rowTotal = mysqli_fetch_assoc($resul)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $rowTotal['nombre_vaca'] ?></td>
                                    <td><?php echo $rowTotal['fecha_inseminacion'] ?></td>
                                    <td><?php echo $rowTotal['fecha_secada'] ?></td>
                                </tr>
                            </tbody>

                        <?php } ?>
                    </table>
                </div>
            </div>

            <div class="login">

                <div class="table">
                    <table>
                        <caption>Lista de vacas secas</caption>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha Parto</th>

                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT * FROM `vacas` WHERE `estado` = 'seca' ORDER BY `vacas`.`fecha_parto` asc";
                        $resul   = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                        while ($rowTotal = mysqli_fetch_assoc($resul)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $rowTotal['nombre_vaca'] ?></td>
                                    <td><?php echo $rowTotal['fecha_parto'] ?></td>
                                </tr>
                            </tbody>

                        <?php } ?>
                    </table>
                </div>
            </div>

        </div>
    </div>

</body>

</html>