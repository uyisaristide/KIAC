<style>
	.form-group {
		margin-right: 5px;
	}

	th.rotate-45 {
		height: 100px;
		width: 50px;
		min-width: 40px;
		max-width: 40px;
		position: relative;
		vertical-align: bottom;
		padding: 0;
		font-size: 13px;
		line-height: 0.8;
	}

	th.rotate-45 label {
		-ms-transform: skew(45deg, 0deg) rotate(315deg);
		-moz-transform: skew(45deg, 0deg) rotate(315deg);
		-webkit-transform: skew(45deg, 0deg) rotate(315deg);
		-o-transform: skew(45deg, 0deg) rotate(315deg);
		transform: skew(45deg, 0deg) rotate(315deg);
		position: absolute;
		bottom: 65px;
		left: -65px;
		display: inline-block;
		width: 170px;
		text-align: left;
	}

	th.rotate-45>div {
		position: relative;
		top: 0;
		left: 50px;
		height: 100%;
		-ms-transform: skew(-45deg, 0deg);
		-moz-transform: skew(-45deg, 0deg);
		-webkit-transform: skew(-45deg, 0deg);
		-o-transform: skew(-45deg, 0deg);
		transform: skew(-45deg, 0deg);
		overflow: hidden;
		border-left: 1px solid #000;
		border-right: 1px solid #000;
		border-top: 1px solid #000;
		margin-left: -2px;
	}

	th>label {
		position: absolute;
		bottom: 0;
	}

	th {
		position: relative;
		min-width: 50px;
		border: 0px;
	}

	td {
		min-width: 50px;
		padding: 8px;
		border-color: #000;
	}
</style>
<form action="<?= base_url('get_assessments/1'); ?>" method="post" class="validate" target="_blank" id="form">
	<div class="row" style="background-color: white;height: auto;padding: 10px">
		<div class="form-group col-sm-3 col-md-2 col-lg-2">
			<label><?= lang("app.year"); ?> :</label>
			<select class="select2" id="select_year" name="year" required>
				<option disabled selected><?= lang("app.academicYear"); ?> </option>
				<?php
				foreach ($years as $year) :
					echo "<option value='{$year['id']}'>{$year['title']}</option>";
				endforeach;
				?>
			</select>
		</div>

		<div class="form-group col-sm-3 col-md-2 col-lg-2">
			<label><?= lang("app.sClass"); ?> :</label>
			<select class="form-control select2" name="class" id="select_class" required>
				<option selected disabled><?= lang("app.chooseClass"); ?></option>
			</select>
		</div>
		<div class="form-group col-sm-3 col-md-2 col-lg-2">
			<label><?= lang("app.course"); ?> :</label>
			<select class="form-control select2" id="select_course" name="course" required>
				<option value="0" selected><?= lang("app.allCourses"); ?> </option>
			</select>
		</div>
		<div class="form-group col-sm-3 col-md-2 col-lg-2">
			<label><?= lang("app.term"); ?>:</label>
			<select class="form-control select2" id="term" name="term" required>
				<option selected disabled><?= lang("app.selectTerm"); ?> </option>
				<option value="1"><?= lang("app.term1"); ?> </option>
				<option value="2"><?= lang("app.term2"); ?> </option>
				<option value="3"><?= lang("app.term3"); ?> </option>
			</select>
		</div>
		<br>
		<div class="form-group" style="margin-top: 30px">
			<button class="btn btn-success" id="btn_generate"><?= lang("app.viewAssessment"); ?> </button>
		</div>
	</div>
</form>

