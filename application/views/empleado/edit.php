<?php echo form_open('empleado/edit/'.$empleado['idEmpleado'],array("class"=>"form-horizontal")); ?>
<div class="text-center">
		<h1>Editar un empleado existente</h1>
	</div>
<br><br><br>
	<div class="form-group">
		<label for="idCargo" class="col-md-4 control-label">Cargo</label>
		<div class="col-md-4">
			<select name="idCargo" class="form-control">
				<option value=""></option>
				<?php 
				foreach($all_cargo as $cargo)
				{
					$selected = ($cargo['idCargo'] == $empleado['idCargo']) ? ' selected="selected"' : "";

					echo '<option value="'.$cargo['idCargo'].'" '.$selected.'>'.$cargo['nombreCargo'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="nombreEmpleado" class="col-md-4 control-label">NombreEmpleado</label>
		<div class="col-md-4">
			<input type="text" name="nombreEmpleado" value="<?php echo ($this->input->post('nombreEmpleado') ? $this->input->post('nombreEmpleado') : $empleado['nombreEmpleado']); ?>" class="form-control" id="nombreEmpleado" />
		</div>
	</div>
	<br><br>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Guardar</button>
			<input type="button" value="Regresar"class="btn btn-warning" onClick="history.go(-1);">
        </div>
	</div>
	
<?php echo form_close(); ?>