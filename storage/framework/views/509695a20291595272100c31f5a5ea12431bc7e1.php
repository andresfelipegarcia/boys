<div class="container">
	<h1>Lista de Niños</h1>
	<h4><a href="<?php echo e(route('boys.create')); ?>">Registrar niño</a></h4>
	<h4>Buscar entre fecha de observaciones</h4>
	<form name="form1" method="get" action="<?php echo e(action('BoyController@search')); ?>">

		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<input type="date" name="date1"></input>
		<input type="date" name="date2"></input>
		<button type="submit" class="btn btn-default">Buscar</button>

	</form>

	<div class="table-responsive">
		<?php if($data): ?>
			<table class="table">
				<thead>
					<tr>
						<td>Id</td>
						<td>Name</td>
						<td>Photo</td>
						<td>Birth Date</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data as $row): ?>
					<tr>
						<td><?php echo e($identificador=$row->id); ?></td>
						<td><?php echo e($row->name); ?></td>
						<td><?php echo e($row->image); ?></td>
						<td><?php echo e($row->age); ?></td>
						<td><input id="prueba" type="button" value="Registrar Observacion" onclick="muestraMensaje(<?php echo e($identificador); ?>);"></td>
						
						<td><a href="">Eliminar</a></td>

						<td><a href="<?php echo e(route('boys.show',$row->id)); ?>">Observaciones</a></td>
						
	
					</tr>
				</tbody>
					<?php endforeach; ?>
			</table>

		<?php endif; ?>	
	</div>
	
</div>

<script>
	var id;
        function muestraMensaje(id){
			window.location.href = "observations?"+id
		}

		function getName(name){
			var name;
		}
</script>