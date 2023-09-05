<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"> -->
<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#addNewDepartmentModal" style="margin-left: 10px"><?= lang("app.addNewDepartment");?></button>

<div class="boxed">
	<table class="table table-striped table-bordered" id="departmentTable" style="margin: 0; text-align:center;">
		<thead>
			<tr>
				<th><?= lang("app.type");?></th>
				<th><?= lang("app.code");?></th>
				<th><?= lang("app.action");?></th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(count($departments) > 0){
				foreach($departments AS $department){
					?>
					<tr>
						<td style="text-align: left;"><?= $department->name ?></td>
						<td><?= $department->acronym ?></td>
						<td></td>
					</tr>
					<?php
				}
			}
			?>
		</tbody>
	</table>
</div>

<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> -->