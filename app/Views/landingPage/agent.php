<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
		rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<title>Apply To Study At Kigali International Art School</title>

	<style>
		body {
			font-family: 'Open Sans', sans-serif;
			background-color: #f5f5f5;
			font-size: 14px;
			/* Reduced font size */
		}

		form {
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			postal_box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
			max-width: 800px;
			margin: 40px auto;
		}

		h3 {
			border-bottom: 2px solid #e0e0e0;
			padding-bottom: 10px;
			margin-bottom: 20px;
			font-weight: 600;
			font-size: 16px;
			/* Adjusted font size */
		}

		input[type="text"],
		input[type="date"],
		input[type="tel"],
		input[type="email"],
		select {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #e0e0e0;
			border-radius: 5px;
			font-size: 13px;
			outline: none;
			transition: border 0.3s ease;
		}

		input[type="text"]:focus,
		input[type="date"]:focus,
		input[type="tel"]:focus,
		input[type="email"]:focus,
		select:focus {
			border-color: #007BFF;
		}

		input[type="radio"],
		input[type="checkbox"] {
			margin-right: 5px;
		}

		input[type="radio"],
		input[type="checkbox"] {
			transform: scale(0.9);
			/* Reduce size a bit */
		}

		input[type="file"] {
			margin-bottom: 20px;
			padding: 10px;
			border: 1px solid #e0e0e0;
			border-radius: 5px;
			font-size: 13px;
			width: 100%;
		}


		#submitButton {
			background-color: #007BFF;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 13px;
			cursor: pointer;
			transition: background-color 0.3s ease, transform 0.3s ease;
			display: block;
			width: 100%;
			text-align: center;
		}

		#submitButton:hover {
			background-color: #0056b3;
			transform: scale(1.05);
		}

		.modal {
			display: none;
			position: fixed;
			z-index: 1;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgba(0, 0, 0, 0.4);
		}

		.modal-content {
			background-color: #fefefe;
			margin: 15% auto;
			padding: 20px;
			border: 1px solid #888;
			width: 80%;
		}

		.close {
			color: #aaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: black;
			text-decoration: none;
			cursor: pointer;
		}

		/* Center content */
		.center {
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
			height: 50%;
		}

		/* Center content */
		.center {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 30%;
		}

		/* Styles for the content div */
		.content {
			background-color: #ffffff;
			padding: 20px;
			border-radius: 5px;
			postal_box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			text-align: center;
			/* center the h2 and radio buttons */
		}

		h3 {
			margin-bottom: 20px;
		}

		label {
			display: inline-block;
			/* changed from block to inline-block */
			margin: 0 10px;
			/* added margin to space them apart */
			cursor: pointer;
		}

		input[type="radio"] {
			margin-right: 5px;
		}

		/* Responsive Styles */
		@media (max-width: 768px) {
			form {
				padding: 20px;
			}
		}
	</style>
</head>

<body class="bg-gray-200">
	<div class="form-container" id="studentForm">
		<div class="max-w-xl mx-auto mt-12">

			<div class="form-container" id="agentForm">
				<div class="max-w-xl mx-auto mt-12">
					<h2 class="text-gray-700 font-bold text-2xl">APPLY FOR SCHOLARSHIP</h2>

					<div class="my-4">
						<p class="text-gray-700 font-medium">SCHOLARSHIP COVERS 50% TUITION FEES
							OPPORTUNITY TO STUDY ABROAD
							OPPORTUNITY FOR INTERNSHIP TO OUR PARTNERS </p>
					</div>

					<form id="agentApplicationForm" enctype="multipart/form-data" METHOD="POST">
						<h3>PERSONAL INFORMATION</h3>
						Names: <input type="text" name="names" required><br>
						Phone Number: <input type="tel" name="telephone" required pattern="[0-9]{10}"><br>
						Email Address: <input type="email" name="email_address" required><br>
						Nationality:<input type="text" name="nationality" required><br>
						ID/PC: <input type="file" name="passport"><br>
						Transcript: <input type="file" name="transcript"><br>

						<h3>Status:</h3>
						<input type="checkbox" name="status" value=" Single " onclick=checkOnlyOne(this)> Single<br>
						<input type="checkbox" name="status" value=" Married " onclick=checkOnlyOne(this)> Married<br>
						<input type="checkbox" name="status" value=" Widow " onclick=checkOnlyOne(this)> Widow<br>
						<input type="checkbox" name="status" value=" Divorced " onclick=checkOnlyOne(this)>
						Divorced<br>
						<input type="checkbox" name="status" value=" Separated " onclick=checkOnlyOne(this)>
						Separated<br><br>

						<h3>Current Address</h3>
						Postal Box:
						<input type="text" name="postal_box" required><br>
						District/City:
						<input type="text" name="district" required><br>
						Province:
						<input type="text" name="province" required><br>
						Country:
						<input type="text" name="country" required><br>
						Fax:
						<input type="text" name="fax" required><br><br>
						Current Occupation:
						<input type="checkbox" name="occupation" value=" Student " onclick=checkOnlyOne(this)>
						Student<br>
						<input type="checkbox" name="occupation" value=" Wage Earner " onclick=checkOnlyOne(this)> Wage
						Earner<br>
						<input type="checkbox" name="occupation" value=" Self Employed " onclick=checkOnlyOne(this)>
						Self
						Employed<br>
						<input type="checkbox" name="occupation" value=" Job Seeker " onclick=checkOnlyOne(this)> Job
						Seeker<br>
						<input type="checkbox" name="occupation" value=" Without job " onclick=checkOnlyOne(this)>
						Without
						Job<br><br>

						<h2>Educational Qualification:</h2>
						<p>(Enclose notified/certified copy)</p>

						<label for="level">Level:</label>
						<select id="level" name="level">
							<option value="secondary">Secondary</option>
							<option value="school">School</option>
							<option value="undergraduate">Undergraduate</option>
							<option value="graduate">Graduate</option>
							<option value="research">Research</option>
						</select>
						<br>

						<label for="fieldDegree">Field/Degree:</label>
						<input type="text" id="fieldDegree" name="fieldDegree">
						<br>

						<label for="specialization">Specialization awarded:</label>
						<input type="text" id="specialization" name="specialization">
						<br>

						<label for="year">Year:</label>
						<input type="text" id="year" name="year">
						<br>

						<label for="institution">Institution/University:</label>
						<input type="text" id="institution" name="institution">
						<br>

						<label for="place">Place:</label>
						<input type="text" id="place" name="place">
						<br>

						<label for="grade">Grade obtained:</label>
						<input type="text" id="grade" name="grade">
						<br>

						<label for="certificate">Enclose notified/certified copy:</label>
						<input type="file" id="certificate" name="certificate">
						<br>

						<input type="submit" value="Submit" id="submitButton">
						<div id="myModal" class="modal">
							<div class="modal-content">
								<span class="close">&times;</span>
								<p id="modalText"></p>
							</div>
						</div>
					</form>

				</div>
				<!-- Your form fields for agent go here -->
			</div>

		</div>
	</div>
	<?php
	include('footer.php');
	?>

