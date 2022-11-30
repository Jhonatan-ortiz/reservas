<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR CLIENTE</h3>

  </div>
</div>
<div class="row">
  <div class="col-md_12">
    <?php if ($clienteEditar): ?>
      <form class="class" action="<?php echo site_url('clientes/procesarActualizacion'); ?>" method="post">
      <!-- <form class="class" action="estudiante/guardarEstudiante" method="post"> -->
      <center>
        <input type="hidden" name="id_cli" value="<?php echo $clienteEditar->id_cli?>">
      </center>
      <div class="row">
      <div class="col-md-4 text-right">
            <label for="">CEDULA:</label>
        </div>
        <div class="col-md-7">
          <input type="number" name="cedula_cli" value="<?php echo $clienteEditar->cedula_cli; ?>" class="form-control" placeholder="ingrese numeros de cedula" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">APELLIDO:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="apellido_cli" value="<?php echo $clienteEditar->apellido_cli ?>" class="form-control" placeholder="ingrese su apellido" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">NOMBRE:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="nombre_cli" value="<?php echo $clienteEditar->nombre_cli ?>" class="form-control" placeholder="ingrese su nombre" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">TELEFONO:</label>
      </div>
      <div class="col-md-7">
        <input type="number" name="telefono_cli" value="<?php echo $clienteEditar->telefono_cli ?>" class="form-control" placeholder="ingrese numeros de telefono">
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">DIRECCIÓN:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="direccion_cli" value="<?php echo $clienteEditar->direccion_cli ?>" class="form-control" placeholder="ingrese su dirección">
      </div>
      </div>
      <br>

      <div class="row">
        <div class="col-md-4 text-right">
          <label for="">CIUDAD:</label>
      </div>
      <div class="col-md-7">
        <input type="text" name="ciudad_cli" value="<?php echo $clienteEditar->ciudad_cli ?>" class="form-control" placeholder="ingrese las fecha de nacimiento" required>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-7">
          <button type="submit" name="button" class="btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Actualizar</button>
          <a href="<?php echo site_url('clientes/index'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>CANCELAR</a>
        </div>
      </div>
      </form>
    <?php else: ?>
      <div class="alert alert-danger">
        <b>No se encontro a los Cliente :(</b>
      </div>
    <?php endif; ?>
  </div>

</div>
