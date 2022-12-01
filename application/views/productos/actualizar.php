<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR PRODUCTO</h3>

  </div>
</div>
<div class="row">
  <div class="col-md_12">
    <?php if ($productoEditar): ?>
      <form class="class" action="<?php echo site_url('productos/procesarActualizacion'); ?>" method="post">
      <!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
      <center>
        <input type="hidden" name="id_pro" value="<?php echo $productoEditar->id_pro?>">
      </center>
      <div class="row">
      <div class="col-md-4 text-right">
            <label for="">NOMBRE:</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="nombre_pro" value="<?php echo $productoEditar->nombre_pro; ?>" class="form-control" placeholder="ingrese el nombre" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">DETALLE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="detalle_pro" value="<?php echo $productoEditar->detalle_pro ?>" class="form-control" placeholder="ingrese su detalle" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">PRECIO:</label>
      </div>
      <div class="col-md-7">
        <input type="number" name="precio_pro" value="<?php echo $productoEditar->precio_pro ?>" class="form-control" placeholder="ingrese su precio" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">CANTIDAD:</label>
      </div>
      <div class="col-md-7">
        <input type="number" name="cantidad_pro" value="<?php echo $productoEditar->cantidad_pro ?>" class="form-control" placeholder="ingrese su cantidad">
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">DESCRIPCION:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="descripcion_pro" value="<?php echo $productoEditar->descripcion_pro ?>" class="form-control" placeholder="ingrese su descripcion">
      </div>
      </div>
      <br>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-7">
          <button type="submit" name="button" class="btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Actualizar</button>
          <a href="<?php echo site_url('productos/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
        </div>
      </div>
      </form>
    <?php else: ?>
      <div class="alert alert-danger">
        <b>No se encontro productos :(</b>
      </div>
    <?php endif; ?>
  </div>

</div>
