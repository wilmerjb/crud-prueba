<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./componentes/css/styleinit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section>
        <form method="POST">
            <h1>INICIO DE SESIÓN</h1>
            <div class="primer">
                <div class="correoprin">
                    <input type="text" name="correocliente" id="correo" placeholder="Correo"  required >
                </div>
                <div class="correoprin">
                    <input type="password" name="password" id="contaseña" placeholder="Contraseña" required>
                </div>
                <div class="initbot">
                    <button type="btn" class="btn btn-primary "><a href="./clientes/registroinit.php">Registrar</a></button>
                </div>
                <div class="initbot">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </section>


</body>

</html>