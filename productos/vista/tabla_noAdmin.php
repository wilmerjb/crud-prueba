<table class="table">
    <h1 class="text-center m-2 ">TABLA PRODUCTOS</h1>
    <button type="btn" class="btn btn-secondary  m-2 p-2"><a href="../vistaPrincipal.php/index_noAdmin.php" >REGRESAR</a></button>
    <thead>
        <tr>
            <th scope="col" class="bg-info">Codigo</th>
            <th scope="col" class="bg-info">Producto</th>
            <th scope="col" class="bg-info">Cantidad</th>
            <th scope="col" class="bg-info">Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./modelo/conexionPro.php";
        $sql = $conexion->query("SELECT * FROM productos"); 
        while ($datos = $sql->fetch_object()) { ?>
            <tr>
                <th><?= $datos->id_produc ?></th>
                <td><?= $datos->nom_produc ?></td>
                <td><?= $datos->cantidad ?></td>
                <td><?= $datos->precio ?></td>
                
            </tr>
        <?php } ?>
    </tbody>
</table>