<h2>Registro de Niños</h2>

<h4><a href="<?php echo e(route('boys.index')); ?>">Listar Niños</a></h4>

<div class="container">

	<form name="form" method="post" action="/boys" enctype="multipatr/form-data">

		<!-- Laravel nos deja prolijo el formulario contra ataques, 
		añadiendo un token por cada envío de formulario. 
		Este token tiene una duración temporal que te da la confianza 
		necesaria para implementar envío de datos por formularios. -->
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" placeholder="Boy Name"></input>
		</div>
		<br>
		<div class="form-group">
			<label for="exampleInputEmail">Photo</label>
			<input type="file" name="image" id="image">
		</div>
		<br>
		<div class="form-group">
			<label>Birth Date</label>
			<input type="date" name="age">
		</div>
		<br>
		<button type="submit" class="btn btn-default">Registrar</button>
	</form>
</div>
