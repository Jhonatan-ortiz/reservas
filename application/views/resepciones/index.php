<legend class="text-center"><i class="glyphicon glyphicon-user"></i><b>GESTION DE RESEPCIONES</b></legend>
<hr>

<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-6">

    <a href="<?php echo site_url('resepciones/nuevo'); ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      AGREGAR NUEVO
      </a>
    </div>
  </div>
  <br>
  <br>
  <?php if ($listadoResepciones): ?>
    <table class="table table-striped table-border table-hover">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">LUGAR</th>
        <th class="text-center">DETALLE</th>
        <th class="text-center">PRECIO</th>

      </tr>
        <tbody>
          <?php foreach ($listadoResepciones->result() as $resepcionesTemporal ): ?>
          <tr>
            <td class="text-center"><?php echo $resepcionesTemporal->id_res;?></td>
            <td class="text-center"><?php echo $resepcionesTemporal->nombre_res;?></td>
            <td class="text-center"><?php echo $resepcionesTemporal->lugar_res;?></td>
            <td class="text-center"><?php echo $resepcionesTemporal->detalle_res;?></td>
            <td class="text-center"><?php echo $resepcionesTemporal->precio_res;?></td>
            <td class="text-center"><a href="<?php echo site_url('resepciones/actualizar');?>/<?php echo $resepcionesTemporal->id_res;?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>Editar</a>/<a onclick="return confirm('¿esta seguro de eliminar?')" href="<?php echo site_url('resepciones/borrar'); ?>/<?php echo $resepcionesTemporal->id_res;?>" class="btn btn-danger"><i class="glyphicon glyphicon-cancel"></i>Eliminar</a>
            <!-- <td class="text-center"><a href="#" class="btn btn-warning">Editar </a>/<a href="<?php echo site_url('resepciones/borrar'); ?>/<?php echo $resepcionesTemporal->id_res; ?>" class="btn btn-danger"> Eliminar</a></td> -->
          </tr>

          <?php endforeach; ?>
        </tbody>
    </table>s
  <?php else: ?>
    <h3><b>NO EXISTE RESEPCION</b></h3>
  <?php endif; ?>
