<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR EMPLEADO</h3>

  </div>
</div>
<div class="row">
  <div class="col-md_12">
    <?php if ($empleadoEditar): ?>
      <form class="class" action="<?php echo site_url('empleados/procesarActualizacion'); ?>" method="post">
      <!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
      <center>
        <input type="hidden" name="id_emp" value="<?php echo $empleadoEditar->id_emp?>">
      </center>
      <div class="row">
      <div class="col-md-4 text-right">
            <label for="">CEDULA:</label>
        </div>
        <div class="col-md-7">
          <input type="number" name="cedula_emp" value="<?php echo $empleadoEditar->cedula_emp; ?>" class="form-control" placeholder="ingrese numeros de cedula" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">APELLIDO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="apellido_emp" value="<?php echo $empleadoEditar->apellido_emp ?>" class="form-control" placeholder="ingrese su apellido" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">NOMBRE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="nombre_emp" value="<?php echo $empleadoEditar->nombre_emp ?>" class="form-control" placeholder="ingrese su nombre" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">TELEFONO:</label>
      </div>
      <div class="col-md-7">
        <input type="number" name="telefono_emp" value="<?php echo $empleadoEditar->telefono_emp ?>" class="form-control" placeholder="ingrese numeros de telefono">
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">DIRECCIÓN:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="direccion_emp" value="<?php echo $empleadoEditar->direccion_emp ?>" class="form-control" placeholder="ingrese su dirección">
      </div>
      </div>
      <br>

      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">ESTADO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="estado_emp" value="<?php echo $empleadoEditar->estado_emp ?>" class="form-control" placeholder="ingrese el estado" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-7">
          <button type="submit" name="button" class="btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Actualizar</button>
          <a href="<?php echo site_url('empleados/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
        </div>
      </div>
      </form>
    <?php else: ?>
      <div class="alert alert-danger">
        <b>No se encontro a los Empleados :(</b>
      </div>
    <?php endif; ?>
  </div>

</div>
