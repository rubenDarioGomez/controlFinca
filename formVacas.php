<?php
include 'autentica.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de vaca nueva</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <?php
            include 'menu.php';
            ?>
            <div class="login">
                <fieldset>
                    <legend>Registrar vaca</legend>
                    <form action="registroVaca.php" method="post" enctype="multipart/form-data">

                        <input type="text" id="nombre" name="nombre" required placeholder="Nombre">

                        <select name="estado" id="estado" required>
                            <option>Estado</option>
                            <option value="seca">Seca</option>
                            <option value="En ordeño">En ordeño</option>

                        </select>


                        <label for=" foto">Subir una Foto (opcional)
                            <input type="file" id="foto" name="foto" accept="image/*">
                        </label>

                        <button type="submit" value="registrar">Registrar</button>

                    </form>
                </fieldset>
            </div>
        </div>
</body>

</html>