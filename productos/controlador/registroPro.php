<?php
if (!empty($_POST["btnRegistrar"])) {
    if (
        !empty($_POST["inputCodigo"]) and
        !empty($_POST["inputNombre"]) and
        !empty($_POST["inputCantidad"]) and
        !empty($_POST["inputPrecio"])
    ) {
        $codigo = $_POST["inputCodigo"];
        $nombre = $_POST["inputNombre"];
        $cantidad = $_POST["inputCantidad"];
        $precio = $_POST["inputPrecio"];
        $consulta = $conexion->query("SELECT * FROM productos WHERE id_produc='$codigo'");
        if ($consulta->num_rows > 0) {
            echo '<div class="alert alert-warning m-2">El codigo ya esta registrado</div>';
        }else{    
            $sql = $conexion->query("INSERT INTO productos (id_produc, nom_produc, cantidad, precio) 
                VALUES ('$codigo', '$nombre', $cantidad, $precio)");
            if ($sql === TRUE) {
                echo '<div class="alert alert-success m-2">Registro exitoso</div>';
            } else {
                echo '<div class?="alert alert-warning m-2">Error al registrar</div>';
            }
        }
    } else {
        echo '<div class="alert alert-warning m-2">Dejaste campos vacios</div>';
    }
}
