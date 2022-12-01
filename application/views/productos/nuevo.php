<legend class="text-center">
<i class="glyphicon glyphicon-eye-open" ></i>
<b>NUEVO PRODUCTO</b>

</legend>
<form class="class" action="<?php echo site_url('productos/guardarProducto'); ?>" method="post">
<!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE:</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="nombre_pro" value="" class="form-control" placeholder="ingrese el nombre" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">DETALLE:</label>
</div>
<div class="col-md-7">
  <input type="text" name="detalle_pro" value="" class="form-control" placeholder="ingrese el detalle" required>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">PRECIO:</label>
</div>
<div class="col-md-7">
  <input type="number" name="precio_pro" value="" class="form-control" placeholder="ingrese el precio" required>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">CANTIDAD:</label>
</div>
<div class="col-md-7">
  <input type="number" name="cantidad_pro" value="" class="form-control" placeholder="ingrese la cantidad">
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">DESCRIPCION:</label>
</div>
<div class="col-md-7">
  <input type="text" name="descripcion_pro" value="" class="form-control" placeholder="ingrese las descripcion">
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-7">
    <button type="submit" name="button" class="btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Guardar</button>
    <a href="<?php echo site_url('productos/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
  </div>
</div>
</form>
