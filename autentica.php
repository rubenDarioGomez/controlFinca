<?php

session_start();
if(!$_SESSION['usuarioX'] && !$_SESSION['claveX'])
{
    echo "La secion ha caducado";
    header("Location: index.php");
    
}   
?>
