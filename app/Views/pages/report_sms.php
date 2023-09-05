<div class="main-card mb-3 card col-sm-12 col-md-12 col-lg-12">
	
	<div class="card-body">
		<div id="accordion" class="accordion-wrapper mb-3" data-collapsible=true>
			<?php
			$label = 0;
			$last_sms = "";
			$msg_type = [
				0 => 'Student',
				1 => 'Staff',
				3 => 'Custom',
			];

			$msg_status = [
				0 => 'Pending',
				1 => 'Sent',
				2 => 'Failed',
			];
			$opened = false;
			$counter = [
				0 => 0,
				1 => 0,
				2 => 0
			];
			foreach($messages AS $message){
				$message_title = substr($message['created_at'], 0, 10)." To: ".$msg_type[$message['recipient_type']];
				if($message['id'] != $last_sms){
					if($last_sms != 0){
						?>			</div>
									<div class="row">
										<div class="col-sm-4">
											<button class="btn btn-primary btn-block">Pending: <?= number_format($counter[0]) ?></button>
										</div>
										<div class="col-sm-4">
											<button class="btn btn-success btn-block">Sent: <?= number_format($counter[1]) ?></button>
										</div>
										<div class="col-sm-4">
											<button class="btn btn-danger btn-block">Failed: <?= number_format($counter[2]) ?></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						$opened = false;
						$counter = [
							0 => 0,
							1 => 0,
							2 => 0
						];
					}
					?>
					<div class="">
						<div id="heading<?= $label ?>" class="card-header">
							<button type="button" data-toggle="collapse" data-target="#collapse<?= $label ?>1" aria-expanded="false"
									aria-controls="collapse<?= $label ?>" class="text-left m-0 p-0 btn btn-link btn-block">
								<h5 class="m-0 p-0"><?= $message_title ?></h5>
							</button>
						</div>

						<div data-parent="#accordion" id="collapse<?= $label ?>1" aria-labelledby="heading<?= $label ?>" class="collapse">
							<div class="card-body">
								<div style="max-height: 300px; overflow: auto;">
					<?php
					$opened = true;
				}
				$counter[$message['status']]++;
				?>
				<div style="border-bottom: 3px solid #efefef; margin: 5px; padding: 10px; border-radius: 10px;">
					<h6>
						To: <?= $message['fname'] ?> <?= $message['lname'] ?>: <?= $message['phone'] ?> 
						<?php
						if($message['status'] == 0){
							?>
							<span class="badge badge-primary"><?= $msg_status[$message['status']] ?></span>
							<?php
						} else if($message['status'] == 1){
							?>
							<span class="badge badge-success"><?= $msg_status[$message['status']] ?></span>
							<?php
						} else if($message['status'] == 2){
							?>
							<span class="badge badge-danger"><?= $msg_status[$message['status']] ?></span>
							<?php
						}
						?>
					</h6>
					<?= $message['content'] ?>
				</div>
				<?php
				$last_sms = $message['id'];
				if($label++ > 1000){
					break;
				}
			}

			if($opened){
				?>
									</div>
									<div class="row">
										<div class="col-sm-4">
											<button class="btn btn-primary btn-block">Pending: <?= number_format($counter[0]) ?></button>
										</div>
										<div class="col-sm-4">
											<button class="btn btn-success btn-block">Sent: <?= number_format($counter[1]) ?></button>
										</div>
										<div class="col-sm-4">
											<button class="btn btn-danger btn-block">Failed: <?= number_format($counter[2]) ?></button>
										</div>
									</div>
								</div>
							</div>
						</div>
				<?php
			}
			?>
		</div>
	</div>

</div>
<script>
	var total_sms_count = 0, sms_count = 0,type="";
	$(function () {
		$("#txt-msg").on("keyup", function () {
			var count = $(this).val().length;
			var msgs = Math.ceil(count / 160);
			if (msgs != sms_count) {
				//prevent looping on every typing
				sms_count = msgs;
				populate_sms_count();
			}
			$("#lbl-count").text(count + "/" + sms_count);
		});
		$(document).on("change", ".chk_item,.chk_mode", function () {
			populate_sms_count();
		});
		$(document).on("click", ".btn-sms-categ", function () {
			$(".chk_item").prop("checked", false);
			$("#sms_to_send").text("0");
			total_sms_count = 0;
			sms_count = 0;
			$("#btn_send_sms").prop("disabled", true);
			type = $(this).data("type");
			$("#type").val(type);
		});

		$(document).ready(function () {
			$(".select3").select2({
				ajax: {
					url: "<?=base_url('search_student');?>",
					type: "post",
					dataType: 'json',
					delay: 250,
					data: function (params) {
						return {
							searchTerm: params.term // search term
						};
					},
					processResults: function (response) {
						return {
							results: response
						};
					},
					cache: true
				},
				placeholder: "<?= lang("app.searchBy"); ?>",
				minimumInputLength: 3
			});
		});
		$("#messagingTable").on('click', '#removerow', function () {
			$(this).closest('tr').remove();
			populate_sms_count();
		});
		$("#search_student").on('select2:select', function (selection) {
			formatRepoSelection(selection.params.data);
		});
	});
	function populate_sms_count() {
		total_sms_count = 0;
		$.each($(".chk_item"), function () {
			if ($(this).is(":checked")) {
				if (type=="student"){
					total_sms_count += 1;
				}else {
					var boarding = $("#chk-boarding").is(":checked") ? $(this).data("boarding") : 0;
					var day = $("#chk-day").is(":checked") ? $(this).data("day") : 0;
					total_sms_count += boarding + day;
				}
			}
		});
		$("#sms_to_send").text(total_sms_count * sms_count);
		$("#txt-estimation").val(total_sms_count * sms_count);
		if (total_sms_count == 0) {
			$("#btn_send_sms").prop("disabled", true);
		} else {
			$("#btn_send_sms").prop("disabled", false);
		}
	}
	function formatRepoSelection(repo, isClass = false) {
		var id = repo.id;
		var isError = false;
			$("#search_student").val(null).trigger('change');

			$('input[name^="discId"]').each(function () {
				if (this.value == id) {
					//student already exists
					toastada.warning(repo.text + '<?= lang("app.alreadonList"); ?>');
					isError = true;
					return false;
				}
			});

		if (isError)
			return;
		$.get("<?=base_url();?>get_student/" + id + "/0/3", function (data) {
			$("#messagingTable").append(data);
			populate_sms_count();
		})
	}
</script>
