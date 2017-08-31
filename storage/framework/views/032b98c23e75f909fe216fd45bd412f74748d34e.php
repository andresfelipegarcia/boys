<h1>Search</h1>

<div class="table-responsive">
		<?php if($data): ?>
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
					<?php foreach($data as $row): ?>
					<tr>
						<td><?php echo e($identificador=$row->id); ?></td>
						<td><?php echo e($row->description); ?></td>
						<td><?php echo e($row->date); ?></td>
						<td><?php echo e($row->image); ?></td>
						<td><?php echo e($row->boy); ?></td>
					</tr>
				</tbody>
					<?php endforeach; ?>
			</table>

		<?php endif; ?>	
	</div>