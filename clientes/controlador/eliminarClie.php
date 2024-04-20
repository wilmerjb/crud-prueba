<?php   
    if(!empty($_GET["id"])){
        $id = $_GET["id"];
        $sql = $conexion->query("DELETE FROM clientes WHERE id = $id");
        if($sql === TRUE){
            echo '';
        }else{
            echo '<div class="alert alert-warning m-2">Error al eliminar<>';
        }
    }