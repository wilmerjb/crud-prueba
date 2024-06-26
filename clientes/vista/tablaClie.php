<table class="tableClientes">
    <thead>
        <tr>
            <th scope="col" class="bg-info">ID</th>
            <th scope="col" class="bg-info">Nombre</th>
            <th scope="col" class="bg-info">Correo</th>
            <th scope="col" class="bg-info">Contraseña</th>
            <th scope="col" class="bg-info">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./modelo/conexionClie.php";
        include "./controlador/eliminarClie.php";
        $sql = $conexion->query("SELECT * FROM clientes");
        while ($datos = $sql->fetch_object()) { ?>
            <tr>
                <th><?= $datos->id ?></th>
                <th><?= $datos->nombre_cliente ?></th>
                <td><?= $datos->correo ?></td>
                <td><?= $datos->contraseña ?></td>

                <!-- acciones  -->
                <td>
                    <button type="button" class="btn btn-warning my-2" data-bs-toggle="modal" data-bs-target="#clienteModal?id=<?= $datos->id ?>">Editar</button>
                    <a href="./indexClientes.php?id=<?= $datos->id ?>" class="btn btn-danger">ELIMINAR</a>
                </td>
                <?php
                include "./vista/editor_modalClie.php";
                ?>
            </tr>       
        <?php } ?>
    </tbody>
</table>