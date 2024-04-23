<!-- conexion and editorClie -->
<?php
include "./modelo/conexionClie.php";
include "./controlador/editorClie.php";
?>
<!-- Modal desplegable-->
<div class="modal fade" id="clienteModal?id=<?= $datos->id ?>" tabindex="-1" aria-labelledby="clienteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="clienteModalLabel">Editor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="col-11 p-3 m-auto" method="post">
          <h3 class="text-center text-secondary">Editor de Informacion</h3>
          <div class="mb-3 p-2">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputNombre" name="inputNombre" value="<?= $datos->nombre_cliente ?>">
          </div>
          <div class="mb-3 p-2">
            <label for="inputCorreo" class="form-label">Correo</label>
            <input type="text" class="form-control" id="inputCorreo" name="inputCorreo" value="<?= $datos->correo ?>">
          </div>
          <div class="mb-3 p-2">
            <label for="inputContraseña" class="form-label">Contraseña</label>
            <input type="text" class="form-control" id="inputContraseña" name="inputContraseña" value="<?= $datos->contraseña ?>">
          </div>
          <div class="mb-3 p-2  ">
            <label for="rol" class="form-label">ROL :</label>
            <input type="text" name="rol" id="rol" value="usuario" value="<?= $datos->rol ?>">
          </div>
          <button type="submit" class="btn btn-primary m-end" name="btnEditar" value="ok">Editar</button>
          <button type="button" class="btn btn-secondary m-end" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>