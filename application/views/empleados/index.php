<legend class="text-center"><i class="glyphicon glyphicon-user"></i><b>GESTION DE EMPLEADOS</b></legend>
<hr>

<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-6">

    <a href="<?php echo site_url('empleados/nuevo'); ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      AGREGAR NUEVO
      </a>
    </div>
  </div>
  <br>
  <br>
  <?php if ($listadoEmpleados): ?>
    <table class="table table-striped table-border table-hover">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">CEDULA</th>
        <th class="text-center">APELLIDO</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">TELEFONO</th>
        <th class="text-center">DIRECCION</th>
        <th class="text-center">ESTADO</th>

      </tr>
        <tbody>
          <?php foreach ($listadoEmpleados->result() as $empleadosTemporal ): ?>
          <tr>
            <td class="text-center"><?php echo $empleadosTemporal->id_emp;?></td>
            <td class="text-center"><?php echo $empleadosTemporal->cedula_emp;?></td>
            <td class="text-center"><?php echo $empleadosTemporal->apellido_emp;?></td>
            <td class="text-center"><?php echo $empleadosTemporal->nombre_emp;?></td>
            <td class="text-center"><?php echo $empleadosTemporal->telefono_emp;?></td>
            <td class="text-center"><?php echo $empleadosTemporal->direccion_emp;?></td>
            <td class="text-center"><?php echo $empleadosTemporal->estado_emp;?></td>
            <td class="text-center"><a href="<?php echo site_url('empleados/actualizar');?>/<?php echo $empleadosTemporal->id_emp;?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>Editar</a>/<a onclick="return confirm('¿esta seguro de eliminar?')" href="<?php echo site_url('empleados/borrar'); ?>/<?php echo $empleadosTemporal->id_emp;?>" class="btn btn-danger"><i class="glyphicon glyphicon-cancel"></i>Eliminar</a>
            <!-- <td class="text-center"><a href="#" class="btn btn-warning">Editar </a>/<a href="<?php echo site_url('estudiantes/borrar'); ?>/<?php echo $estudiantesTemporal->id_est; ?>" class="btn btn-danger"> Eliminar</a></td> -->
          </tr>

          <?php endforeach; ?>
        </tbody>
    </table>s
  <?php else: ?>
    <h3><b>NO EXISTE EMPLEADOS</b></h3>
  <?php endif; ?>
