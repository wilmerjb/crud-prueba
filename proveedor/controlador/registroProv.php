<?php
if (!empty($_POST["btnRegistrar"])) {
    if (
        !empty($_POST["inputCodigo"]) and
        !empty($_POST["inputNombre"]) and
        !empty($_POST["inputProBruto"]) and
        !empty($_POST["inputDireccion"]) and
        !empty($_POST["inputTelefono"])
    ) {
        $codigo = $_POST["inputCodigo"];
        $nombre = $_POST["inputNombre"];
        $pro_bruto = $_POST["inputProBruto"];
        $direccion = $_POST["inputDireccion"];
        $telefono = $_POST["inputTelefono"];
        $consulta = $conexion->query("SELECT * FROM proveedor WHERE id_proveedor=$codigo");
        if ($consulta->num_rows > 0) {
            echo '<div class="alert alert-warning m-2">El codigo ya esta registrado</div>';
        } else {
            $sql = $conexion->query("INSERT INTO proveedor(id_proveedor, nombre_proveedor, nom_encargo, direccion_proveedor, telefono_proveedor)
                VALUES($codigo, '$nombre', '$pro_bruto', '$direccion', $telefono)");
            if ($sql === TRUE) {
                echo '<div class="alert alert-success m-2">Registrado con exito </div>';
            } else {
                echo '<div class="alert alert-warning m-2">Error al registrar</div>';
            }
        }
    } else {
        echo '<div class="alert alert-warning m-2">Dejaste campos vacios</div>';
    }
}
