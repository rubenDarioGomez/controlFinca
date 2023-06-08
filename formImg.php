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
    <title>Agregar foto</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <?php
            include 'menu.php';
            ?>
            <div class="login">
                <form action="registroImg.php" method="post" enctype="multipart/form-data">
                    <select name='nombre' id='nombre' required>
                        <option value="0">Nombre</option>
                        <?php
                        $sql2 = "SELECT * FROM `vacas`";
                        $resul2 = mysqli_query($conexion, $sql2) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);

                        while ($rowTotal2 = mysqli_fetch_assoc($resul2)) {
                            echo "<option value = '$rowTotal2[id]'>$rowTotal2[nombre_vaca]</option>";
                        };
                        ?>
                    </select>
                    <input type="file" name="foto" id="foto" required>
                    <button type="submit">Agregar foto</button>
                </form>
                </form>
            </div>
        </div>
    </div>
</body>

</html>