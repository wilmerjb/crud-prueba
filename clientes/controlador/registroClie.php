<?php
if (!empty($_POST["btnRegistrar"])) {
    if (
        !empty($_POST["inputNombre"]) and
        !empty($_POST["inputCorreo"]) and
        !empty($_POST["inputContraseña"])
    ) {
        $nombre = $_POST["inputNombre"];
        $correo = $_POST["inputCorreo"];
        $contraseña = $_POST["inputContraseña"];
        $consulta = $conexion->query("SELECT * FROM clientes WHERE correo = '$correo'");
        if ($consulta->num_rows> 0) {
            echo '<div class="alert alert-warning">Correo ya existente</div>';
        } else {
            $sql = $conexion->query("INSERT INTO clientes (nombre_cliente, correo, contraseña) 
                    VALUES ('$nombre', '$correo', '$contraseña')");
            if ($sql === TRUE) {
                echo '<div class="alert alert-success m-2">Registro exitoso</div>';
            } else {
                echo '<div class="alert alert-warning m-2">Error al registrar</div>';
            }
        }
    } else {
        echo '<div class="alert alert-warning m-2">Dejaste campos vacios</div>';
    }
}
