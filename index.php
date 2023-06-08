<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <script src="https:kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <script defer src="index.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">

            <div class="login">
                <div class="binvenida">
                    <h1>Bienvenidos</h1>

                    <h3> Este portal le permitira llevar el control de su finca ganadera desde la comodidad de su casa
                    </h3>
                </div>

                <form action="inicioSesion.php" method="post">
                    <input type="text" name="nombre" placeholder="Nombre del usuario" required>

                    <input type="password" name="clave" placeholder="Contraseña" required>

                    <button type="submit" value="Ingresar">Ingresar</button>


                </form>
            </div>

        </div>
  
    </div>
</body>

</html>