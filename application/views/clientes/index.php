<legend class="text-center"><i class="glyphicon glyphicon-user"></i><b>GESTION DE CLIENTES</b></legend>
<hr>

<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-6">

    <a href="<?php echo site_url('clientes/nuevo'); ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      AGREGAR NUEVO
      </a>
    </div>
  </div>
  <br>
  <br>
  <?php if ($listadoClientes): ?>
    <table class="table table-striped table-border table-hover">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">CEDULA</th>
        <th class="text-center">APELLIDO</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">TELEFONO</th>
        <th class="text-center">DIRECCION</th>
        <th class="text-center">CIUDAD</th>

      </tr>
        <tbody>
          <?php foreach ($listadoClientes->result() as $clientesTemporal ): ?>
          <tr>
            <td class="text-center"><?php echo $clientesTemporal->id_cli;?></td>
            <td class="text-center"><?php echo $clientesTemporal->cedula_cli;?></td>
            <td class="text-center"><?php echo $clientesTemporal->apellido_cli;?></td>
            <td class="text-center"><?php echo $clientesTemporal->nombre_cli;?></td>
            <td class="text-center"><?php echo $clientesTemporal->telefono_cli;?></td>
            <td class="text-center"><?php echo $clientesTemporal->direccion_cli;?></td>
            <td class="text-center"><?php echo $clientesTemporal->ciudad_cli;?></td>
            <td class="text-center"><a href="<?php echo site_url('clientes/actualizar');?>/<?php echo $clientesTemporal->id_cli;?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>Editar</a>/<a onclick="return confirm('¿esta seguro de eliminar?')" href="<?php echo site_url('clientes/borrar'); ?>/<?php echo $clientesTemporal->id_cli;?>" class="btn btn-danger"><i class="glyphicon glyphicon-cancel"></i>Eliminar</a>
            <!-- <td class="text-center"><a href="#" class="btn btn-warning">Editar </a>/<a href="<?php echo site_url('estudiantes/borrar'); ?>/<?php echo $estudiantesTemporal->id_est; ?>" class="btn btn-danger"> Eliminar</a></td> -->
          </tr>

          <?php endforeach; ?>
        </tbody>
    </table>s
  <?php else: ?>
    <h3><b>NO EXISTE CLIENTE</b></h3>
  <?php endif; ?>
