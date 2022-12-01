<legend class="text-center"><i class="glyphicon glyphicon-user"></i><b>GESTION DE CATEGORIAS</b></legend>
<hr>

<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-6">

    <a href="<?php echo site_url('categorias/nuevo'); ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      AGREGAR NUEVO
      </a>
    </div>
  </div>
  <br>
  <br>
  <?php if ($listadoCategoria): ?>
    <table class="table table-striped table-border table-hover">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">DESCRIPCION</th>
        <th class="text-center">ESTADO</th>
        <th class="text-center">TIPO</th>

      </tr>
        <tbody>
          <?php foreach ($listadoCategoria->result() as $categoriasTemporal ): ?>
          <tr>
            <td class="text-center"><?php echo $categoriasTemporal->id_cat;?></td>
            <td class="text-center"><?php echo $categoriasTemporal->descripcion_cat;?></td>
            <td class="text-center"><?php echo $categoriasTemporal->estado_cat;?></td>
            <td class="text-center"><?php echo $categoriasTemporal->tipo_cat;?></td>

            <td class="text-center"><a href="<?php echo site_url('categorias/actualizar');?>/<?php echo $categoriasTemporal->id_cat;?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>Editar</a>/<a onclick="return confirm('¿esta seguro de eliminar?')" href="<?php echo site_url('categorias/borrar'); ?>/<?php echo $categoriasTemporal->id_cat;?>" class="btn btn-danger"><i class="glyphicon glyphicon-cancel"></i>Eliminar</a>
            <!-- <td class="text-center"><a href="#" class="btn btn-warning">Editar </a>/<a href="<?php echo site_url('estudiantes/borrar'); ?>/<?php echo $estudiantesTemporal->id_est; ?>" class="btn btn-danger"> Eliminar</a></td> -->
          </tr>

          <?php endforeach; ?>
        </tbody>
    </table>s
  <?php else: ?>
    <h3><b>NO EXISTE CATEGORIAS</b></h3>
  <?php endif; ?>
