<div class="container">

	<form name="form" method="post" action="/boys">

		<!-- Laravel nos deja prolijo el formulario contra ataques, 
		añadiendo un token por cada envío de formulario. 
		Este token tiene una duración temporal que te da la confianza 
		necesaria para implementar envío de datos por formularios. -->
		<input type="hidden" name="_token" value="{{csrf_token() }}">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" placeholder="Boy Name"></input>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail">Photo</label>
			<input type="text" name="image">
		</div>

		<div class="form-group">
			<label>Birth Date</label>
			<input type="date" name="age">
		</div>

		<button type="submit" class="btn btn-default">Registrar</button>
	</form>
</div>
