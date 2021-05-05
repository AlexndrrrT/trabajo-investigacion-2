<?php echo form_open('cargo/add',array("class"=>"form-horizontal")); ?>
	<div class="text-center">
		<h1>Agregar un nuevo cargo</h2>
	</div>
	<br><br><br>
	<div class="form-group">
		<label for="nombreCargo" class="col-md-4 control-label">Nombre del cargo</label>
		<div class="col-md-4">
			<input type="text" name="nombreCargo" value="<?php echo $this->input->post('nombreCargo'); ?>" class="form-control" id="nombreCargo" />
		</div>
	</div>
	<div class="form-group">
		<label for="sueldoCargo" class="col-md-4 control-label">Sueldo del cargo</label>
		<div class="col-md-4">
			<input type="text" name="sueldoCargo" value="<?php echo $this->input->post('sueldoCargo'); ?>" class="form-control" id="sueldoCargo" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Guardar</button>
			 <input type="button" value="Regresar"class="btn btn-warning" onClick="history.go(-1);">
        </div>
	</div>

<?php echo form_close(); ?>