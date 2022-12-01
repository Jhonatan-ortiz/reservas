<legend class="text-center"><i class="glyphicon glyphicon-user"></i><b>GESTION DE SERVICIOS DE HABITACIONES</b></legend>
<hr>

<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-6">

    <a href="<?php echo site_url('servicios/nuevo'); ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      AGREGAR NUEVO
      </a>
    </div>
  </div>
  <br>
  <br>
  <?php if ($listadoServicio): ?>
    <table class="table table-striped table-border table-hover">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NUMERO</th>
        <th class="text-center">DETALLE</th>
        <th class="text-center">PEDIDO</th>
        <th class="text-center">PISO</th>
        <th class="text-center">PRECIO</th>
        <th class="text-center">ESTADO</th>
      </tr>
        <tbody>
          <?php foreach ($listadoServicio->result() as $serviciosTemporal ): ?>
          <tr>
            <td class="text-center"><?php echo $serviciosTemporal->id_serhab;?></td>
            <td class="text-center"><?php echo $serviciosTemporal->numero_serhab;?></td>
            <td class="text-center"><?php echo $serviciosTemporal->detalle_serhab;?></td>
            <td class="text-center"><?php echo $serviciosTemporal->pedido_serhab;?></td>
            <td class="text-center"><?php echo $serviciosTemporal->piso_serhab;?></td>
            <td class="text-center"><?php echo $serviciosTemporal->precio_serhab;?></td>
            <td class="text-center"><?php echo $serviciosTemporal->estado_serhab;?></td>


            <td class="text-center"><a href="<?php echo site_url('servicios/actualizar');?>/<?php echo $serviciosTemporal->id_serhab;?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>Editar</a>/<a onclick="return confirm('¿esta seguro de eliminar?')" href="<?php echo site_url('servicios/borrar'); ?>/<?php echo $serviciosTemporal->id_serhab;?>" class="btn btn-danger"><i class="glyphicon glyphicon-cancel"></i>Eliminar</a>
            <!-- <td class="text-center"><a href="#" class="btn btn-warning">Editar </a>/<a href="<?php echo site_url('estudiantes/borrar'); ?>/<?php echo $estudiantesTemporal->id_est; ?>" class="btn btn-danger"> Eliminar</a></td> -->
          </tr>

          <?php endforeach; ?>
        </tbody>
    </table>s
  <?php else: ?>
    <h3><b>NO EXISTE SERVICIOS</b></h3>
  <?php endif; ?>
