<h4><a href="{{ route('boys.index') }}">Listar Niños</a></h4>
<div class="table-responsive">
		<form name="form1" method="post" action="/observations">

		<input type="hidden" name="_token" value="{{csrf_token() }}">
		
		</form>
			<table class="table">
				<thead>
					<tr>
						<td>Id</td>
						<td>Observation</td>
						<td>Image</td>
						<td>Date</td>
						
					</tr>
				</thead>
				<tbody>
					@foreach($data as $row)
					<tr>
						<td>{{$identificador=$row->id}}</td>
						<td>{{$row->description}}</td>
						<td>{{$row->image}}</td>
						<td>{{$row->date}}</td>
					</tr>
				</tbody>
					@endforeach
			</table>

		
	</div>