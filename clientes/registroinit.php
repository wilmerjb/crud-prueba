<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- librerias css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css componentes -->
    <link rel="stylesheet" href="../vistaPrincipal.php/vista/styleinit.css">
</head>
<?php
include "./modelo/conexionClie.php";
?>

<body>
    <section>
        <!-- formulario de inicio -->
        <form class="col-11 p-3 m-auto" method="post">
            <h3 class="text-center text-secondary">Registro de Cliente</h3>
            <?php
            include "./controlador/registroClie.php";
            ?>
            <div class="mb-3 p-2">
                <input type="text" class="form-control"  id="inputNombre" name="inputNombre" placeholder="Nombre" max="" required>
            </div>
            <div class="mb-3 p-2">
                <input type="text" class="form-control"  id="inputCorreo" name="inputCorreo" placeholder="Correo" max="" required>
            </div>
            <div class="mb-3 p-2">
                <input type="password" class="form-control"  id="inputContraseña" name="inputContraseña" placeholder="Contraseña" max="" required>
            </div>
            <div class="rol" >
                <input type="radio" name="rol" id="rol" value="usuario" required>Usuario
            </div>
            <div class="initbot">
                <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Registrar</button>
            </div>
            <div class="initbot">
                <a href="../initSesion.php"><button type="button" class="btn btn-secondary">Regresar</button></a>
            </div>
            </div>
        </form>

</body>

</html>