<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM productos WHERE id_produc= '$id'");
    if ($sql === TRUE) {
        echo '';
    } else {
        echo '<div class="alert alert-warning">Error al eliminar</div>';
    }   
}
