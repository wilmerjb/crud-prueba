<?php
if (!empty($_POST["btnEditar"])) {
    if (
        !empty($_POST["inputNombre"]) and
        !empty($_POST["inputCorreo"])  and
        !empty($_POST["inputContraseña"]) and 
        !empty($_POST["rol"])
    ) {
        $nombre = $_POST["inputNombre"];
        $correo = $_POST["inputCorreo"];
        $contraseña = $_POST["inputContraseña"]; 
        $rol = $_POST["rol"];
        $sql = $conexion->query("UPDATE clientes SET nombre_cliente='$nombre', correo='$correo', contraseña='$contraseña' , rol='$rol'
                 WHERE nombre_cliente ='$nombre'");
        if($sql === TRUE){
            header('Location: ./indexClientes_admin.php');
        }else{
            echo '<div class="alert alert-warning m-2">Error al editar</div>';
        }
    }else{
        echo '<div class="class="alert alert-warning m-2">Dejaste campos vacios</div>'; 
    }
}
