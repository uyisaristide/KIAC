<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal" style="margin-left: 10px"><?= lang("app.addNewClass");?></button>

<div class="boxed">
	<table class="table table-striped table-bordered" style="margin: 0; text-align:center;">
		<?php
		if($_SESSION['ideyetu_country'] == "Congo"){
			?>
			<thead>
				<tr>
					<th><?= lang("app.level");?></th>
					<th><?= lang("app.faculity");?></th>
					<th><?= lang("app.title");?></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				// var_dump("<pre>", $drc_classes, "</pre>");
				$super = [
					1 => "<sup>i&egrave;re</sup>",
					2 => '<sup>&egrave;me</sup>',
					3 => "<sup>&egrave;me</sup>",
					4 => '<sup>&egrave;me</sup>',
					5 => '<sup>&egrave;me</sup>',
					6 => '<sup>&egrave;me</sup>',
				];
				if(count($drc_classes->classes) > 0){
					foreach($drc_classes->classes AS $classe){
						foreach($classe->classes AS $class){
							?>
							<tr>
								<td style="text-align: left;"><?= $classe->level->name ?></td>
								<td style="text-align: left;"><?= $class->department->department->name ?></td>
								<td style="text-align: left;"><?= $class->name ?><?= $super[$class->name] ?> <?= $class->department->department->acronym ?> <?= $class->stream ?></td>
								<td></td>
							</tr>
							<?php
						}
					}
				}
				?>
			</tbody>
			<?php
		} else {
			?>
		<tbody>
			<tr>
				<th><?= lang("app.type");?></th>
				<th><?= lang("app.code");?></th>
				<th><?= lang("app.faculity");?></th> 
				<th><?= lang("app.level");?></th>
				<th><?= lang("app.title");?></th>
				<th><?= lang("app.mentor");?></th>
				<th><?= lang("app.course");?></th>
				<th><?= lang("app.student");?></th>
				<th><?= lang("app.action");?></th>
			</tr>
		<?php
		foreach ($classes as $class) {
			echo "<tr>
<td>".$class['type']."</td>
<td>".$class['faculty_code']."</td>
<td>".$class['department_name']."</td>
<td>".$class['level_name']."</td>
<td>
<span class='setting' data-id=".$class['id'].">".$class['title']."</span>
			<div class='editDiv'>

			</div>
</td>
<td>".$class['mentor_name']."</td>
<td><span class='text-success'>Courses: ".$class['courses']."</span></td>
<td><span class='text-warning'>Students: ".$class['students']."</span></td>
<td><label class='typcn typcn-delete text-danger link' data-toggle='delete' data-title=' class #".$class['level_name'].' '.$class['code'].' '.$class['title']."'
														   data-target='".$class['id']."'  data-href='delete_class'>". lang('app.del') ."</label></td>
</tr>";
		}
		?>
		</tbody>
			<?php
		}
		?>
	</table>


</div>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
	$(document).ready(function () {
		$('#classTable').DataTable({
			"searching": false
		});
	});

	$(function () {
		let txt
		let id
		$(".setting").on("dblclick", function () {
			txt = $(this).text()
			id = $(this).data("id")
			$(this).parent().find(".editDiv").html("<input  id='editText' type='text' class='form-control'>").find('#editText').focus().val(txt)
			$(this).hide()
		})
		$(document).on("keydown blur", "#editText", function (e) {
			if (e.which == 13 || e.type == 'focusout') {
				if (txt === $(this).val()) {
					$(this).parent().parent().find('.setting').text($(this).val()).show()
					$(this).remove()
				} else {
					$(this).parent().parent().find('.setting').text($(this).val()).show()
					$(this).remove()
					$.post("<?=base_url('manipulateClassChanges');?>", {key: id, value: $(this).val()}).then(res => {
						toastMsg(1, res.success)
					}).catch(e => {
						toastMsg(0, e.responseJSON.error)
					})
				}
			} else if (e.key === "Escape") {
				$(this).parent().parent().find('.setting').text(txt).show()
				$(this).remove()
			}
		})

		$('#select_faculty').hide();

		$("#type_select").on("change", function () {
			$('#select_dept').hide();
			$('#select_level').hide();
			$('#select_teacher').hide();
			$('#select_sub').hide();
			var value = $(this).val();
			// alert(value);
			if (value == 1) {
				//wda
				$('#labels').text('Sector');
				$('#depts').text('Trades');
				$('#levels').text('RTQFs');
				$.get("<?=base_url();?>get_levels/" + value, function (data) {
					$("[name='levels']").html(data);
				});
			}else if (value == 2) {
				//reb
				$('#labels').text('Levels');
				$('#depts').text('Combination');
				$('#levels').text('Class');
			}else if (value == 4) {
				$.get("<?=base_url();?>get_levels/" + value, function (data) {
					$("[name='levels']").html(data);
				});
			} else {
				$.get("<?=base_url();?>get_levels/" + value, function (data) {
					$("[name='levels']").html(data);
				});
			}
			$.get("<?=base_url();?>get_faculty/" + value, function (data) {
				$("[name='faculty']").html(data);
			})
			$('#select_faculty').show();
			if (value == 3) {
				$('#select_faculty').hide();
			}
		})
		$("#faculty_select").on("change", function () {
			var value = $(this).val();
			if (value == 21 || value == 22) {
				$.get("<?=base_url();?>get_levels/" + value+"/1", function (data) {
					$("[name='levels']").html(data);
				});
			}
		})
	});


	$(function () {

		$('#select_dept').hide();

		$("#faculty_select").on("change", function () {
			var value = $("#faculty_select").val();
			$('#select_level').hide();
			$('#select_sub').hide();
			$('#select_teacher').hide();
			// alert(value);
			if (value == 2) {
				//O level
				$('#select_dept').hide();
				$('#select_level').show();
				$('#select_sub').show();
				$('#select_teacher').show();
				$.get("<?=base_url();?>get_levels/" + value + "/1", function (data) {
					$("[name='depts']").html("<option value='1' selected>O Level</option>");
					$("[name='levels']").html(data);
				});
				return;
			}else if (value == 3) {
				//primary
				$('#select_dept').hide();
				$('#select_level').show();
				$('#select_sub').show();
				$('#select_teacher').show();
				$.get("<?=base_url();?>get_levels/" + value + "/1", function (data) {
					$("[name='depts']").html("<option value='2' selected>Primary</option>");
					$("[name='levels']").html(data);
				});
				return;
			}else if (value == 19) {
				//Nursery
				$('#select_dept').hide();
				$('#select_level').show();
				$('#select_sub').show();
				$('#select_teacher').show();
				$.get("<?=base_url();?>get_levels/" + value + "/1", function (data) {
					$("[name='depts']").html("<option value='110' selected>Nursery</option>");
					$("[name='levels']").html(data);
				});
				return;
			} else if (value == 1) {
				//A level
				$.get("<?=base_url();?>get_levels/" + value + "/1", function (data) {
					$("[name='levels']").html(data);
				});
			}
			$.get("<?=base_url();?>get_dept/" + value, function (data) {
				$("[name='depts']").html(data);
			})

			$('#select_dept').show();

		})

	});

	$(function () {

		$('#select_level').hide();
		$('#select_sub').hide();
		$('#select_teacher').hide();

		$("#dept_select").on("change", function () {
			$('#select_level').show();
			$('#select_sub').show();
			$('#select_teacher').show();

		})

	});
</script>
