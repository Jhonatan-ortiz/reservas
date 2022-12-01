<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR HABITACIONES</h3>

  </div>
</div>
<div class="row">
  <div class="col-md_12">
    <?php if ($habitacionEditar): ?>
      <form class="class" action="<?php echo site_url('habitaciones/procesarActualizacion'); ?>" method="post">
      <!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
      <center>
        <input type="hidden" name="id_hab" value="<?php echo $habitacionEditar->id_hab?>">
      </center>
      <div class="row">
      <div class="col-md-4 text-right">
            <label for="">NUMERO:</label>
        </div>
        <div class="col-md-7">
          <input type="number" name="numero_hab" value="<?php echo $habitacionEditar->numero_hab; ?>" class="form-control" placeholder="ingrese el numero de habitacion" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">DETALLE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="detalle_hab" value="<?php echo $habitacionEditar->detalle_hab ?>" class="form-control" placeholder="ingrese su detalle" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">PRECIO:</label>
      </div>
      <div class="col-md-7">
        <input type="number" name="precio_hab" value="<?php echo $habitacionEditar->precio_hab ?>" class="form-control" placeholder="ingrese su precio" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">ESTADO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="estado_hab" value="<?php echo $habitacionEditar->estado_hab ?>" class="form-control" placeholder="ingrese su estado">
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-7">
          <button type="submit" name="button" class="btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Actualizar</button>
          <a href="<?php echo site_url('habitaciones/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
        </div>
      </div>
      </form>
    <?php else: ?>
      <div class="alert alert-danger">
        <b>No se encontro habitaciones :(</b>
      </div>
    <?php endif; ?>
  </div>

</div>
