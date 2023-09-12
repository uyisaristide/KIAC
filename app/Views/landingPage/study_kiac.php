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
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
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
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
      <h2 class="text-gray-700 font-bold text-2xl">APPLY TO STUDY AT KIGALI INTERNATIONAL ARTS COLLEGE (KIAC)</h2>
      <div class="my-4">
        <p class="text-gray-700 font-medium">Kigali International Art College (KIAC) is a prestigious institution in
          Rwanda that offers a variety of courses in technical fields such as CCTV Camera Installation, Computer
          Maintenance, Music, Graphic Design, Videography, Creative Art, Web Design, Software Development, and
          Photography. Applying to KIAC provides you an opportunity to access high-quality, innovative education and
          potentially win a 70% scholarship.</p>
      </div>

    </div>
    <!-- <h4>Student Form</h4> -->

    <form id="applicationForm" enctype="multipart/form-data" METHOD="POST">

      <h3>WHAT IS YOUR LEVEL OF EDUCATION</h3>
      <input type="radio" name="level" value="University Level" required> University Level
      <input type="radio" name="level" value="Secondary Level" required> Secondary Level
      <div class="error" id="educationLevelError"></div>

      <h3>DID YOU FINISH YOUR SECONDARY SCHOOL</h3>
      <input type="radio" name="secondary_level" value="YES" required> YES
      <input type="radio" name="secondary_level" value="NO" required> NO
      <div class="error" id="secondaryFinishedError"></div>

      <div id="secondaryYearDiv">
        <h3>IF YOUR ANSWER IS NO, INDICATE YOUR YEAR OF STUDY AT YOUR HIGH SCHOOL?</h3>
        <select name="secondaryYear" id="secondaryYear">
          <option value="" disabled selected>Select your year</option>
          <option value="S3">S3</option>
          <option value="S4[LEVEL 3]">S4[LEVEL 3]</option>
          <option value="S4[LEVEL 4]">S4[LEVEL 4]</option>
          <option value="S6[LEVEL 5]">S6[LEVEL 5]</option>
        </select>
        <div class="error" id="secondaryYearError"></div>
      </div>

      <!-- ... Repeat for all other sections ... -->
      <h3>DID YOU GRADUATE FROM UNIVERSITY?</h3>
      <input type="radio" name="universityGraduated" value="YES" required> YES
      <input type="radio" name="universityGraduated" value="NO" required> NO
      <div class="error" id="universityGraduatedError"></div>

      <div id="universityYearDiv">
        <h3>IF YOUR ANSWER IS NO, INDICATE YOUR YEAR OF STUDY AT YOUR UNIVERSITY?</h3>
        <select name="universityYear" id="universityYear">
          <option value="" disabled selected>Select your year</option>
          <option value="YEAR 1">YEAR 1</option>
          <option value="YEAR 2">YEAR 2</option>
          <option value="YEAR 3">YEAR 3</option>
          <option value="YEAR 4">YEAR 4</option>
          <option value="YEAR 5">YEAR 5</option>
        </select>
        <div class="error" id="universityYearError"></div>
      </div>

      <h3>SELECT SCHOOL</h3>
      <select name="school">
        <option value="" disabled selected>Select your school</option>
        <option value="Kigali International Art College">Kigali International Art College</option>
      </select>
      <div class="error" id="schoolError"></div>

      <!-- Personal Information -->
      <h3>PERSONAL INFORMATION</h3>
      First Name: <input type="text" name="firstName" required><br>
      Last Name: <input type="text" name="lastName" required><br>
      Gender:
      <input type="radio" name="gender" value="Male" required> Male
      <input type="radio" name="gender" value="Female" required> Female
      <div class="error" id="genderError"></div>
      Nationality: <input type="text" name="nationality" required><br>
      Date of Birth: <input type="date" name="dob" required><br>
      Phone Number: <input type="tel" name="phone" required pattern="[0-9]{10}"><br>
      Email Address: <input type="email" name="email" required><br>

      <h3>RESIDENTIAL ADDRESS</h3>
      COUNTRY OF RESIDENCE:
      <input type="text" name="country" required><br>
      DISTRICT OF RESIDENCE:
      <input type="text" name="district" required><br>
      SECTOR OF RESIDENCE:
      <input type="text" name="sector" required><br>

      <h3>IF YOU DON'T LIVE IN KIGALI CITY, DO YOU HAVE ANY OF YOUR FAMILY MEMBERS IN KIGALI CITY</h3>
      <input type="radio" name="familyInKigali" value="Yes" required> Yes
      <input type="radio" name="familyInKigali" value="No" required> No
      <div class="error" id="familyInKigaliError"></div>
      <h3>COURSE</h3>
      <p>We are excited to inform you about the wide range of courses available for partial scholarships at our
        institution. These scholarships aim to make quality education more accessible to talented individuals like
        yourself. Below, you will find a list of the courses eligible for our partial scholarship program:</p>
      <h3>CHOOSE PROGRAMS YOU WANT TO STUDY</h3>

      <input type="checkbox" id="day" name="program" value="Day" onclick="checkOnlyOne(this)"> Day<br>
      <input type="checkbox" id="night" name="program" value="Night" onclick="checkOnlyOne(this)"> Night<br>
      <input type="checkbox" id="weekend" name="program" value="Weekend" onclick="checkOnlyOne(this)"> Weekend<br>
      <div class="error" id="programError"></div>

      <h3>SELECT THE COURSE YOU WANT TO STUDY</h3>
      <select name="course" required>
        <option value="CCTV CAMERA">CCTV CAMERA</option>
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

      <h3>Attachments</h3>
      YOUR ID OR PASSPORT: <input type="file" name="passport"><br>
      YOUR ADVANCED LEVEL CERTIFICATE OR ACADEMIC TRANSCRIPT [SCHOOL REPORT]: <input type="file" name="transcript"><br>

      <h3>APPLICATION FEE</h3>
      CHOOSE PAYMENT METHOD:
      <select name="paymentMethod">
        <option value="" disabled selected>Select a payment method</option>
        <!-- Add the payment methods you accept here. I'm adding some general ones as examples -->
        <option value="Cash" selected >Cash</option>
        <option value="Bank Transfer" disabled>Momo</option>
        <option value="PayPal" disabled>Credid Card/PayPal</option>
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
  <?php
  include('footer.php');
  ?>
</body>
<script>


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

  function sendDataToServer() {
    if (!isValidForm()) return;
    let formData = gatherFormData();

    function isValidForm() {
      const form = document.getElementById('applicationForm');
      if (!form.checkValidity()) {
        alert('Please fill all the fields correctly.');
        return false;
      }
      return true;
    }
   
    fetch('http://localhost:3000/api/students/register', {
      // fetch('http://173.212.230.165:3000/api/students/register', {
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

  document.getElementById('applicationForm').addEventListener('submit', function (e) {
    e.preventDefault();
    sendDataToServer();
  });





</script>

</body>

</html>