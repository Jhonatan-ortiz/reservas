<legend class="text-center">
<i class="glyphicon glyphicon-eye-open" ></i>
<b>NUEVO Cliente</b>

</legend>
<form class="class" action="<?php echo site_url('clientes/guardarCliente'); ?>" method="post">
<!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CEDULA:</label>
  </div>
  <div class="col-md-7">
    <input type="number" name="cedula_cli" value="" class="form-control" placeholder="ingrese numeros de cedula" required>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">APELLIDO:</label>
</div>
<div class="col-md-7">
  <input type="text" name="apellido_cli" value="" class="form-control" placeholder="ingrese su apellido" required>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">NOMBRE:</label>
</div>
<div class="col-md-7">
  <input type="text" name="nombre_cli" value="" class="form-control" placeholder="ingrese su nombre" required>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">TELEFONO:</label>
</div>
<div class="col-md-7">
  <input type="number" name="telefono_cli" value="" class="form-control" placeholder="ingrese numeros de telefono">
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">DIRECCIÓN:</label>
</div>
<div class="col-md-7">
  <input type="text" name="direccion_cli" value="" class="form-control" placeholder="ingrese su dirección">
</div>
</div>
<br>

<div class="row">
  <div class="col-md-4 text-right">
    <label for="">CIUDAD:</label>
</div>
<div class="col-md-7">
  <input type="text" name="ciudad_cli" value="" class="form-control" placeholder="ingrese las fecha de nacimiento" required>
</div>
</div>
<br>
<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-7">
    <button type="submit" name="button" class="btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Guardar</button>
    <a href="<?php echo site_url('clientes/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
  </div>
</div>
</form>
