<h4><a href="<?php echo e(route('boys.index')); ?>">Listar Niños</a></h4>
<div class="table-responsive">
		<form name="form1" method="post" action="/observations">

		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		
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
					<?php foreach($data as $row): ?>
					<tr>
						<td><?php echo e($identificador=$row->id); ?></td>
						<td><?php echo e($row->description); ?></td>
						<td><?php echo e($row->image); ?></td>
						<td><?php echo e($row->date); ?></td>
					</tr>
				</tbody>
					<?php endforeach; ?>
			</table>

		
	</div>