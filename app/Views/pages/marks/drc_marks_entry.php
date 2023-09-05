

<?php //var_dump("<pre>", $student_list->students[0], "</pre>"); ?>
<div class="saving_process"></div>
<table class="table table-hover table-striped">
	<thead>
		<tr>
			<th>Reg Number</th>
			<th>Name</th>
			<th>Marks/<?= $student_list->assessment->maximum ?></th>
		</tr>
	</thead>
	<tbody>
		<?php
		if(count($student_list->results) > 0){
			// var_dump();
			foreach($student_list->results AS $student){
				?>
				<tr>
					<td><?= $student->student_id ?></td>
					<td><?= $student->student_names ?></td>
					<td>
						<input type="text" class="form-control student_score" name="student_marks" data-id="<?= $student->assessment_id ?>" data-permission_id="<?= $student->student_id ?>" data-maximum="<?= $student->assessment_maximum ?>" data-minimum="0" value="<?= $student->obtained_score ?>" />
					</td>
				</tr>
				<?php
			}
		}
		?>
	</tbody>
</table>

<button class="btn btn-success pull-right">Save</button>


<script type="text/javascript">
	$(".student_score").blur(function(e){
		var phocused = $(this);
		var maximum = phocused.data("maximum");
		var score = phocused.val();

		if(maximum < score){
			phocused.css("border-color", "red");
			return
		}
		// alert($(this).val() + "\nMake sure to save me in the database");

		//Here make sure to save the information
		$(".saving_process").html("Saving....");
		$(".saving_process").load("<?= base_url('save_drc_marks') ?>/<?= $class_id ?>/<?= $semester ?>/<?= $assessment ?>/" + phocused.data("permission_id") + "?score=" + score, function(e){

		});;
	});
</script>