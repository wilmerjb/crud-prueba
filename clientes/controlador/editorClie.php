<?php
if (!empty($_POST["btnEditar"])) {
    if (
        !empty($_POST["inputNombre"]) and
        !empty($_POST["inputCorreo"])  and
        !empty($_POST["inputContraseña"]) 
    ) {
        $nombre = $_POST["inputNombre"];
        $correo = $_POST["inputCorreo"];
        $contraseña = $_POST["inputContraseña"]; 
        $sql = $conexion->query("UPDATE clientes SET nombre_cliente='$nombre', correo='$correo', contraseña='$contraseña'
                 WHERE nombre_cliente ='$nombre'");
        if($sql === TRUE){
            echo '<div class="alert alert-success m-2">Producto editado</div>';
        }else{
            echo '<div class="alert alert-warning m-2">Error al editar</div>';
        }
    }else{
        echo '<div class="class="alert alert-warning m-2">Dejaste campos vacios</div>'; 
    }
}
