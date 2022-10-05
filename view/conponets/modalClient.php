
<!-- Incio del modal agregar cliente-->


<div class="modal fade" id="modalCliente" tabindex="-1"  aria-labelledby="TituloModla" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMensaje">Agregar Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="frmCliente">

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control input" id="nombre"  name="nombre" placeholder="ingrese su Nombre">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Apellido:</label>
            <input type="text" class="form-control input" id="apellido" name="apellido" placeholder="ingrese su Apellido">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Direccion:</label>
            <input type="text" class="form-control input" id="direccion" name="direccion" placeholder="ingrese su Direccion">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Telefono:</label>
            <input type="text" class="form-control input" id="telefono" name="telefono" placeholder="ingrese sun Telefono">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="submit" id="guardarCliente" class="btn btn-primary">Guardar Cliente</button>
      </div>
    </div>
  </div>
</div>