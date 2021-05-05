<div class="text-center">
		<h1>Empleados</h1>
	</div>
<br><br><br>
<div style="text-align:center">
	<a href="<?php echo site_url('empleado/add'); ?>" class="btn btn-success">Agregar nuevo empleado</a> 
	<a href="<?php echo site_url('dashboard'); ?>" class="btn btn-warning">Regresar</a> 
</div>
<br><br><br>
<table class="table table-striped table-bordered">
    <tr>
		<th>Nombre Empleado</th>
		<th>Cargo</th>
		<th>Sueldo</th>
		<th>Acciones</th>
    </tr>
	<?php foreach($empleado as $e){ ?>
    <tr>
		<td><?php echo $e['nombreEmpleado']; ?></td>
		<td><?php echo $e['nombreCargo']; ?></td>
		<td><?php echo $e['sueldoCargo']; ?></td>			
		<td>
            <a href="<?php echo site_url('empleado/edit/'.$e['idEmpleado']); ?>" class="btn btn-info btn-xs">Editar</a>
            <a href="<?php echo site_url('empleado/remove/'.$e['idEmpleado']); ?>" class="btn btn-danger btn-xs">Eliminar</a>
        </td>
    </tr>
	<?php } ?>
</table>
