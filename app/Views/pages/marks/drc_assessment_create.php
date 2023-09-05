<form method="POST" id="new_assessment_form" action="<?= base_url("save_assessent/".$class_id."/".$semester_id) ?>">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">
			<?= lang("app.newAssessment"); ?>
		</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<div class="col-sm-12 col-md-12 col-lg-12 pull-left">
			<div class="form-group">
				<label>Type</label>
				<select class="form-control" style="width: 100%" id="assessment_type" name="assessment_type_id" required>
					<option value=""></option>
					<?php
					if(count($assessment_types->types) > 0){
						foreach($assessment_types->types AS $type){
							?>
							<option value="<?= $type->id ?>"><?= $type->name ?></option>
							<?php
						}
					}
					?>
				</select>
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 pull-left">
			<div class="form-group">
				<label>P&eacute;riode</label>
				<select class="form-control" style="width: 100%" id="period_id" name="period_id">
					<option value=""></option>
					<?php
					if(count($periods->periods) > 0){
						foreach($periods->periods AS $period){
							if(is_null($period->enabled)){
								continue;
							}
							?>
							<option value="<?= $period->enabled->id ?>"><?= $period->name ?></option>
							<?php
						}
					}
					?>
				</select>
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 pull-left">
			<div class="form-group">
				<label>Cours</label>
				<select class="form-control" style="width: 100%" id="subject_id" name="subject_id" required>
					<option value=""></option>
					<?php
					if(count($subjects->subjects) > 0){
						foreach($subjects->subjects AS $subject){
							?>
							<option value="<?= $subject->id ?>"><?= $subject->subject->name ?></option>
							<?php
						}
					}
					?>
				</select>
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 pull-left">
			<div class="form-group">
				<label><?= lang("app.maximum"); ?>:</label>
				<input class="form-control" type="text" name="maximum" placeholder="<?= lang("app.maximum"); ?>" />
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 pull-left">
			<div class="form-group">
				<label><?= lang("app.comment"); ?>:</label>
				<input class="form-control" type="text" name="comment" placeholder="<?= lang("app.comment"); ?>" />
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 pull-left">
			<div class="form-group">
				<label><?= lang("app.date"); ?>:</label>
				<input class="form-control" type="text" name="assessment_date" placeholder="<?= lang("app.date"); ?>" />
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal"><?= lang("app.close"); ?></button>
		<button type="submit" class="btn btn-success" id="submitting_button"><?= lang("app.save"); ?></button>
	</div>
</form>

<script type="text/javascript">
	$("#assessment_type").select2({
		placeholder: "Select The assesmsnrt Type"
	});

	$("#period_id").select2({
		placeholder: "Select the Period"
	});

	$("#subject_id").select2({
		placeholder: "Select Subject"
	})

	$("#new_assessment_form").submit(function(e){
		e.preventDefault();

		// console.log("Now submitting my form!");
		var oldData = $("#submitting_button").html();

		$("#submitting_button").html('<i class="fas fa-sync fa-spin"></i> Saving...');
		$("#submitting_button").attr("disabled", "disabled");

		$.ajax({
	      	type: $(this).attr('method'), //send with put
	      	url: $(this).attr('action'),  
	      	data: new FormData(this),
          	contentType: false,
          	cache: false,
          	processData:false,
	      	success: function(response){
	      		if(response.success){
	      			refreshInterface = 1;
	      			// showNotification(response.message, 'success');
	      			//Here Make sure to close the modal
	      			$("#modal_create_assessment").modal('hide');
	      		} else {
	      			if(response.message){
	      				// showNotification(response.message, 'warning');
	      			} else {
	      				// showNotification("The Server Responded with unformatable message", 'danger');
	      			}
	      		}
	      		// console.log(response);
	      		$("#submitting_button").html(oldData);
	        	$("#submitting_button").removeAttr("disabled");
	      	},
	      	error: function(error){
	      		// console.log(error);
	      		$("#submitting_button").html(oldData);
	        	$("#submitting_button").removeAttr("disabled");
	      	}
	    });
	});
</script>