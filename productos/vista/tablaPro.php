<table class="table">
    <thead>
        <tr>
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
                    <a href="indexProductos.php?id=<?= $datos->id_produc ?>" class="btn btn-danger">ELIMINAR</a>
                </td>
                <?php
                include "./vista/modal_editarPro.php";
                ?>
            </tr>
        <?php } ?>
    </tbody>
</table>