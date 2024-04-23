<?php
if (!empty($_POST["btnIngresar"])) {
    if (
        !empty($_POST["inputCorreo"])  and
        !empty($_POST["inputContraseña"])
    ) {
        $correo = $_POST["inputCorreo"];
        $contraseña = $_POST["inputContraseña"];
        $sql = $conexion->query("SELECT * FROM clientes WHERE correo='$correo' AND contraseña='$contraseña'");
        if ($datos = $sql->fetch_object()) {
            if ($datos->rol === 'admin') {
                header("location: ./vistaPrincipal.php/indexAdmin.php");
            }else{
                header("location: ./vistaPrincipal.php/index_noAdmin.php");
            }
        }else{
            echo '<div class="alert alert-danger">Error al entrar</div>';
        }
    }else{
        echo '<div class="alert alert-warning">Dejaste campos vacios</div>';
    }
}
