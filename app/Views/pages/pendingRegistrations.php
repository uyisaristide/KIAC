<?php $object = new App\Controllers\Home();

function array_term($terms)
{

	foreach (explode(",", $terms) as $term) {

		if ($term == 1) {
			echo lang("app.firstTerm");
		}
		if ($term == 2) {
			echo lang("app.secondTerm");
		}
		if ($term == 3) {
			echo lang("app.thirdTerm");
		}
	}
}

?>
<div class="app-inner-layout app-inner-layout-page">
	<div class="app-inner-layout__wrapper">
		<div class="app-inner-layout__content">
			<div class="tab-content">
				<div class="container-fluid">
					<div class="card mb-3">
						<div class="card-header-tab card-header">
							<div
									class="card-header-title font-size-lg text-capitalize font-weight-normal">
								<i class="header-icon typcn typcn-home-outline text-muted opacity-6"> </i><?= $title; ?>
							</div>
							<div class="btn-actions-pane-right actions-icon-btn">

							</div>
						</div>
						<div class="card-body">
							<div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
								<div class="row">
									<div class="col-sm-12">
										<table style="width: 100%;" id="example"
											   class=" table-hover table-striped table-bordered">
											<thead>
											<tr role="row">
												<th>#</th>
												<th>Applicant</th>
												<th>Gender</th>
												<th>Level</th>
												<th>Studying mode</th>
												<th>Parent type</th>
												<th>Parent name</th>
												<th>Parent phone</th>
												<th>Payment status</th>
												<th>Application - code</th>
												<th></th>
											</tr>
											</thead>
											<tbody>
											<?php foreach ($pendings as $key=>$pending) { ?>
												<tr>
													<td><?= $key+1; ?></td>
													<td><?= $pending['applicant']; ?></td>
													<td><?= $pending['gender']; ?></td>
													<td><?= $pending['level']; ?></td>
													<td><?= $pending['mode']; ?></td>
													<td><?= parentType($pending['parentType']); ?></td>
													<td><?= $pending['parentNames']; ?></td>
													<td><?= $pending['parentPhoneNumber']; ?></td>
													<td><?= $pending['status']==0?'Pending':'Success'; ?></td>
													<td><?= $pending['code']; ?></td>
													<td style="text-align: center">
														<button class="btn btn-sm btn-info" data-id="<?=$pending['id']; ?>"
																 href="javascript:void" class="dropdown-item"
																data-toggle="modal" data-target="#documentModal">Docs</button>
														<button class="btn btn-sm btn-success"
																<?=$pending['status']==0 || $pending['status']==2 ?'disabled':'';?>
																data-id="<?=$pending['id']; ?>"
																href="javascript:void"
																data-toggle="modal" data-target="#approveRegistrationModal"
														>Approve</button>
														<button class="btn btn-sm btn-primary smsBtn" data-id="<?=$pending['id']; ?>" <?=$pending['status']==0 || $pending['status']==2 ?'disabled':'';?>>Send sms</button>
													</td>
												</tr>
												<?php
											}
											?>
											</tbody>
											<tfoot>
											<tr>
												<th>#</th>
												<th>Applicant</th>
												<th>Gender</th>
												<th>Level</th>
												<th>Studying mode</th>
												<th>Parent type</th>
												<th>Parent name</th>
												<th>Parent phone</th>
												<th>Payment status</th>
												<th>Application - code</th>
												<th></th>
											</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
