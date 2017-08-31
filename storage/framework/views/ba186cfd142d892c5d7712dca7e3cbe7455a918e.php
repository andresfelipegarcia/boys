<div class="container">
	<h4><a href="<?php echo e(route('boys.index')); ?>">Listar Niños</a></h4>
	

	<form name="form1" method="post" action="/observations">

		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		

		<div class="form-group">
			<label>Observaciones</label>
			<textarea type="text" name="description"></textarea>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail">Imagen</label>
			<input type="text" name="image">
		</div>

		<div class="form-group">
			<label for="exampleInputEmail">Date</label>
			<input type="date" name="date">
		</div>
		<input type="text" name="boy" id="boy">

		<button type="submit" class="btn btn-default">Registrar</button>
	</form>
</div>

<script type="text/javascript">
	var id = window.location.search.substr(1);
	document.form1.boy.value = id; 
</script> 