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
            header("location: ./vistaPrincipal.php/indexClientes.php");
        } else {
            echo '<div class="alert alert-danger">Contraseña erronea</div>';
        }
    }else{
        echo '<div class="alert alert-warning">Dejaste campos en blanco</div>';
    }
}
