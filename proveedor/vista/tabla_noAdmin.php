<table class="table">
    <h1 class="text-center m-2">TABLA PROVEEDORES</h1>
    <button type="btn" class="btn btn-secondary m-2 p-2"><a href="../vistaPrincipal.php/index_noAdmin.php">REGRESAR</a></button>
    <thead>
        <tr>
            <th scope="col" class="bg-info">Codigo</th>
            <th scope="col" class="bg-info">Nombre</th>
            <th scope="col" class="bg-info">Producto Bruto</th>
            <th scope="col" class="bg-info">Direccion</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./modelo/conexionProv.php";
        $sql = $conexion->query("SELECT * FROM proveedor");
        while ($datos = $sql->fetch_object()) { ?>
            <tr>
                <th><?= $datos->id_proveedor ?></th>
                <td><?= $datos->nombre_proveedor ?></td>
                <td><?= $datos->nom_encargo ?></td>
                <td><?= $datos->direccion_proveedor ?></td>

            </tr>
        <?php } ?>
    </tbody>
</table>