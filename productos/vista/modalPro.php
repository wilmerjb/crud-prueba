<!-- conecion and registroPro -->
<?php
include "./modelo/conexionPro.php";
include "./controlador/registroPro.php";
?>
<!-- Button producto -->
<button type="button" class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Nuevo <i class="fa-solid fa-circle-plus"></i>
  <br>
</button>

<!-- Modal desplegable-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="col-11 p-3 m-auto" method="post">
          <h3 class="text-center text-secondary">Registro de Producto</h3>
          <div class="mb-3 p-2">
            <label for="inputCodigo" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="inputCodigo" name="inputCodigo" max="">
          </div>
          <div class="mb-3 p-2">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputNombre" name="inputNombre" maxlength="">
          </div>
          <div class="mb-3 p-2">
            <label for="inputCantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="inputCantidad" name="inputCantidad" max="">
          </div>
          <div class="mb-3 p-2">
            <label for="inputPrecio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="inputPrecio" name="inputPrecio" max="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary m-end" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary m-end" name="btnRegistrar" value="ok">Registrar</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>