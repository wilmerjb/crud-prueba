<!-- conecion and registroPro -->
<?php
include "./modelo/conexionProv.php";
include "./controlador/registroProv.php";
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
          <h3 class="text-center text-secondary">Registro de Proveedor</h3>
          <div class="mb-3 p-2">
            <label for="inputCodigo" class="form-label">Codigo</label>
            <input type="number" class="form-control" id="inputCodigo" name="inputCodigo" max="">
          </div>
          <div class="mb-3 p-2">
            <label for="inputNombre" class="form-label">Nombre de Proveedor</label>
            <input type="text" class="form-control" id="inputNombre" name="inputNombre" maxlength="">
          </div>
          <div class="mb-3 p-2">
            <label for="inputProBruto" class="form-label">Producto Bruto</label>
            <input type="text" class="form-control" id="inputProBruto" name="inputProBruto" max="">
          </div>
          <div class="mb-3 p-2">
            <label for="inputDireccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" max="">
          </div>
          <div class="mb-3 p-2">
            <label for="inputTelefono" class="form-label">Telefono</label>
            <input type="number" class="form-control" id="inputTelefono" name="inputTelefono" max="">
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