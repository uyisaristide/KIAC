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
	<title>Apply for agent</title>

	<style>
		body {
			font-family: 'Open Sans', sans-serif;
		}

		.form-container h2 {
			color: #036e9d;
		}

		.forms-container {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.forms-container form {
			width: 40%;
			padding: 20px;
			--tw-bg-opacity: 0.5;
			background-color: rgb(229 231 235 / var(--tw-bg-opacity)) !important;
			/* background-color: #EBF8FF; */
			border: 1px solid rgba(3, 110, 157, 0.3);
		}

		.forms-container p {
			border-bottom: 2px solid #e0e0e0;
			padding: 10px 0 5px;
			font-weight: 500;
			font-size: 16px;
		}

		input[type="radio"],
		input[type="checkbox"] {
			margin-right: 5px;
		}

		input[type="radio"],
		input[type="checkbox"] {
			transform: scale(0.9);
		}

		#submitButton {
			margin-top: 10px;
			background-color: #007BFF;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 16px;
			font-weight: 500;
			cursor: pointer;
			transition: background-color 0.3s ease, transform 0.3s ease;
			display: block;
			width: 100%;
			text-align: center;
		}

		#submitButton:hover {
			background-color: #0056b3;
			transform: scale(1.0);
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

		.center {
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
			height: 50%;
		}

		.center {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 30%;
		}

		.content {
			background-color: #ffffff;
			padding: 20px;
			border-radius: 5px;
			postal_box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			text-align: center;
			/* center the h2 and radio buttons */
		}

		label {
			display: inline-block;
			margin: 0 10px;
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

	<!-- <div class="form-container" id="studentForm">
		<div class="max-w-xl mx-auto mt-12"> -->

	<div class="form-container" id="agentForm">
		<div class="max-w-xl mx-auto mt-12 my-4 text-center">
			<h2 class="bold text-2xl">APPLY FOR AGENT</h2>
		</div>
		<div class="w-1/4 px-2 forms-container">
			<form class="shadow-md rounded px-8 pt-6 pb-8 mb-4" id="agentApplicationForm" enctype="multipart/form-data"
				METHOD="POST">
				<p class="text-xl font-semibold mt-2">Personal Information</p>
				Names: <input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
					type="text" name="names" required><br>
				Phone Number: <input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
					type="tel" name="telephone" required pattern="[0-9]{10}"><br>
				Email Address: <input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
					type="email" name="email_address" required><br>
				Nationality:<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
					type="text" name="nationality" required><br>
				ID/PC: <input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
					type="file" name="passport"><br>
				Transcript: <input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
					type="file" name="transcript"><br>

				<p class="text-xl font-semibold mt-2">Status:</p>
				<div class="check mt-1">
					<input type="checkbox" name="status" value=" Single " onclick=checkOnlyOne(this)> Single<br>
					<input type="checkbox" name="status" value=" Married " onclick=checkOnlyOne(this)> Married<br>
					<input type="checkbox" name="status" value=" Widow " onclick=checkOnlyOne(this)> Widow<br>
					<input type="checkbox" name="status" value=" Divorced " onclick=checkOnlyOne(this)>
					Divorced<br>
					<input type="checkbox" name="status" value=" Separated " onclick=checkOnlyOne(this)>
					Separated<br><br>
				</div>
				<p class="text-xl font-semibold mt-2">Current Address</p>
				Postal Box:
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
					type="text" name="postal_box" required><br>
				District/City:
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
					type="text" name="district" required><br>
				Province:
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
					type="text" name="province" required><br>
				Country:
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
					type="text" name="country" required><br>
				Fax:
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
					type="text" name="fax" required><br><br>

				<p class="text-xl font-semibold mt-2">Current Occupation:</p>
				<div class="check mt-1">
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
				</div>
				<p class="text-xl font-semibold mt-2">Educational Qualification & Enclose notified/certified copy:</p>
				<!-- <p>(Enclose notified/certified copy)</p> -->

				<label for="level">Level:</label>
				<!-- <p class="text-xl font-semibold mt-2">Level:</p> -->
				<select
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-3"
					id="level" name="level">
					<option value="secondary">Secondary</option>
					<option value="school">School</option>
					<option value="undergraduate">Undergraduate</option>
					<option value="graduate">Graduate</option>
					<option value="research">Research</option>
				</select>
				<br>

				<label for="fieldDegree">Field/Degree:</label>
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-1"
					type="text" id="fieldDegree" name="fieldDegree">
				<br>

				<label for="specialization">Specialization awarded:</label>
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-1"
					type="text" id="specialization" name="specialization">
				<br>

				<label for="year">Year:</label>
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-1"
					type="text" id="year" name="year">
				<br>

				<label for="institution">Institution/University:</label>
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-1"
					type="text" id="institution" name="institution">
				<br>

				<label for="place">Place:</label>
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-1"
					type="text" id="place" name="place">
				<br>

				<label for="grade">Grade obtained:</label>
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-1"
					type="text" id="grade" name="grade">
				<br>

				<label for="certificate">Enclose notified/certified copy:</label>
				<input
					class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-1"
					type="file" id="certificate" name="certificate">
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
	</div>
	<!-- Your form fields for agent go here -->
	<!-- </div>
	</div> -->
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
		fetch('http://173.212.230.165:3000/api/agents/application', {
			// fetch('http://localhost:3000/api/agents/application', {
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