<script>
    function eliminar() {
        let respuesta = confirm("¿Esta seguro de eliminar?");
        return respuesta
    }
</script>
<table class="table">
    <button type="btn" class="btn btn-secondary m-2 p-2"><a href="../vistaPrincipal.php/indexAdmin.php">REGRESAR</a></button>
    <thead>
        <tr>
            <h1 class="text-center p-2 ">TABLA PROVEEDORES </h1>
            <th scope="col" class="bg-info">Codigo</th>
            <th scope="col" class="bg-info">Nombre</th>
            <th scope="col" class="bg-info">Producto Bruto</th>
            <th scope="col" class="bg-info">Direccion</th>
            <th scope="col" class="bg-info">Telefono</th>
            <th scope="col" class="bg-info">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./modelo/conexionProv.php";
        include "./controlador/eliminarProv.php";
        $sql = $conexion->query("SELECT * FROM proveedor");
        while ($datos = $sql->fetch_object()) { ?>
            <tr>
                <th><?= $datos->id_proveedor ?></th>
                <td><?= $datos->nombre_proveedor ?></td>
                <td><?= $datos->nom_encargo ?></td>
                <td><?= $datos->direccion_proveedor ?></td>
                <td><?= $datos->telefono_proveedor ?></td>

                <!-- acciones  -->
                <td>
                    <button type="button" class="btn btn-warning my-2" data-bs-toggle="modal" data-bs-target="#editorModal?id=<?= $datos->id_proveedor ?>">Editar</button>
                    <a onclick="return eliminar()" href="indexProveedor_admin.php?id=<?= $datos->id_proveedor ?>" class="btn btn-danger">ELIMINAR</a>
                </td>
                <?php
                include "./vista/modal_editor.php";
                ?>
            </tr>
        <?php } ?>
    </tbody>
</table>