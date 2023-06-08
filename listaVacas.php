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

            <div class="login">

                <form action="buscarVaca.php" method="post">
                    <fieldset>
                        <legend>Buscar vaca</legend>
                        <select name='nombreVaca' id='nombreVaca'>
                            <option>Nombre</option>
                            <?php
                            $sql2 = "SELECT * FROM `vacas` ORDER BY `vacas`.`fecha_parto` asc";
                            $resul2 = mysqli_query($conexion, $sql2) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);

                            while ($rowTotal2 = mysqli_fetch_assoc($resul2)) {
                                echo "<option value = '$rowTotal2[nombre_vaca]'>$rowTotal2[nombre_vaca]</option>";
                            };
                            ?>
                        </select>
                        <button>Buscar</button>
                    </fieldset>

                </form>
            </div>

            <div class="login">
                <form action="modificarEstado.php" method="post">
                    <fieldset>
                        <legend>Modificar estado</legend>
                        <!-- <label for="">Modificar estado</label> -->
                        <select name='nombreVaca' id='nombreVaca'>
                            <option>Nombre vaca</option>
                            <?php
                            $sql2 = "SELECT * FROM `vacas` ";
                            $resul2 = mysqli_query($conexion, $sql2) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);

                            while ($rowTotal2 = mysqli_fetch_assoc($resul2)) {
                                echo "<option value = '$rowTotal2[id]'>$rowTotal2[nombre_vaca]</option>";
                            };
                            ?>
                        </select>

                        <select name='estado' id='estado'>
                            <option value="0">estado</option>
                            <option value="en ordeño">en ordeño</option>
                            <option value="seca">seca</option>


                        </select>
                        <button>Modificar</button>
                    </fieldset>
                </form>
            </div>

            <div class="login ">
                <form action="registroParto.php" method="post">
                    <fieldset>
                        <legend>Registrar parto</legend>
                        <select name="nombreVaca" id="nombreVaca">
                            <option value="0">Nombre de la vaca</option>
                            <?php
                            $sql = "SELECT id, nombre_vaca FROM vacas";
                            $resul   = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                            while ($fila = mysqli_fetch_assoc($resul)) {
                                echo "<option value='$fila[id]'>" . $fila['nombre_vaca'] . "</option>";
                            }
                            ?>
                        </select>
                        <label for="">Fecha</label>
                        <input type="date" name="fechaParto" id="fechaParto" required>

                        <button type="submit">Registrar</button>
                    </fieldset>
                </form>
            </div>

            <div class="login mb">

                <form action="registroInseminacion.php" method="post">
                    <fieldset>
                        <legend>Registrar inseminacion</legend>
                        <select name='nombreVaca' id='nombreVaca'>
                            <option value="0">Nombre vaca</option>
                            <?php
                            $sql = "SELECT * FROM `vacas`";
                            $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);

                            while ($rowTotal = mysqli_fetch_assoc($resul)) {
                                echo "<option value = '$rowTotal[id]'>$rowTotal[nombre_vaca]</option>";
                            };
                            ?>
                        </select>
                        <label for="">Fecha</label>
                        <input type="date" name="fechaInseminacion" id="fechaInseminacion" required>
                        <button type="sub">Registrar</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</body>

</html>