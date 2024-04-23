<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <!-- librerias css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css componentes -->
    <link rel="stylesheet" href="../componentes/css/styleinit.css">
</head>

<body>
    <h1 class="text-center p-5">WIKI TIENDA</h1>
    <!-- button hacia productos -->
    <div class="initbot">
        <button type="btn" class="btn btn-primary "><a href="../productos/indexProductos_noAdmin.php">productos</a></button>
    </div>
    <!-- button hacia proveedor -->
    <div class="initbot">
        <button type="btn" class="btn btn-primary"><a href="../proveedor/indexProveedor_noAdmin.php">proveedores</a></button>
    </div>
    <!-- button hacia clientes -->
    <div class="initbot">
        <button type="btn" class="btn btn-primary"><a href="../clientes/indexClientes_noAdmin.php">clientes</a></button>
    </div>
    <div class="initbot">
        <a href=" ./controlador/cerrarSesion.php" class="btn btn-danger">cerrarSesion</a>
    </div>

   
    <!-- libreria js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>