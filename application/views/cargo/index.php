<div class="text-center">
		<h1>Cargos</h1>
	</div>
<br><br><br>
<div style="text-align:center">
	<a href="<?php echo site_url('cargo/add'); ?>" class="btn btn-success">Agregar nuevo cargo</a> 
	<a href="<?php echo site_url('dashboard'); ?>" class="btn btn-warning">Regresar</a> 
</div>
<br><br><br>
<table class="table table-striped table-bordered">
    <tr>
		<th>Nombre Cargo</th>
		<th>Sueldo Cargo</th>
		<th>Acciones</th>
    </tr>
	<?php foreach($cargo as $c){ ?>
    <tr>
		<td><?php echo $c['nombreCargo']; ?></td>
		<td><?php echo $c['sueldoCargo']; ?></td>
		<td>
            <a href="<?php echo site_url('cargo/edit/'.$c['idCargo']); ?>" class="btn btn-info btn-xs">Editar</a> 
            <a href="<?php echo site_url('cargo/remove/'.$c['idCargo']); ?>" class="btn btn-danger btn-xs">Eliminar</a>
        </td>
    </tr>
	<?php } ?>
</table>
