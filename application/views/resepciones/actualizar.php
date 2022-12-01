<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR RESEPCIONES</h3>

  </div>
</div>
<div class="row">
  <div class="col-md_12">
    <?php if ($resepcionEditar): ?>
      <form class="class" action="<?php echo site_url('resepciones/procesarActualizacion'); ?>" method="post">
      <!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
      <center>
        <input type="hidden" name="id_res" value="<?php echo $resepcionEditar->id_res?>">
      </center>
      <div class="row">
      <div class="col-md-4 text-right">
            <label for="">NOMBRE:</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="nombre_res" value="<?php echo $resepcionEditar->nombre_res; ?>" class="form-control" placeholder="ingrese nombre" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">LUGAR:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="lugar_res" value="<?php echo $resepcionEditar->lugar_res ?>" class="form-control" placeholder="ingrese su lugar" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">DETALLE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="detalle_res" value="<?php echo $resepcionEditar->detalle_res ?>" class="form-control" placeholder="ingrese detalle" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">PRECIO:</label>
      </div>
      <div class="col-md-7">
        <input type="number" name="precio_res" value="<?php echo $resepcionEditar->precio_res ?>" class="form-control" placeholder="ingrese el presio">
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-7">
          <button type="submit" name="button" class="btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Actualizar</button>
          <a href="<?php echo site_url('resepciones/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
        </div>
      </div>
      </form>
    <?php else: ?>
      <div class="alert alert-danger">
        <b>No se encontro resepciones :(</b>
      </div>
    <?php endif; ?>
  </div>

</div>