</body>
<script>
	function gatheragentFormData() {
		let formData = new FormData();
		// name of the form field / name of the file
		formData.append('names', document.querySelector('[name="names"]').value);
		formData.append('telephone', document.querySelector('[name="telephone"]').value);
		formData.append('nationality', document.querySelector('[name="nationality"]').value);
		formData.append('province', document.querySelector('[name="province"]').value);
		formData.append('district', document.querySelector('[name="district"]').value);
		formData.append('country', document.querySelector('[name="country"]').value);
		formData.append('email_address', document.querySelector('[name="email_address"]').value);
		formData.append('postal_box', document.querySelector('[name="postal_box"]').value);
		formData.append('fax', document.querySelector('[name="fax"]').value);

		// Educational Qualification fields
		formData.append('level', document.querySelector('[name="level"]').value);
		formData.append('fieldDegree', document.querySelector('[name="fieldDegree"]').value);
		formData.append('specialization', document.querySelector('[name="specialization"]').value);
		formData.append('year', document.querySelector('[name="year"]').value);
		formData.append('institution', document.querySelector('[name="institution"]').value);
		formData.append('place', document.querySelector('[name="place"]').value);
		formData.append('grade', document.querySelector('[name="grade"]').value);
		formData.append('occupation', document.querySelector('[name="occupation"]').value);
		formData.append('status', document.querySelector('[name="status"]').value);

		if (document.querySelector('[name="passport"]').files.length > 0) {
			formData.append('passport', document.querySelector('[name="passport"]').files[0]);
		}
		if (document.querySelector('[name="certificate"]').files.length > 0) {
			formData.append('certificate', document.querySelector('[name="certificate"]').files[0]);
		}

		if (document.querySelector('[name="transcript"]').files.length > 0) {
			formData.append('transcript', document.querySelector('[name="transcript"]').files[0]);
		}
		// status
		return formData;

	}

	function isValidForm() {
			const form = document.getElementById('agentApplicationForm');
			if (!form.checkValidity()) {
				alert('Please fill all the fields correctly.');
				return false;
			}
			return true;
		}


	function sendDataToServer() {
		if (!isValidForm()) return;
		let formData = gatheragentFormData();
			// fetch('http://173.212.230.165:3000/api/agents/application', {
			fetch('http://localhost:3000/api/agents/application', {
				method: 'POST',

				body: formData,
				dataType: 'json',

			})
				.then(response => response.json())
				.then(data => {
					if (data.success) {
						showModal('Your application was sent successfully!');
					} else {
						const errorMsg = data.error || 'Please fill the form correctly';
						showModal(errorMsg);
					}
				})
				.catch(error => {
					console.error('Error:', error);
					showModal('Something went wrong! Please try again.');
					// showModal(error);
				});
		}

		function showModal(message) {
			const modal = document.getElementById('myModal');
			const span = document.getElementsByClassName("close")[0];
			const modalText = document.getElementById('modalText');

			modalText.innerHTML = message;
			modal.style.display = "block";

			span.onclick = function () {
				modal.style.display = "none";
				location.reload(); // reloads the page
			}

			window.onclick = function (event) {
				if (event.target === modal) {
					modal.style.display = "none";
					location.reload(); // reloads the page
				}
			}
		}



		function checkOnlyOne(checkboxGroupName) {
			// Get all checkboxes with the same name
			const checkboxes = document.querySelectorAll(`input[name="${checkboxGroupName}"]`);

			// Add event listeners to each checkbox
			checkboxes.forEach(checkbox => {
				checkbox.addEventListener('change', function () {
					// If the changed checkbox is checked, uncheck all others
					if (this.checked) {
						checkboxes.forEach(postal_box => {
							if (postal_box !== this) postal_box.checked = false;
						});
					}
				});
			});
		}

		// Usage:
		// Assuming you have checkboxes with the name attribute as "status" and "occupation"
		window.onload = function () {
			checkOnlyOne('status');
			checkOnlyOne('occupation');
		}

		document.getElementById('agentApplicationForm').addEventListener('submit', function (e) {
			e.preventDefault();
			sendDataToServer();
		});

</script>

</html>