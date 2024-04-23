<table class="table">
    <h1 class="text-center m-2">TABLA CLIENTES</h1>
    <button type="btn" class="btn btn-secondary  m-2 p-2"><a href="../vistaPrincipal.php/index_noAdmin.php" >REGRESAR</a></button>
    <thead>
        <tr>
            <th scope="col" class="bg-info">ID</th>
            <th scope="col" class="bg-info">Nombre</th>
            <th scope="col" class="bg-info">Correo <br></th>
            <th scope="col"class="bg-info">ROL</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./modelo/conexionClie.php";
        $sql = $conexion->query("SELECT * FROM clientes");
        while ($datos = $sql->fetch_object()) { ?>
            <tr>
                <th><?= $datos->id ?></th>
                <th><?= $datos->nombre_cliente ?></th>
                <td><?= $datos->correo ?></td>
                <td><?= $datos->rol ?></td>
            </tr>       
        <?php } ?>
    </tbody>
</table>