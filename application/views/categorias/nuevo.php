<legend class="text-center">
<i class="glyphicon glyphicon-eye-open" ></i>
<b>NUEVA CATEGORIA</b>

</legend>
<form class="class" action="<?php echo site_url('categoriaS/guardarCategoria'); ?>" method="post">
<!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DESCRIPCION:</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="descripcion_cat" value="" class="form-control" placeholder="ingrese la categoria" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">ESTADO:</label>
</div>
<div class="col-md-7">
  <input type="text" name="estado_cat" value="" class="form-control" placeholder="ingrese el estado" required>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">TIPO:</label>
</div>
<div class="col-md-7">
  <input type="text" name="tipo_cat" value="" class="form-control" placeholder="ingrese el tipo" required>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-7">
    <button type="submit" name="button" class="btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Guardar</button>
    <a href="<?php echo site_url('categorias/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
  </div>
</div>
</form>
