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
    <title>Lista Terneras</title>
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
                        <caption>Lista Terneras</caption>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Nombre de la madre</th>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT nombre_ternera, fecha_nacimiento, nombre_vaca FROM terneras LEFT JOIN vacas ON terneras.id_vaca = vacas.id";
                        $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                        while ($fila = mysqli_fetch_assoc($resul)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $fila['nombre_ternera'] ?></td>
                                    <td><?php echo $fila['fecha_nacimiento'] ?></td>
                                    <td><?php echo $fila['nombre_vaca'] ?></td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>

            <div class="login ">
                <fieldset>
                    <legend>Registrar de ternera </legend>
                    <form action="registroTernera.php" method="post">


                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>

                        <label for="fechaNacimiento">Fecha de Nacimiento
                            <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
                        </label>

                        <select name='nombreVaca' id='nombreVaca' required>
                            <option value="0">Nombre de la madre</option>
                            <?php
                            $sql = "SELECT * FROM `vacas` ORDER BY `vacas`.`fecha_parto` asc";
                            $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);

                            while ($fila = mysqli_fetch_assoc($resul)) {
                                echo "<option value = '$fila[id]'> $fila[nombre_vaca] </option>";
                            };
                            ?>
                        </select>

                        <button type="submit">Regitrar</button>

                    </form>
                </fieldset>

            </div>
        </div>
    </div>
</body>

</html>