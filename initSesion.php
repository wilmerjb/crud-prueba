
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- libreria css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- componentes css -->
    <link rel="stylesheet" href="./componentes/css/styleinit.css">
</head>
<?php
include "./verificacionSeguridad.php/modelp/conexionVer.php";

?>

<body>
    <section>
        <!-- inicio de login -->
        <form class="col-11 p-3 m-auto" method="post">
            <h2 class="text-center text-secondary p-5">INICIO DE SESEION</h>
            <?php
            include "./verificacionSeguridad.php/initVerificar.php";
            ?>
            <div class="mb-3 p-2">
                <input type="text" class="form-control" id="inputCorreo" name="inputCorreo" placeholder="correo">
            </div>
            <div class="mb-3 ">
                <input type="password" class="form-control" id="inputContraseña" name="inputContraseña" placeholder="contraseña">
            </div>
            <div class="initbot ">
                <button type="submit" class="btn btn-primary" name="btnIngresar" value="ok">Ingresar</button>
            </div>
            <div class="initbot ">
                <button type="btn" class="btn btn-primary "><a href="./clientes/registroinit.php">Registrar</a></button>
            </div>
        </form>
    </section>

  
    <!-- libreria js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>