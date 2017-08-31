<h1>Search</h1>

<div class="table-responsive">
		@if($data)
			<table class="table">
				<thead>
					<tr>
						<td>Id</td>
						<td>Name</td>
						<td>Photo</td>
						<td>Birth Date</td>
						<td>Boy</td>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $row)
					<tr>
						<td>{{$identificador=$row->id}}</td>
						<td>{{$row->description}}</td>
						<td>{{$row->date}}</td>
						<td>{{$row->image}}</td>
						<td>{{$row->boy}}</td>
					</tr>
				</tbody>
					@endforeach
			</table>

		@endif	
	</div>