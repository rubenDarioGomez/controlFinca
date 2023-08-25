<?php
  ob_start();
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

$mysql = new mysqli("localhost","root","","ganado");
if($mysql->connect_error)
die('Error en la conexion con la base de datos');

$registros = $mysql->query("SELECT nombre, clave FROM usuario
     WHERE nombre='$nombre' && clave='$clave'") or
    die($mysql->error);

    if ($reg = $registros->fetch_array())
    {echo "El usuario es valido";
        session_start();
        $_SESSION['usuarioX'] = $nombre;
        $_SESSION['claveX'] = $clave;
    header("Location: inicio.php");
    }
  else{
    echo 'usuario invalido';
    header("Location: index.php");
  }

  $mysql->close();
