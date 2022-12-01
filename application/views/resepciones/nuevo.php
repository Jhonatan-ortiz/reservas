<legend class="text-center">
<i class="glyphicon glyphicon-eye-open" ></i>
<b>NUEVA RESEPCION</b>

</legend>
<form class="class" action="<?php echo site_url('resepciones/guardarResepcion'); ?>" method="post">
<!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE:</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="nombre_res" value="" class="form-control" placeholder="ingrese el nombre de la resepcion" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">LUGAR:</label>
</div>
<div class="col-md-7">
  <input type="text" name="lugar_res" value="" class="form-control" placeholder="ingrese el lugar de resepcion" required>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">DETALLE:</label>
</div>
<div class="col-md-7">
  <input type="text" name="detalle_res" value="" class="form-control" placeholder="ingrese el datalle" required>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">PRECIO:</label>
</div>
<div class="col-md-7">
  <input type="number" name="precio_res" value="" class="form-control" placeholder="ingrese el precio de la reserva">
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-7">
    <button type="submit" name="button" class="btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Guardar</button>
    <a href="<?php echo site_url('resepciones/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
  </div>
</div>
</form>
