<!DOCTYPE html>
<html lang="en">

<head>
  <link href="<?= base_url(); ?>assets/landing_new/fontawesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" <meta
    charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apply To Study At Kigali International Art School</title>
  <link href="<?= base_url(); ?>assets/css/tailwind/output.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/landing_new/css/menu1.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>assets/landing_new/css/menu2.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>assets/landing_new/css/menu3.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


  <style>
    .nav-container {
      background-image: url("<?= base_url(); ?>assets/landing_new/css/back1.jpg");
      background-repeat: no-repeat;
      background-size: cover;
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
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: #f4f4f4;
      width: 70%;
    }

    .close-button {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close-button:hover,
    .close-button:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
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

    .error {
      color: red;
      margin-bottom: 20px;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 10;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.6);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 10% auto;
      padding: 40px;
      border-radius: 4px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      max-width: 600px;
      width: 90%;
      transition: transform 0.3s, opacity 0.3s;
      transform: translateY(-50px);
      opacity: 0;
    }

    .modal-open .modal-content {
      transform: translateY(0);
      opacity: 1;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 36px;
      font-weight: bold;
      margin: -20px -20px 0 0;
    }

    .close:hover,
    .close:focus {
      color: #000;
      cursor: pointer;
    }

    #modalText {
      font-size: 20px;
      line-height: 1.4;
      color: #333;
    }

    .error {
      color: red;
      font-weight: bold;
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

  <div class="px-2 py-2 nav-container">
    <div class="border-2 border-white/60 w-full ">
      <!-- img div -->
      <div class="w-full flex items-center justify-between gap-4 h-24 md:block">
        <div class="h-full w-full md:w-full">
          <img class="w-full h-full" src="<?= base_url(); ?>assets/landing_new/img/banner.gif" alt="img" />
        </div>
      </div>
      <div class="p-2 bg-[#333] flex items-center justify-between md:flex-col md:gap-2">
        <div class="flex gap-2 text-white items-center md:flex-col md:gap-3">
          <div class="flex items-center gap-2">
            <i class="fa-regular fa-clock fa-xs"></i>
            <span class="time-real text-xs font-medium">13:52:32</span>
          </div>
          <div class="text-xs text-yellow-300"><a class="text-yellow-300" href="#">KIAC NETWORK</a>
          </div>
          <div class="flex items-center -mt-1 gap-2 text-sm font-italic text-xs">
            <a href="#"
              class="flex item-center gap-1 px-1 border-t-2 pt-1 border-[#333] hover:border-yellow-300 hover:text-yellow-300 transition-all duration-[500]">
              <img src="<?= base_url(); ?>assets/landing_new/img/rkinyarwanda.ico" alt="lang" />
              <span>KINYARWANDA</span>
            </a>
            <a href="#"
              class="flex item-center gap-1 px-1 border-t-2 pt-1 border-[#333] hover:border-yellow-300 hover:text-yellow-300 transition-all duration-[500]">
              <img src="<?= base_url(); ?>assets/landing_new/img/britain.ico" alt="lang" />
              <span>ENGLISH</span>
            </a>
            <a href="#"
              class="flex item-center gap-1 px-1 border-t-2 pt-1 border-[#333] hover:border-yellow-300 hover:text-yellow-300 transition-all duration-[500]">
              <img src="<?= base_url(); ?>assets/landing_new/img/francais.ico" alt="lang" />
              <span>FRANCAIS</span>
            </a>
          </div>
        </div>
        <div class="flex gap-3 items-center md:mt-3">
          <div class="flex gap-3">
            <a href="#" class="text-white hover:text-blue-400 transition-all">
              <i class="fa-brands fa-facebook-f fa-xs"></i>
            </a>
            <a href="#" class="text-white hover:text-blue-400 transition-all">
              <i class="fa-brands fa-twitter fa-xs"></i>
            </a>
            <a href="#" class="text-white hover:text-blue-400 transition-all">
              <i class="fa-brands fa-instagram fa-xs"></i>
            </a>
          </div>
          <div class="px-4 p-2 border-l border-white/50">
            <a href="#">
              <i class="fa-solid fa-magnifying-glass fa-xl text-blue-400"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <nav class="main-nav w-full" role="navigation">
      <input id="main-menu-state" type="checkbox" />
      <label class="main-menu-btn" for="main-menu-state">
        <span class="main-menu-btn-icon"></span> Toggle main menu visibility
      </label>
      <ul id="main-menu" class="sm sm-blue">
        <li><a class="current" href="/"><i class="fa fa-home fa-lg"></i> Home</a></li>
        <li><a href="#about"><i class="fa fa-institution"></i> About</a>
        </li>
        <li><a href="#programs"><i class="fa fa-heartbeat "></i> Programs</a>
        </li>
        <li><a href="#"><i class="fa fa-trophy"></i> KIAC Agent</a>
        </li>
        <li><a href="#"><i class="fa fa-bullseye"></i> Imyidagaduro</a>
        </li>
        <li><a href="#contact"><i class="fa fa-laptop"></i> Contact Us</a>
        </li>
        <li><a href="#"><i class="fa fa-language"></i> Logs</a></li>
      </ul>
      <ul id="main-menu2" class="sm2 sm-blue">
        <li><a href="#"><i class="fa fa-plane"></i> KIAC TV</a>
        </li>
        <li><a href="#"><i class="fa fa-line-chart "></i> Facilities</a>
        </li>
        <li><a href="#"><i class="fa fa-group"></i> News And Events</a>
        </li>
        <li><a href="#"><i class="fa fa-female"></i> Products</a>
        </li>
        <li><a href="#"><i class="fa fa-building"></i> Alarm</a></li>
        <li><a href="#"><i class="fa fa-newspaper-o"></i> Amakuru</a>
        </li>
        <li class="menu-item">
          <h2><a id="has-submenu" class="" href="study_at_kiac"><span class="sub-arrow">+</span><i
                class="fa fa-share-alt"></i> Apply Now</a></h2>
          <ul class="">
            <li><a href="ibidukikije/">Ibidukikije</a></li>
            <li><a href="umuco/"> Umuco</a></li>
            <li><a href="twinigure/">Twinigure</a></li>
            <li><a href="imyemerere/"><i class="fa fa-plus-circle"></i> Iyobokamana</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>


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
    <input type="checkbox" name="program" value="Day"> Day<br>
    <input type="checkbox" name="program" value="Night"> Night<br>
    <input type="checkbox" name="program" value="Weekend"> Weekend<br>
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
      <option value="Credit Card">Credit Card</option>
      <option value="Bank Transfer">Bank Transfer</option>
      <option value="PayPal">PayPal</option>
    </select>
    <div class="error" id="paymentMethodError"></div>
    <input type="submit" value="Submit Application" id="submitButton">

    <!-- <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <p id="modalText"></p>
        </div>
      </div> -->
    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <p id="modalText"></p>
      </div>
    </div>

  </form>
</body>

<script>
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
    Array.from(document.querySelectorAll('[name="program"]:checked')).forEach(input => {
      formData.append('program', input.value);
    });

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
  // function showModal(message) {
  //   let modal = document.getElementById("myModal");
  //   let span = document.getElementsByClassName("close")[0];
  //   let modalText = document.getElementById("modalText");

  //   modalText.innerHTML = message;
  //   modal.style.display = "block";

  //   span.onclick = function () {
  //     modal.style.display = "none";
  //     location.reload();  // Refresh the page when the modal is closed.
  //   }

  //   window.onclick = function (event) {
  //     if (event.target === modal) {
  //       modal.style.display = "none";
  //       location.reload();  // Refresh the page when the modal is clicked outside.
  //     }
  //   }
  // }
  function showModal(message) {
    let modal = document.getElementById("myModal");
    let span = document.getElementsByClassName("close")[0];
    let modalText = document.getElementById("modalText");

    modalText.innerHTML = message;
    modal.style.display = "block";
    setTimeout(() => modal.classList.add('modal-open'), 10);

    span.onclick = function () {
      modal.classList.remove('modal-open');
      setTimeout(() => {
        modal.style.display = "none";
        location.reload();  // Refresh the page when the modal is closed.
      }, 100);
    }

    window.onclick = function (event) {
      if (event.target === modal) {
        modal.classList.remove('modal-open');
        setTimeout(() => {
          modal.style.display = "none";
          location.reload();  // Refresh the page when the modal is clicked outside.
        }, 100);
      }
    }
  }

  function sendDataToServer() {
    let formData = gatherFormData();


    // fetch('http://localhost:3000/api/students/register', {
    fetch('http://173.212.230.165:3000/api/students/register', {
      method: 'POST',
      body: formData
    }).then(response => {
      return response.json().then(data => {
        if (!response.ok) {
          throw new Error(data.error || 'Network response was not ok');
        }
        return data;
      });
    }).then(data => {
      console.log(data);
      showModal('Your application sent successfully!');
    }).catch(error => {
      console.error('Error:', error);
      showModal("Some thing went wrong! Plz Fill the Form as it required ");
    });
  }

  document.getElementById('applicationForm').addEventListener('submit', function (e) {
    e.preventDefault();
    sendDataToServer();
  });

</script>

</body>

</html>