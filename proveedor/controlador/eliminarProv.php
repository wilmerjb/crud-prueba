<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM proveedor WHERE id_proveedor = $id");
    if ($sql === TRUE) {
        echo '';
    } else {
        echo '<div alert alert-warning m-2>Error al eliminar</div>';
    }
}
