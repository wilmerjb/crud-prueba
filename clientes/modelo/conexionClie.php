<?php
    $conexion = new mysqli("localhost","root","","baseprueba");

    if ($conexion->connect_error) {
        die("Error al conectar a la base de datos: " . $conexion->connect_error);
    }
?>