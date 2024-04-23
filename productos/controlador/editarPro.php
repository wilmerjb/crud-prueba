<?php
if (!empty($_POST["btnEditar"])) {
    if (
        !empty($_POST["inputCodigo"]) and
        !empty($_POST["inputNombre"])  and
        !empty($_POST["inputCantidad"]) and
        !empty($_POST["inputPrecio"])
    ) {
        $codigo = $_POST["inputCodigo"];
        $nombre = $_POST["inputNombre"];
        $cantidad = $_POST["inputCantidad"]; 
        $precio = $_POST["inputPrecio"];
        $sql = $conexion->query("UPDATE productos SET id_produc='$codigo', nom_produc='$nombre', cantidad=$cantidad, precio=$precio WHERE id_produc='$codigo'");
        if($sql === TRUE){
           header('Location: ./indexProductos_admin.php');
        }else{
            echo '<div class="alert alert-warning m-2">Error al editar</div>';
        }
    }else{
        echo '<div class="class="alert alert-warning m-2">Dejaste campos vacios</div>'; 
    }
}
