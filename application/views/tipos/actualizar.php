<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR TIPO DE RESERVA</h3>

  </div>
</div>
<div class="row">
  <div class="col-md_12">
    <?php if ($tipoEditar): ?>
      <form class="class" action="<?php echo site_url('tipos/procesarActualizacion'); ?>" method="post">
      <!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
      <center>
        <input type="hidden" name="id_tip" value="<?php echo $tipoEditar->id_tip?>">
      </center>
      <div class="row">
      <div class="col-md-4 text-right">
            <label for="">NUMERO:</label>
        </div>
        <div class="col-md-7">
          <input type="number" name="numero_tip" value="<?php echo $tipoEditar->numero_tip; ?>" class="form-control" placeholder="ingrese el numero de servicio de habitacion" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">DETALLE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="detalle_tip" value="<?php echo $tipoEditar->detalle_tip ?>" class="form-control" placeholder="ingrese su detalle" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">ESTADO:</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="estado_tip" value="<?php echo $tipoEditar->estado_tip ?>" class="form-control" placeholder="ingrese su estado">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-7">
          <button type="submit" name="button" class="btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Actualizar</button>
          <a href="<?php echo site_url('tipos/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
        </div>
      </div>
      </form>
    <?php else: ?>
      <div class="alert alert-danger">
        <b>No se encontro tipos de reserva :(</b>
      </div>
    <?php endif; ?>
  </div>

</div>
