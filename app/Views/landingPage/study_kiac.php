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
    }
    
    .form-container h2 {
      color: #036e9d;
    }
    .form-container p {
      font-size: 16px;
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
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

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
      <h2 class="bold text-2xl">APPLY TO STUDY AT KIGALI INTERNATIONAL ARTS COLLEGE - KIAC</h2>
      <div class="my-4">
        <p class="text-gray-700 fw_400">Kigali International Art College (KIAC) is a prestigious institution in
          Rwanda that offers a variety of courses in technical fields such as CCTV Camera Installation, Computer
          Maintenance, Music, Graphic Design, Videography, Creative Art, Web Design, Software Development, and
          Photography. Applying to KIAC provides you an opportunity to access high-quality, innovative education and
          potentially win a 70% scholarship.</p>
      </div>
    </div>
    <!-- <h4>Student Form</h4> -->
    <div class="w-1/4 px-2 forms-container">
      <form class="shadow-md rounded px-8 pt-6 pb-8 mb-4" id="applicationForm" enctype="multipart/form-data" METHOD="POST">
        <p class="text-xl font-semibold mt-2">What is your level of education:</p>
        <input type="radio" name="level" value="University Level" required> University Level
        <input type="radio" name="level" value="Secondary Level" required> Secondary Level
        <div class="error" id="educationLevelError"></div>

        <p class="text-xl font-semibold mt-2">Did you finish your secondary school:</p>
        <input type="radio" name="secondary_level" value="YES" required> Yes
        <input type="radio" name="secondary_level" value="NO" required> No
        <div class="error" id="secondaryFinishedError"></div>

        <div id="secondaryYearDiv">
          <p class="text-xl font-semibold mt-2">If your answer is no, indicate your year of study at your high school?
          </p>
          <select
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
            name="secondaryYear" id="secondaryYear">
            <option value="" disabled selected>Select your year:</option>
            <option value="S3">S3</option>
            <option value="S4[LEVEL 3]">S4[LEVEL 3]</option>
            <option value="S4[LEVEL 4]">S4[LEVEL 4]</option>
            <option value="S6[LEVEL 5]">S6[LEVEL 5]</option>
          </select>
          <div class="error" id="secondaryYearError"></div>
        </div>

        <!-- ... Repeat for all other sections ... -->
        <p class="text-xl font-semibold mt-2">Did you graduate from university?</p>
        <input type="radio" name="universityGraduated" value="YES" required> Yes
        <input type="radio" name="universityGraduated" value="NO" required> No
        <div class="error" id="universityGraduatedError"></div>

        <div id="universityYearDiv">
          <p class="text-xl font-semibold mt-2">If your answer is no, indicate your year of study at your university?
          </p>
          <select
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
            name="universityYear" id="universityYear" style="margin-bottom: 20px;">
            <option value="" disabled selected>Select your year:</option>
            <option value="YEAR 1">YEAR 1</option>
            <option value="YEAR 2">YEAR 2</option>
            <option value="YEAR 3">YEAR 3</option>
            <option value="YEAR 4">YEAR 4</option>
            <option value="YEAR 5">YEAR 5</option>
          </select>
          <div class="error" id="universityYearError"></div>
        </div>

        <p class="text-xl font-semibold mt-2">Select school:</p>
        <select
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          name="school">
          <option value="" disabled selected>Select your school:</option>
          <option value="Kigali International Art College">Kigali International Art College - KIAC</option>
        </select>
        <div class="error" id="schoolError"></div>

        <!-- Personal Information -->
        <p class="text-xl font-semibold mt-2">Personal Information:</p>
        First Name: <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          type="text" name="firstName" required><br>
        Last Name: <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          type="text" name="lastName" required><br>
          <div class="radio mt-3 mb-2">
        Gender:
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female
        <div class="error" id="genderError"></div>
        </div>
        Nationality: <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          type="text" name="nationality" required><br>
        Date of Birth: <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          type="date" name="dob" required><br>
        Phone Number: <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          type="tel" name="phone" required pattern="[0-9]{10}"><br>
        Email Address: <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          type="email" name="email" required><br>

        <p class="text-xl font-semibold mt-2">Residential address:</p>
        Country of resident:
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          type="text" name="country" required><br>
        District of resident:
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          type="text" name="district" required><br>
        Sector of resident:
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          type="text" name="sector" required><br>

        <p class="text-xl font-semibold mt-2">If you don't live in kigali city, do you have any of your family members
          in Kigali City:</p>
        <input type="radio" name="familyInKigali" value="Yes" required> Yes
        <input type="radio" name="familyInKigali" value="No" required> No
        <div class="error" id="familyInKigaliError"></div>

        <p class="text-xl font-semibold mt-2">Select the Course you want to study:</p>
        <select
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          name="course" required>
          <option value="" disabled selected>Choose Course:</option>
          <option value="CCTV CAMERA">CCTV Camera</option>
          <option value="Computer Hardware">Computer Hardware</option>
          <option value="Music">Music</option>
          <option value="Graphic Design">Graphic Design</option>
          <option value="Video Production">Video Production</option>
          <option value="Creative Art">Creative Art</option>
          <option value="Web design">Web design</option>
          <option value="Software Development">Software Development</option>
          <option value="Photography">Photography</option>
          <option value="Electronic Services">Electronic Services</option>
          <option value="cycle inferieur">cycle inferieur</option>
          <option value="Maternelle">Maternelle</option>
          <option value="Secondaire">Secondaire</option>
        </select>
        <div class="error" id="courseError"></div>

        <p class="text-xl font-semibold mt-2">Choose Program:</p>
        <div class="check mt-1">
        <input type="checkbox" id="day" name="program" value="Day" onclick="checkOnlyOne(this)"> Day<br>
        <input type="checkbox" id="night" name="program" value="Night" onclick="checkOnlyOne(this)"> Night<br>
        <input type="checkbox" id="weekend" name="program" value="Weekend" onclick="checkOnlyOne(this)"> Weekend<br>
        <div class="error" id="programError"></div>
        </div>
        <p class="text-xl font-semibold mt-2">Attachments:</p>
        Your ID or Passport: <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          type="file" name="passport"><br>
          <div class="report mt-2">
        Your adevanced level certificate or Academic transcript [School Report]: <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          type="file" name="transcript"><br>
          </div>

        <p class="text-xl font-semibold mt-2">Application Fee:</p>
        Choose payment method:
        <select
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
          name="paymentMethod">
          <!-- <option value="" disabled selected>Select a payment method</option> -->
          <!-- Add the payment methods you accept here. I'm adding some general ones as examples -->
          <option value="Cash" selected>Cash</option>
          <option value="Momo" disabled>Momo</option>
          <option value="credit card" disabled>credit card</option>
        </select>
        <div class="error" id="paymentMethodError"></div>
        <input type="submit" value="Submit Application" id="submitButton">

        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modalText"></p>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php
  include('footer.php');
  ?>
</body>
<script>
  function showForm(userType) {
    // Hide all forms initially
    // document.getElementById("selectorDiv").style.display = "none";
    document.getElementById("studentForm").style.display = "none";
    document.getElementById("agentForm").style.display = "none";
    document.getElementById("abroadForm").style.display = "none";

    // Display the corresponding form based on user selection
    if (userType === "student") {
      document.getElementById("studentForm").style.display = "block";
    } else if (userType === "agent") {
      document.getElementById("agentForm").style.display = "block";
    } else if (userType === "abroad") {
      document.getElementById("abroadForm").style.display = "block";
    }
  }
  document.getElementById("applicationForm").addEventListener("submit", function (event) {
    let hasError = false;

    // For education level
    if (!document.querySelector('input[name="educationLevel"]:checked')) {
      document.getElementById("educationLevelError").innerText = "Please select your education level.";
      hasError = true;
    } else {
      document.getElementById("educationLevelError").innerText = "";
    }

    // For secondary school finished
    if (!document.querySelector('input[name="secondaryFinished"]:checked')) {
      document.getElementById("secondaryFinishedError").innerText = "Please answer this question.";
      hasError = true;
    } else {
      document.getElementById("secondaryFinishedError").innerText = "";
    }
    // ... Add similar validations for other fields ...
    // For university graduated
    if (!document.querySelector('input[name="universityGraduated"]:checked')) {
      document.getElementById("universityGraduatedError").innerText = "Please answer this question.";
      hasError = true;
    } else {
      document.getElementById("universityGraduatedError").innerText = "";
    }

    // For school selection
    if (!document.querySelector('select[name="school"]').value) {
      document.getElementById("schoolError").innerText = "Please select a school.";
      hasError = true;
    } else {
      document.getElementById("schoolError").innerText = "";
    }

    // For gender selection
    if (!document.querySelector('input[name="gender"]:checked')) {
      document.getElementById("genderError").innerText = "Please select your gender.";
      hasError = true;
    } else {
      document.getElementById("genderError").innerText = "";
    }

    // For family in Kigali question
    if (!document.querySelector('input[name="familyInKigali"]:checked')) {
      document.getElementById("familyInKigaliError").innerText = "Please answer this question.";
      hasError = true;
    } else {
      document.getElementById("familyInKigaliError").innerText = "";
    }
    // For program selection
    if (!document.querySelector('input[name="program"]:checked')) {
      document.getElementById("programError").innerText = "Please select at least one program.";
      hasError = true;
    } else {
      document.getElementById("programError").innerText = "";
    }

    // For course selection
    if (!document.querySelector('select[name="course"]').value) {
      document.getElementById("courseError").innerText = "Please select a course.";
      hasError = true;
    } else {
      document.getElementById("courseError").innerText = "";
    }

    // For payment method selection
    if (!document.querySelector('select[name="paymentMethod"]').value) {
      document.getElementById("paymentMethodError").innerText = "Please select a payment method.";
      hasError = true;
    } else {
      document.getElementById("paymentMethodError").innerText = "";
    }
    if (hasError) {
      event.preventDefault();
    }
  });
  function gatherFormData() {
    let formData = new FormData();

    formData.append('level', document.querySelector('[name="level"]:checked').value);
    formData.append('finish_secondary', document.querySelector('[name="secondary_level"]:checked').value);
    formData.append('secondaryYear', document.querySelector('#secondaryYear').value);
    formData.append('universityGraduated', document.querySelector('[name="universityGraduated"]:checked').value);
    formData.append('universityYear', document.querySelector('#universityYear').value);
    formData.append('school', document.querySelector('[name="school"]').value);
    formData.append('firstName', document.querySelector('[name="firstName"]').value);
    formData.append('lastName', document.querySelector('[name="lastName"]').value);
    formData.append('gender', document.querySelector('[name="gender"]:checked').value);
    formData.append('nationality', document.querySelector('[name="nationality"]').value);
    formData.append('dob', document.querySelector('[name="dob"]').value);
    formData.append('phone', document.querySelector('[name="phone"]').value);
    formData.append('email', document.querySelector('[name="email"]').value);
    formData.append('country', document.querySelector('[name="country"]').value);
    formData.append('district', document.querySelector('[name="district"]').value);
    formData.append('sector', document.querySelector('[name="sector"]').value);
    formData.append('familyInKigali', document.querySelector('[name="familyInKigali"]:checked').value);

    // For checkboxes where multiple values can be checked
    // Array.from(document.querySelectorAll('[name="program"]:checked')).forEach(input => {
    //   formData.append('program', input.value);
    // });
    formData.append("program", document.querySelector('[name="program"]:checked').value);

    formData.append('course', document.querySelector('[name="course"]').value);

    // Handle file uploads
    if (document.querySelector('[name="passport"]').files.length > 0) {
      formData.append('passport', document.querySelector('[name="passport"]').files[0]);
    }

    if (document.querySelector('[name="transcript"]').files.length > 0) {
      formData.append('transcript', document.querySelector('[name="transcript"]').files[0]);
    }

    formData.append('paymentMethod', document.querySelector('[name="paymentMethod"]').value);

    return formData;
  }

  function showModal(message) {
    let modal = document.getElementById("myModal");
    let span = document.getElementsByClassName("close")[0];
    let modalText = document.getElementById("modalText");

    modalText.innerHTML = message;
    modal.style.display = "block";

    span.onclick = function () {
      modal.style.display = "none";
      location.reload();  // Refresh the page when the modal is closed.
    }

    window.onclick = function (event) {
      if (event.target === modal) {
        modal.style.display = "none";
        location.reload();  // Refresh the page when the modal is clicked outside.
      }
    }
  }
  function sendDataToServer() {
    let formData = gatherFormData();


    // fetch('http://localhost:3000/api/students/register', {
    fetch('http://173.212.230.165:3000/api/students/register', {
      method: 'POST',
      body: formData
    }).then(response => response.json())
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

  document.getElementById('applicationForm').addEventListener('submit', function (e) {
    e.preventDefault();
    sendDataToServer();
  });


</script>

</body>

</html>