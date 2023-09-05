<div class="row">
	<div class="col-sm-12" style="margin-bottom: 5pxl">
		<button id="modal_create_assessment" data-url="<?= base_url('create_assessment/'.$semester."/".$class_id) ?>" class="btn btn-success btn-block"><?= lang("app.newAssessment") ?></button>
	</div>
</div>
<table class="table table-hover table-striped" id="assessmentTable">
	<thead>
		<tr>
			<th>Assessment</th>
			<th>Type</th>
			<th>Max.</th>
		</tr>
	</thead>
	<tbody>
		<?php
		if(count($assessments->assessments->assessments) > 0){
			$class = $assessments->assessments;
			foreach($class->assessments AS $assessment){
				?>
				<tr data-id="<?= $class->id ?>" data-assessment="<?= $assessment->id ?>">
					<td>
						<?= $assessment->subject->name ?>
					</td>
					<td><?= $assessment->type->name ?></td>
					<td><?= $assessment->maximum ?></td>
				</tr>
				<?php
			}
		}
		?>
	</tbody>
</table>

<script type="text/javascript">
	$("#assessmentTable").DataTable({
		"paging": false
	});

	$("#modal_create_assessment").click(function(e){
		$("#drc_create_assessent").find(".modal-content").load($(this).data("url"), function(){
			$("#drc_create_assessent").modal("show");
		});
	});

	$("#assessmentTable").on("click", 'tbody > tr', function(e){
		var clicked = $(this);

		// console.log();
		$("#marks_entry_container").html("Loading.......");
		$("#marks_entry_container").load("<?= base_url("get_student_list") ?>/" + clicked.data("id") + "/" + "<?= $semester ?>" + "/" + clicked.data("assessment"), function(){

		});
	});
</script>