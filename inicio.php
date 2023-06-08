<?php
include('autentica.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de inicio</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="img1">
    <div class="main">

        <div class="container">

            <?php
            include('menu.php');
            ?>

            <div class="login">
                <h1>Menu principal </h1>
            </div>

            <a class="cajaEnlace cajaEnlaceVacas" href="listaVacas.php">
                <div>
                    <p>vacas</p>
                </div>
            </a>

            <a class="cajaEnlace cajaEnlaceVacas" href="formVacas.php">
                <div>
                    <p>Registro vacas</p>
                </div>
            </a>

            <a class="cajaEnlace cajaEnlaceTerneras" href="listaTerneras.php">
                <div>
                    <p>Terneras</p>
                </div>
            </a>

            <a class="cajaEnlace cajaEnlaceVacas" href="eliminarRegistros.php">
                <div>
                    <p>eliminar registros</p>
                </div>
            </a>


        </div>

    </div>
</body>

</html>