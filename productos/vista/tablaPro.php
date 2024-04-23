<script>
    function eliminar() {
        let respuesta = confirm("¿Esta seguro de eliminar?");
        return respuesta
    }
</script>
<table class="table">
    <button type="btn" class="btn btn-secondary  m-2 p-2"><a href="../vistaPrincipal.php/indexAdmin.php" >REGRESAR</a></button>
    <thead>
        <tr>
        <h1 class="text-center p-2 ">TABLA PRODUCTOS</h1>   
            <th scope="col" class="bg-info">Codigo</th>
            <th scope="col" class="bg-info">Producto</th>
            <th scope="col" class="bg-info">Cantidad</th>
            <th scope="col" class="bg-info">Precio</th>
            <th scope="col" class="bg-info">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./modelo/conexionPro.php";
        include "./controlador/eliminarPro.php";
        $sql = $conexion->query("SELECT * FROM productos"); 
        while ($datos = $sql->fetch_object()) { ?>
            <tr>
                <th><?= $datos->id_produc ?></th>
                <td><?= $datos->nom_produc ?></td>
                <td><?= $datos->cantidad ?></td>
                <td><?= $datos->precio ?></td>

                <!-- acciones  -->
                <td>
                    <button type="button" class="btn btn-warning my-2" data-bs-toggle="modal" data-bs-target="#editorModal?id=<?= $datos->id_produc ?>">Editar</button>
                    <a onclick="return eliminar()" href="indexProductos_admin.php?id=<?= $datos->id_produc ?>" class="btn btn-danger">ELIMINAR</a>
                </td>
                <?php
                include "./vista/modal_editarPro.php";
                ?>
            </tr>
        <?php } ?>
    </tbody>
</table>