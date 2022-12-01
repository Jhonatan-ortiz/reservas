<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR CATEGORIA</h3>

  </div>
</div>
<div class="row">
  <div class="col-md_12">
    <?php if ($categoriaEditar): ?>
      <form class="class" action="<?php echo site_url('categorias/procesarActualizacion'); ?>" method="post">
      <!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
      <center>
        <input type="hidden" name="id_cat" value="<?php echo $categoriaEditar->id_cat?>">
      </center>
      <div class="row">
      <div class="col-md-4 text-right">
            <label for="">DESCRIPCION:</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="descripcion_cat" value="<?php echo $categoriaEditar->descripcion_cat; ?>" class="form-control" placeholder="ingrese la descripcion" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">ESTADO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="estado_cat" value="<?php echo $categoriaEditar->estado_cat ?>" class="form-control" placeholder="ingrese el estado" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">TIPO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="tipo_cat" value="<?php echo $categoriaEditar->estado_cat ?>" class="form-control" placeholder="ingrese su tipo" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-7">
          <button type="submit" name="button" class="btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Actualizar</button>
          <a href="<?php echo site_url('categorias/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
        </div>
      </div>
      </form>
    <?php else: ?>
      <div class="alert alert-danger">
        <b>No se encontro categorias :(</b>
      </div>
    <?php endif; ?>
  </div>

</div>
