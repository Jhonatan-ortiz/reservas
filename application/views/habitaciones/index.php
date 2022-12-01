<legend class="text-center"><i class="glyphicon glyphicon-user"></i><b>GESTION DE HABITACIONES</b></legend>
<hr>

<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-6">

    <a href="<?php echo site_url('habitaciones/nuevo'); ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      AGREGAR NUEVO
      </a>
    </div>
  </div>
  <br>
  <br>
  <?php if ($listadoHabitaciones): ?>
    <table class="table table-striped table-border table-hover">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NUMERO</th>
        <th class="text-center">DETALLE</th>
        <th class="text-center">PRECIO</th>
        <th class="text-center">ESTADO</th>
      </tr>
        <tbody>
          <?php foreach ($listadoHabitaciones->result() as $habitacionesTemporal ): ?>
          <tr>
            <td class="text-center"><?php echo $habitacionesTemporal->id_hab;?></td>
            <td class="text-center"><?php echo $habitacionesTemporal->numero_hab;?></td>
            <td class="text-center"><?php echo $habitacionesTemporal->detalle_hab;?></td>
            <td class="text-center"><?php echo $habitacionesTemporal->precio_hab;?></td>
            <td class="text-center"><?php echo $habitacionesTemporal->estado_hab;?></td>


            <td class="text-center"><a href="<?php echo site_url('habitaciones/actualizar');?>/<?php echo $habitacionesTemporal->id_hab;?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>Editar</a>/<a onclick="return confirm('¿esta seguro de eliminar?')" href="<?php echo site_url('habitaciones/borrar'); ?>/<?php echo $habitacionesTemporal->id_hab;?>" class="btn btn-danger"><i class="glyphicon glyphicon-cancel"></i>Eliminar</a>
            <!-- <td class="text-center"><a href="#" class="btn btn-warning">Editar </a>/<a href="<?php echo site_url('estudiantes/borrar'); ?>/<?php echo $estudiantesTemporal->id_est; ?>" class="btn btn-danger"> Eliminar</a></td> -->
          </tr>

          <?php endforeach; ?>
        </tbody>
    </table>s
  <?php else: ?>
    <h3><b>NO EXISTE habitaciones</b></h3>
  <?php endif; ?>