<div class="row" style="height: auto;padding: 0px;margin-top: 15px">
	<div id="dv-assessment" class="col-sm-12 col-md-5" style="display: none;padding: 0 0px 0 0">
		<div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4" style="background-color:#fff;padding: 10px;">
			<button class="btn btn-info" onclick="showAddForm()" id="btn-show-add"><?= lang('app.newAssessment'); ?></button>
			<div class="row" id="report_content" style="display: block">

			</div>
			<div class="col-sm-12 col-md-12 col-lg-12" id="dv-new-assessment" style="max-width: 500px;display: none">
				<h4><?= lang("app.selectedAcademic"); ?>: <span id="sp-year"></span></h4>
				<h4><?= lang("app.selectedTerm"); ?>: <span id="sp-term"></span></h4>
				<h4><?= lang("app.selectedClass"); ?>: <span id="sp-class"></span></h4>
				<h4><?= lang("app.selectedCourse"); ?>: <span id="sp-course"></span></h4>
				<h4><?= lang("app.teacher"); ?>: <strong><?= $ideyetu_name; ?></strong></h4>
				<form action="<?= base_url('manipulate_assessment'); ?>" class="autoSubmit validate">
					<input type="hidden" class="form-control" name="class_id" required>
					<input type="hidden" class="form-control" name="course_id" required>
					<input type="hidden" class="form-control" name="year_id" required>
					<input type="hidden" class="form-control" name="term_id" required>
					<div class="form-group">
						<label><?= lang("app.selectType"); ?> </label>
						<select class="form-control select2" id="type-selector" data-target="type" name="type" required>
							<option selected disabled><?= lang("app.selectType"); ?> </option>
						</select>
					</div>
					<div class="form-group" style="display: none" id="dv-period">
						<label><?= lang("app.period"); ?> :</label>
						<select class="form-control select2" id="period" name="period" required>
							<option selected><?= lang("app.selectPeriod"); ?> </option>
							<option value="1"><?= lang("app.period1"); ?> </option>
							<option value="2"><?= lang("app.period2"); ?> </option>
							<option value="3"><?= lang("app.period3"); ?> </option>
							<option value="4"><?= lang("app.period4"); ?> </option>
						</select>
					</div>
					<div class="form-group" style="display: none" id="dv-cat-type">
						<select class="form-control select2" id="catype" name="catType">
							<option selected disabled><?= lang("app.catType"); ?> </option>
							<option disabled><?= lang("app.quiz"); ?> </option>
							<option value="Q1"><?= lang("app.quiz1"); ?> </option>
							<option value="Q2"><?= lang("app.quiz2"); ?> </option>
							<option value="Q3"><?= lang("app.quiz3"); ?> </option>
							<option value="Q4"><?= lang("app.quiz4"); ?> </option>
							<option value="Q5"><?= lang("app.quiz5"); ?> </option>
							<option disabled><?= lang("app.test"); ?> </option>
							<option value="T1"><?= lang("app.test1"); ?> </option>
							<option value="T2"><?= lang("app.test2"); ?> </option>
							<option value="T3"><?= lang("app.test3"); ?> </option>
							<option value="T4"><?= lang("app.test4"); ?> </option>
							<option value="T5"><?= lang("app.test5"); ?> </option>
							<option disabled><?= lang("app.homework"); ?> </option>
							<option value="H1"><?= lang("app.homework1"); ?> </option>
							<option value="H2"><?= lang("app.homework2"); ?> </option>
							<option value="H3"><?= lang("app.homework3"); ?> </option>
							<option value="H4"><?= lang("app.homework4"); ?> </option>
							<option value="H5"><?= lang("app.homework5"); ?> </option>
						</select>
					</div>
					<div class="form-group">
						<label><?= lang('app.totalMarks'); ?></label>
						<input class="form-control" type="text" name="outofmarks" required minlength="1">
					</div>
					<div class="form-group">
						<label><?= lang("app.dateGiven"); ?></label>
						<input type="date" class="form-control" name="examDate" required id="examDate">
					</div>
					<div>
						<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hideAddForm()">Close
						</button>
						<button type="submit" class="btn btn-primary" data-callback="reloadAssessment" data-target="reset"><?= lang('app.saveAssessment'); ?></button>
					</div>
				</form>
			</div>

		</div>
	</div>
	<div id="dv-assessment-details" class="col-sm-12 col-md-7" style="padding: 0 0 0 10px;display: none">
		<form action="<?= base_url(); ?>/manipulate_marks" class="validate autoSubmit" id="form" xmlns="http://www.w3.org/1999/html" novalidate="" data-select2-id="form" style="background-color:#fff;width: 100%;padding: 10px;">
			<div class="content"></div>
			<input type="hidden" id="in_assessment_id" name="assessment_id">
			<div class="btn-group-sm">
				<button class="btn btn-info" type="submit"><i class="fa fa-save"></i><?= lang('app.save'); ?></button>
				<a href="#" class="btn btn-danger" target="_blank" id="a-pdf-export"><i class="fa fa-file-pdf"></i><?= lang('app.export'); ?></a>
				<button class="btn btn-success"><i class="fa fa-file-excel"></i> <?= lang('app.download'); ?></button>
				<a class="btn btn-warning" id="btn-editMarks"><i class="fa fa-edit"></i><?= lang('app.edit'); ?></a>
			</div>
		</form>
	</div>
