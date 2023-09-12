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
														<th>Phone</th>
                                                        <th>Email</th>
                                                        <th>certificate</th>
											
														<th>Level</th>
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
																<?= $pending['names'] ?>
															</td>
															<td>
																<?= $pending['telephone']?>
															</td>
                                                            <td>
                                                                <?= $pending['email_address']; ?>
                                                            </td>                        
															<td>
																<?= $pending['status']; ?>
															</td>
                                                            <td>
																<?= $pending['level']; ?>
															</td>
															<!-- Displaying the id as the application code -->
															<td style="text-align: center;">
																<div
																	style="display: flex; justify-content: center; gap: 2px; padding:20px;">
																	<!-- Add your blue button -->
																	 <div>
																		<button class="btn btn-sm btn-info download-doc"
																			data-document-path="">
																			Transcript</button>
																	</div>
																	<!-- Button to download Passport -->
																	 <div>
																		<button
																			class="btn btn-sm btn-secondary download-doc"
																			data-document-path="">
																			Passport</button>
																	</div>
																	<div>
																		<button class="btn btn-sm btn-success"
																			data-id="<?= $pending['id']; ?>">Approve</button>
																	</div>
																	<div>
																		<button class="btn btn-sm btn-danger"
																			data-id="<?= $pending['id']; ?>"
																			data-toggle="modal"
																			data-target="#exampleModal1">Reject</button>
																	</div>
																</div>
															</td>
														</tr>
													<?php } ?>
												</tbody>
												<!-- <tfoot>
													<tr>
														<th>#</th>
														<th>Applicant</th>
														<th>Gender</th>
														<th>Phone</th>
														<th>Program</th>
														<th>Payment status</th>
														<th>Course</th>
														<th style="text-align: center; white-space: nowrap;">Actions
														</th>
													</tr>
												</tfoot> -->
											</table>
										</div>
									</div>
								</div>
							</div>
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
			// const serverBaseUrl = 'http://173.212.230.165:3000/api/agents'; // Replace with your server's base URL
			const serverBaseUrl = 'http://localhost:3000/api/agents/'; // Replace with your server's base URL
			const documentUrl = serverBaseUrl + documentPath;

			// Initiate the document download
			downloadDocument(documentUrl);
		});
	});

	document.querySelectorAll('.btn-success').forEach(button => {
		button.addEventListener('click', function () {
			const studentId = this.getAttribute('data-id');

			// Send an AJAX request to update payment status
			fetch(`http://173.212.230.165:3000/api/students/application/${studentId}/updateStatus`, {
				method: 'PUT',
			})
				.then(response => response.json())
				.then(data => {
					if (data.success) {
						// Payment status updated successfully
						// Now, call your API to create a student
						// createStudent(studentId);

						// Reload the page to reflect the changes in the table
						alert("updated successfully")
						location.reload();
					} else {
						// Handle any errors here
						console.error(data.error);
					}
				})
				.catch(error => {
					console.error(error);
				});
		});
	});

</script>

</html>