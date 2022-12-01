<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR SERVICIOS</h3>

  </div>
</div>
<div class="row">
  <div class="col-md_12">
    <?php if ($servicioEditar): ?>
      <form class="class" action="<?php echo site_url('servicios/procesarActualizacion'); ?>" method="post">
      <!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
      <center>
        <input type="hidden" name="id_serhab" value="<?php echo $servicioEditar->id_serhab?>">
      </center>
      <div class="row">
      <div class="col-md-4 text-right">
            <label for="">NUMERO:</label>
        </div>
        <div class="col-md-7">
          <input type="number" name="numero_serhab" value="<?php echo $servicioEditar->numero_serhab; ?>" class="form-control" placeholder="ingrese el numero de servicio de habitacion" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">DETALLE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="detalle_serhab" value="<?php echo $servicioEditar->detalle_serhab ?>" class="form-control" placeholder="ingrese su detalle" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">PEDIDO:</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="pedido_serhab" value="<?php echo $servicioEditar->pedido_serhab ?>" class="form-control" placeholder="ingrese su pedido">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">PISO:</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="piso_serhab" value="<?php echo $servicioEditar->piso_serhab ?>" class="form-control" placeholder="ingrese su pedido">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">PRECIO:</label>
      </div>
      <div class="col-md-7">
        <input type="number" name="precio_serhab" value="<?php echo $servicioEditar->precio_serhab ?>" class="form-control" placeholder="ingrese su precio" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">ESTADO:</label>
        </div>
        <div class="col-md-7">
          <input type="text" name="estado_serhab" value="<?php echo $servicioEditar->estado_serhab ?>" class="form-control" placeholder="ingrese su estado">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-7">
          <button type="submit" name="button" class="btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Actualizar</button>
          <a href="<?php echo site_url('servicios/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
        </div>
      </div>
      </form>
    <?php else: ?>
      <div class="alert alert-danger">
        <b>No se encontro pedidos :(</b>
      </div>
    <?php endif; ?>
  </div>

</div>
