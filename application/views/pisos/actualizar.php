<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR PISO</h3>

  </div>
</div>
<div class="row">
  <div class="col-md_12">
    <?php if ($pisoEditar): ?>
      <form class="class" action="<?php echo site_url('pisos/procesarActualizacion'); ?>" method="post">
      <!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
      <center>
        <input type="hidden" name="id_pis" value="<?php echo $pisoEditar->id_pis?>">
      </center>
      <div class="row">
      <div class="col-md-4 text-right">
            <label for="">NUMERO:</label>
        </div>
        <div class="col-md-7">
          <input type="number" name="numero_pis" value="<?php echo $pisoEditar->numero_pis; ?>" class="form-control" placeholder="ingrese el numero de piso" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">DETALLE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="detalle_pis" value="<?php echo $pisoEditar->detalle_pis ?>" class="form-control" placeholder="ingrese su detalle" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">ESTADO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="estado_pis" value="<?php echo $pisoEditar->estado_pis ?>" class="form-control" placeholder="ingrese su estado">
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-7">
          <button type="submit" name="button" class="btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Actualizar</button>
          <a href="<?php echo site_url('pisos/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
        </div>
      </div>
      </form>
    <?php else: ?>
      <div class="alert alert-danger">
        <b>No se encontro pisos :(</b>
      </div>
    <?php endif; ?>
  </div>

</div>
