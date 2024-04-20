<?php
if (!empty($_POST["btnEditar"])) {
    if (
        !empty($_POST["inputCodigo"]) and
        !empty($_POST["inputNombre"])  and
        !empty($_POST["inputProBruto"]) and
        !empty($_POST["inputDireccion"]) and
        !empty($_POST["inputTelefono"])
    ) {
        $codigo = $_POST["inputCodigo"];
        $nombre = $_POST["inputNombre"];
        $pro_bruto = $_POST["inputProBruto"]; 
        $direccion = $_POST["inputDireccion"];
        $telefono = $_POST["inputTelefono"];
        $sql = $conexion->query("UPDATE proveedor SET id_proveedor=$codigo, nombre_proveedor='$nombre', nom_encargo='$pro_bruto', direccion_proveedor='$direccion', telefono_proveedor=$telefono
                 WHERE id_proveedor='$codigo'");
        if($sql === TRUE){
            echo '<div class="alert alert-success m-2">Proveedor editado</div>';
        }else{
            echo '<div class="alert alert-warning m-2">Error al editar</div>';
        }
    }else{
        echo '<div class="class="alert alert-warning m-2">Dejaste campos vacios</div>'; 
    }
}
