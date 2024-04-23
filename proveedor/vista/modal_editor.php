<!-- conecion and editorProv -->
<?php
include "./modelo/conexionProv.php";
include "./controlador/editorProv.php";
?>
<!-- Modal desplegable-->
<div class="modal fade" id="editorModal?id=<?= $datos->id_proveedor ?>" tabindex="-1" aria-labelledby="editorModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editorModalLabel">Editor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="col-11 p-3 m-auto" method="post">
          <h3 class="text-center text-secondary">Editor de Proveedores</h3>
          <div class="mb-3 p-2">
            <label for="inputCodigo" class="form-label">Codigo</label>
            <input type="number" class="form-control" id="inputCodigo" name="inputCodigo" value="<?= $datos->id_proveedor?>" max="">
          </div>
          <div class="mb-3 p-2">
            <label for="inputNombre" class="form-label">Nombre del proveedor</label>
            <input type="text" class="form-control" id="inputNombre" name="inputNombre" value="<?= $datos->nombre_proveedor?>" maxlength="">
          </div>
          <div class="mb-3 p-2">
            <label for="inputProBruto" class="form-label">Producto Bruto</label>
            <input type="text" class="form-control" id="inputProBruto" name="inputProBruto" value="<?= $datos->nom_encargo?>" max="">
          </div>
          <div class="mb-3 p-2">
            <label for="inputDireccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" value="<?= $datos->direccion_proveedor?>" max="">
          </div>
          <div class="mb-3 p-2">
            <label for="inputTelefono" class="form-label">Telefono</label>
            <input type="number" class="form-control" id="inputTelefono" name="inputTelefono" value="<?= $datos->telefono_proveedor?>" max="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary m-end" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary m-end" name="btnEditar" value="ok">Editar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>