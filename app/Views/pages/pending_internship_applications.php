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

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Your Page Title</title>

	<!-- Include Bootstrap CSS and JavaScript -->
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
		#messageModal {
			z-index: 1050;
			/* Make sure this value is higher than other elements on the page */
		}

		.modal-backdrop {
			display: none;
			/* This removes the default dark backdrop. If you want to keep the backdrop but remove the blur, you'll need to adjust this. */
		}
	</style>


</head>

<body>
	<div class="app-inner-layout app-inner-layout-page">
		<div class="app-inner-layout__wrapper">
			<div class="app-inner-layout__content">
				<div class="tab-content">
					<div class="container-fluid">
						<div class="card mb-3">
							<div class="card-header-tab card-header">
								<div class="card-header-title font-size-lg text-capitalize font-weight-normal">
									<i class="header-icon typcn typcn-home-outline text-muted opacity-6"> </i>
									<?= $title; ?>
								</div>
								<div class="btn-actions-pane-right actions-icon-btn">
									<!-- Add your buttons or actions here -->
								</div>
							</div>
							<div class="card-body">
								<div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
									<div class="row">
										<div class="col-sm-12">
											<table style="width: 100%;" id="example"
												class="table-hover table-striped table-bordered">
												<thead>
													<tr role="row">
														<th>#</th>
														<th>Applicant</th>
														<th>Email</th>
														<th>Gender</th>
														<th>Phone</th>
														<th>National Id</th>
														<th>Field Of Study</th>
														<th>Course</th>
														<th>Payment status</th>
														<th style="text-align: center; white-space: nowrap;">Actions
														</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($pendings as $key => $pending) { ?>
														<tr>
															<td>
																<?= $key + 1; ?>
															</td>
															<td>
																<?= $pending['firstName'] . ' ' . $pending['lastName']; ?>
															</td>
															<td>
																<?= $pending['email']; ?>
															</td>
															<td>
																<?= $pending['gender'] == "male" ? "Male" : "Female"; ?>
															</td>
															<td>
																<?= $pending['phone']; ?>
															</td>
															<td>
																<?= $pending['national_id']; ?>
															</td>
															<td>
																<?= $pending['fieldOfStudy']; ?>
															</td>
															<td>
																<?= $pending['course']; ?>
															</td>
															<td>
																<?= !$pending['payment_status'] ? 'Unpaid' : 'Paid'; ?>
															</td>
															<!-- Displaying the id as the application code -->
															<td style="text-align: center;">
																<div
																	style="display: flex; justify-content: center; gap: 2px; padding:20px;">
																	<!-- Add your blue button -->
																	<div>
																		<button class="btn btn-sm btn-success"
																			data-id="<?= $pending['id']; ?>">Approve</button>
																	</div>
																	<div>
																		<button class="btn btn-sm btn-danger"
																			data-id="<?= $pending['id']; ?>">Reject</button>
																	</div>
																</div>
															</td>
														</tr>
													<?php } ?>
												</tbody>
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
	<!-- Message Modal -->
	<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Message</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" id="messageModalBody">
					<!-- Message will be inserted here -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
						onclick="closeModal()">Close</button>
				</div>
			</div>
		</div>
	</div>

</body>
<script>
	// Function to initiate document download
	const downloadDocument = async (url) => {
		const link = document.createElement('a');
		link.href = url;
		link.target = '_blank';
		link.rel = 'noopener noreferrer';
		link.click();
	};

	// Add click event listeners to the "Download" buttons
	document.querySelectorAll('.download-doc').forEach(button => {
		button.addEventListener('click', function () {
			// Get the document path from the data attribute
			const documentPath = this.getAttribute('data-document-path');

			// Construct the full document URL
			// const serverBaseUrl = 'http://173.212.230.165:3000/api/students/'; // Replace with your server's base URL
			const serverBaseUrl = 'http://localhost:3000/api/students/'; // Replace with your server's base URL
			const documentUrl = serverBaseUrl + documentPath;

			// Initiate the document download
			downloadDocument(documentUrl);
		});
	});

	// ... Your existing code ...
	function showMessageInModal(message) {
		const modalBody = document.getElementById('messageModalBody');
		modalBody.textContent = message;
		$('#messageModal').modal('show');
	}

	function closeModal() {
		$('#messageModal').modal('hide');
	}

	document.querySelectorAll('.btn-success').forEach(button => {
		button.addEventListener('click', function () {
			const studentId = this.getAttribute('data-id');
			fetch(`http://173.212.230.165:3000/api/students/application/${studentId}/updateStatus`, {
			// fetch(`http://localhost:3000/api/students/application/${studentId}/updateStatus`, {
				method: 'PUT',
			})
				.then(response => response.json())
				.then(data => {
					if (data.message) {
						// Show the message in the modal
						document.querySelector('#messageModal .modal-body').innerText = data.message;
						$('#messageModal').modal('show');

						// Reload the page after closing the modal
						$('#messageModal').on('hidden.bs.modal', function (e) {
							location.reload();
						});
					} else {
						console.error(data.details || "Unknown error");
					}
				})
				.catch(error => {
					console.error(error);
				});
		});
	});

	document.querySelectorAll('.btn-danger').forEach(button => {
		button.addEventListener('click', function () {
			const studentId = this.getAttribute('data-id');
			fetch(`http://173.212.230.165:3000/api/students/application/${studentId}/reject`, {
			// fetch(`http://localhost:3000/api/students/application/${studentId}/reject`, {
				method: 'PUT',
			})
				.then(response => response.json())
				.then(data => {
					if (data.message) {
						// Show the message in the modal
						document.querySelector('#messageModal .modal-body').innerText = data.message;
						$('#messageModal').modal('show');

						// Reload the page after closing the modal
						$('#messageModal').on('hidden.bs.modal', function (e) {
							location.reload();
						});
					} else {
						console.error(data.details || "Unknown error");
					}
				})
				.catch(error => {
					console.error(error);
				});
		});
	});

</script>

</html>