</div>
<script>
	$(function() {
		$(document).on("click","#btn-editMarks",function(){
			$(".marksField").attr("readonly", false).focus()
		})
		$(document).on('click', '.btn-remove-marks-group', function(e) {
			var r = confirm("Are sure you want delete ?")
			if (r == true) {
				let id = $(this).attr("data-id")
				// var id = $(this).data('id')
				$.ajax({
					url: "<?php echo base_url('deleteAssessmentGroup') ?>/" + id,
					method: 'POST',
					contentType: false,
					processData: false,
					cache: false,
					async: false,
					success: function(res) {
						console.log(res)
						toastada.success(res.success);
						setTimeout(function() {
							window.location.reload();
						}, 1500);
						return;
					},
					error: function(e) {
						toastada.error(e.responseJSON.error);
					}
				})
			}
		})
		$("#select_year").on("change", function(e) {
			const val = $(this).val();
			var data = $("#select_year option:selected").text();
			$('#sp-year').text(data);
			$("#select_class").load("<?= base_url(); ?>get_class/0/" + val);
		});
		$("#select_course").on("change", function(e) {
			var data = $("#select_course option:selected").text();
			$('#sp-course').text(data);
		});
		$("#term").on("change", function(e) {
			var data = $("#term option:selected").text();
			$('#sp-term').text(data);
		});
		$("#select_class").on("change", function(e) {
			const val = $(this).val();
			const year = $("#select_year").val();
			var data = $("#select_class option:selected").text();
			$('#sp-class').text(data);
			$("#select_course").load("<?= base_url(); ?>get_course/" + val + "/" + year + "/1");
			$("#type-selector").load("<?= base_url(); ?>get_assessment_types/" + val);
		});
		$("#type-selector").on("change", function(e) {
			const type = $(this).val();
			if ((type === '1' || type === '19') && '<?= $periodic; ?>' == '1') {
				$('#dv-period').show()
				$('#dv-cat-type').show()
			} else {
				$('#dv-period').hide()
				$('#dv-cat-type').hide()
			}
		});
		$(document).on("click", "#btn_generate", function(e) {
			e.preventDefault();
			$("#dv-assessment").hide();
			$("#report_content").show();
			$('#btn-show-add').show();
			$("#dv-assessment-details").hide();
			$('#dv-new-assessment').hide(300)
			if ($('#select_year').val() === null || $('#select_class').val() === null || $('#select_course').val() === '0' || $('#term').val() === null) {
				toastada.warning('Please select all the required data')
				return
			}
			$.post($("#form").prop("action"), $("#form").serialize(), function(data) {
				$("#dv-assessment").fadeIn(500);
				$("#report_content").html(data);
			})
		});
		$(document).on("click", ".btn-view-marks", function(e) {
			e.preventDefault();
			$("#dv-assessment-details").hide();
			const assessment_id = $(this).data("id")
			$.get("<?= base_url(); ?>get_assessments_records/" + assessment_id, '', function(data) {
				$('#in_assessment_id').val(assessment_id)
				$('#a-pdf-export').prop('href', '<?= base_url('get_student_marks/'); ?>' + assessment_id)
				$("#dv-assessment-details").fadeIn(500);
				$("#dv-assessment-details .content").html(data);
			})
		});
		$(document).on("click", "#btn-delete", function(e) {
			e.preventDefault();
			if (!confirm('Are you sure you want to delete this marks?')) {
				return
			}
			const text = $(this).text();
			const btn = $(this)
			btn.text('Deleting...').prop('disabled', true);
			const assessment_id = $('#in_assessment_id').val()
			$.post("<?= base_url(); ?>delete_marks", 'id=' + assessment_id, function(data) {
				btn.text(text).prop('disabled', false);
				if (data.hasOwnProperty('success')) {
					$("#dv-assessment-details").fadeOut(2000, function() {
						reloadAssessment()
					});
					toastada.success(data.success);
				} else if (data.hasOwnProperty('error')) {
					toastada.error(data.error);
				} else {
					toastada.error("Marks deletion failed, please try again later");
				}
			})
		});
	})

	function showAddForm() {
		$('#report_content').hide();
		$('#btn-show-add').hide();
		$('#dv-new-assessment').slideDown(300)
		$('[name="class_id"').val($("#select_class").val())
		$('[name="course_id"').val($("#select_course").val())
		$('[name="year_id"').val($("#select_year").val())
		$('[name="term_id"').val($("#term").val())
	}

	function hideAddForm() {
		$('#report_content').slideDown(500);
		$('#btn-show-add').show();
		$('#dv-new-assessment').hide(300)
	}

	function reloadAssessment() {
		$('#btn_generate').click()[0];
	}
</script>
