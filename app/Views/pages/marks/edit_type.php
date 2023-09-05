<form action="<?= base_url('save_edited_record/'.$course_id.'/'.$class_id.'/'.$mark_type.'/'.$period.'/'.$created_by.'/'.$cat_type); ?>" method='POST' class="validate" id="update_records">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?= lang("app.marksEditType"); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="saveListOutPut"></div>
					<div class="form-group">
						<label><?= lang("app.type"); ?></label>
						<select required class="select2" name="marktype" id="marks_type_edit">
							<option disabled selected><?= lang("app.marksTtype"); ?></option>
							<option <?= $mark_type == 1?"selected":"" ?> value="1"><?= lang("app.cat").(in_array($_SESSION['ideyetu_school_id'], [55])?" ".lang("app.or")." ".lang("app.assessmentFormative"):""); ?></option>
							<option <?= $mark_type == 2?"selected":"" ?> value="2"><?= lang("app.exam").(in_array($_SESSION['ideyetu_school_id'], [55])?" ".lang("app.or")." ". lang("app.assessmentComprehensive"):""); ?></option>
							<?php
							if(in_array($_SESSION['ideyetu_school_id'], [55])){
								?>
								<option <?= $mark_type == 10?"selected":"" ?> value="10"><?= lang("app.assessmentIntegrated"); ?></option>
								<?php
							}
							?>
							<option <?= $mark_type == 4?"selected":"" ?> value="4"><?= lang("app.catExam"); ?></option>
							<option <?= $mark_type == 3?"selected":"" ?> value="3"><?= lang("app.secondSitting"); ?></option>
							<option <?= $mark_type == 9?"selected":"" ?> value="9"><?= lang("app.reAssess"); ?></option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><?= lang("app.close"); ?></button>
					<button type="submit" id="submitButtonEdit" class="btn btn-primary" data-target="#mdlPass"><?= lang("app.saveChanges"); ?></button>
				</div>
			</form>

			<script type="text/javascript">
				$("#marks_type_edit").select2();

				$("#update_records").submit(function(e){
					e.preventDefault();

					$.ajax({
						type: $(this).attr('method'),
						url: $(this).attr('action'),
						data: $(this).serialize(),
						beforeSend: function(){
					        $("#submitButtonEdit").attr("disabled","disabled");
					    },
					    success: function(response){
					    	if(response.success){
					    		$("#saveListOutPut").html("<div class='alert alert-success'>" + response.message  + "</div>");
					    		refreshInterface = true;
					    		setTimeout(function(){
					            	$("#editRecordMarks").modal('hide');
					          	}, 2000);
					    	} else {
						    	if(response.message){
						            $("#saveListOutPut").html("<div class='alert alert-warning'>" + response.message  + "</div>");
						        } else {
						            $("#saveListOutPut").html("<div class='alert alert-warning'>Edit Operation Failed</div>");
						        }
						    }
					        $("#submitButtonEdit").removeAttr("disabled");
					    },
					    error: function(error){
					    	$("#saveListOutPut").html("<div class='alert alert-warning'>" + error.responseText + "</div>");
        					$("#submitButtonEdit").removeAttr("disabled");
					    }
					});
				});
			</script>
