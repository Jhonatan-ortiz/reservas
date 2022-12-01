<legend class="text-center"><i class="glyphicon glyphicon-user"></i><b>GESTION DE PRODUCTOS</b></legend>
<hr>

<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-6">

    <a href="<?php echo site_url('productos/nuevo'); ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      AGREGAR NUEVO
      </a>
    </div>
  </div>
  <br>
  <br>
  <?php if ($listadoProductos): ?>
    <table class="table table-striped table-border table-hover">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">DETALLE</th>
        <th class="text-center">PRECIO</th>
        <th class="text-center">CANTIDAD</th>
        <th class="text-center">DESCRIPCION</th>

      </tr>
        <tbody>
          <?php foreach ($listadoProductos->result() as $productosTemporal ): ?>
          <tr>
            <td class="text-center"><?php echo $productosTemporal->id_pro;?></td>
            <td class="text-center"><?php echo $productosTemporal->nombre_pro;?></td>
            <td class="text-center"><?php echo $productosTemporal->detalle_pro;?></td>
            <td class="text-center"><?php echo $productosTemporal->precio_pro;?></td>
            <td class="text-center"><?php echo $productosTemporal->cantidad_pro;?></td>
            <td class="text-center"><?php echo $productosTemporal->descripcion_pro;?></td>

            <td class="text-center"><a href="<?php echo site_url('productos/actualizar');?>/<?php echo $productosTemporal->id_pro;?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>Editar</a>/<a onclick="return confirm('¿esta seguro de eliminar?')" href="<?php echo site_url('productos/borrar'); ?>/<?php echo $productosTemporal->id_pro;?>" class="btn btn-danger"><i class="glyphicon glyphicon-cancel"></i>Eliminar</a>
            <!-- <td class="text-center"><a href="#" class="btn btn-warning">Editar </a>/<a href="<?php echo site_url('estudiantes/borrar'); ?>/<?php echo $estudiantesTemporal->id_est; ?>" class="btn btn-danger"> Eliminar</a></td> -->
          </tr>

          <?php endforeach; ?>
        </tbody>
    </table>s
  <?php else: ?>
    <h3><b>NO EXISTE PRODUCTO</b></h3>
  <?php endif; ?>
