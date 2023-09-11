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
    .form-container {
      display: none;
    }

    .nav-container {
      background-image: url("<?= base_url(); ?>assets/landing_new/css/back1.jpg");
      background-repeat: no-repeat;
      background-size: cover;
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
      margin-top: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100%;
    }

    /* Center content */
    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
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
  <div class="center">
    <div class="content" id="selectorDiv">
      <h3>Choose</h3>

      <label><input type="radio" name="userType" value="student" onclick="showForm('student')"> Student</label>
      <label><input type="radio" name="userType" value="agent" onclick="showForm('agent')"> Agent</label>
      <label><input type="radio" name="userType" value="abroad" onclick="showForm('abroad')"> Abroad Student</label>
    </div>
  </div>

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
        <option value="Cash">Cash</option>
        <option value="Bank Transfer">Bank Transfer</option>
        <option value="PayPal">PayPal</option>
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
    <!-- Your form fields for student go here -->
  </div>

  <!-- Agent Form -->
  <div class="form-container" id="agentForm">
    <div class="max-w-xl mx-auto mt-12">
      <h2 class="text-gray-700 font-bold text-2xl">APPLY FOR SCHOLARSHIP</h2>

      <div class="my-4">
        <p class="text-gray-700 font-medium">SCHOLARSHIP COVERS 50% TUITION FEES
          OPPORTUNITY TO STUDY ABROAD
          OPPORTUNITY FOR INTERNSHIP TO OUR PARTNERS </p>
      </div>

      <form id="agentApplicationForm" METHOD="POST">
        <h3>PERSONAL INFORMATION</h3>
        Names: <input type="text" name="names" required><br>
        Phone Number: <input type="tel" name="telephone" required pattern="[0-9]{10}"><br>
        Email Address: <input type="email" name="email_address" required><br>
        DISTRICT OF RESIDENCE:
        <input type="text" name="address" required><br>
        <h3>Education Level
        </h3>

        <input type="radio" name="level" value="University Level" required> University Level
        <input type="radio" name="level" value="Secondary Level" required> Secondary Level

        <h3>CHOOSE PROGRAMS YOU WANT TO STUDY</h3>
        <input type="checkbox" name="program" value=" Day "> Day<br>
        <input type="checkbox" name="program" value=" Night "> Night<br>
        <input type="checkbox" name="program" value=" Weekend "> Weekend<br>


        <h3>SELECT THE COURSE YOU WANT TO STUDY</h3>
        <select name="courses" required>
          <option>-----select course----</option>
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

  <!-- Abroad Student Form -->
  <div class="form-container" id="abroadForm">
    <div class="max-w-xl mx-auto mt-12">
      <h2 class="text-gray-700 font-bold text-2xl">STUDY ABROAD FOR SCHOLARSHIP
      </h2>

      <div class="my-4">
        <p class="text-gray-700 font-medium">KIAC is a professional educational agency, you can explore study abroad
          opportunities with scholarships that cover 90% of your expenses. We specialize in providing guidance and
          support to students interested in studying in Turkey, Armenia, Azerbaijan, and Schengen countries.</p>
      </div>
      <form id="abroadApplicationForm" enctype="multipart/form-data" METHOD="POST">

        <h3>DO YOU WANT TO STUDY ABROAD FOR SCHOLARSHIP ?</h3>
        <input type="radio" name="want_to_study" value="yes" required> Yes
        <input type="radio" name="want_to_study" value="no" required> No
        <!-- <div class="error" id="educationLevelError"></div> -->

        <h3>IF YOU ARE INTERESTED ON THIS SCHOLARSHIP; PROCEED TO THE NEXT STEP.</h3>
        <input type="radio" name="interested" value="YES" required>I AM INTERESTED
        <input type="radio" name="interested" value="NO" required> NOT INTERESTED
        <!-- <div class="error" id="secondaryFinishedError"></div> -->

        <h3>PERSONAL INFORMATION</h3>
        <!-- First Name: <input type="text" name="firstName" required><br>
        Last Name: <input type="text" name="lastName" required><br> -->
        Date of Birth: <input type="date" name="birth_date" required><br>
        Gender:
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female
        <div class="error" id="genderError"></div>
        Nationality: <input type="text" name="nationality" required><br>
        Phone Number: <input type="tel" name="phone_number" required pattern="[0-9]{10}"><br>
        Email Address: <input type="email" name="email_add" required><br>


        <h3>YOUR CURRENT LEVEL OF EDUCATION </h3>
        <input type="radio" name="university_level" value="University Level" required> University Level
        <input type="radio" name="university_level" value="Secondary Level" required> Secondary Level
        <div class="error" id="educationLevelError"></div>

        <!-- ... Repeat for all other sections ... -->
        <h3>SELECT YOUR DESIRED COUNTRY
          *</h3>
        <input type="radio" name="desired_country" value="TURKEY" required> TURKEY
        <input type="radio" name="desired_country" value="ARMENIA" required> ARMENIA
        <input type="radio" name="desired_country" value="AZERBAIJAN" required> AZERBAIJAN
        <div class="error" id="universityGraduatedError"></div>

        <h3>WHICH PROGRAM DO YOU WANT TO APPLY FOR ?
          *</h3>
        Program:
        <input type="text" name="program" required><br>
        <h3>REQUIRED DOCUMENT</h3>
        YOUR PHOTO PASSPORT: <input type="file" name="passport_pic"><br>
        ACADEMIC TRANSCRIPT [SCHOOL REPORT]: <input type="file" name="transcript_doc"><br>
        YOUR VALID PASSPORT: <input type="file" name="id_passport"><br>
        COVID_19 VACINATION CERTIFICATE <input type="file" name="vaccine"><br>

        <input type="submit" value="Submit Application" id="submitButton">

        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modalText"></p>
          </div>
        </div>

      </form>


      <!-- Your form fields for abroad student go here -->

    </div>

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
    }).then(response => {
      return response.json().then(data => {
        if (!response.ok) {
          throw new Error(data.error || alert("Some thing went wrong! Plz Fill the Form as it required "));
          location.reload();
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

  function gatheragentFormData() {
    let data = {
      names: document.querySelector('[name="names"]').value,
      telephone: document.querySelector('[name="telephone"]').value,
      email_address: document.querySelector('[name="email_address"]').value,
      address: document.querySelector('[name="address"]').value,
      level: document.querySelector('[name="level"]:checked').value,
      course: document.querySelector('[name="courses"]').value,
    };

    const programs = Array.from(document.querySelectorAll('[name="program"]:checked')).map(input => input.value);

    // Initialize URLSearchParams from the data object
    const params = new URLSearchParams(data);

    // Add each program to the params
    programs.forEach(program => {
      params.append('program', program);
    });

    return params.toString();
  }

  function sendAgentDataToServer() {
    let formData = gatheragentFormData();

    // fetch('http://localhost:3000/api/agents/application', {
    fetch('http://173.212.230.165:3000/api/agents/application', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: formData
    }).then(response => {
      if (!response.ok) {
        return response.json().then(data => {
          const errorMessage = data.error || "Please fill the form correctly";
          alert(errorMessage);
          throw new Error(errorMessage);
        });
      }
      return response.json();
    }).then(data => {
      console.log(data);
      // showModal('Your application sent successfully!');
      alertAndReload('Your application was sent successfully!');
    }).catch(error => {
      console.error('Error:', error);
      // showModal("Some thing went wrong! Plz Fill the Form as it required ");
      alertAndReload('Something went wrong! Please fill the form correctly.');
    });
  }
  document.getElementById('agentApplicationForm').addEventListener('submit', function (e) {
    e.preventDefault();
    sendAgentDataToServer();
  });




  // abbroad
  function gatherAbroadFormData() {
    let formData = new FormData();
    formData.append('university_level', document.querySelector('[name="university_level"]:checked').value);
    formData.append('gender', document.querySelector('[name="gender"]:checked').value);
    formData.append('want_to_study', document.querySelector('[name="want_to_study"]:checked').value);
    formData.append('interested', document.querySelector('[name="interested"]:checked').value);
    formData.append('desired_country', document.querySelector('[name="desired_country"]:checked').value);
    formData.append('birth_date', document.querySelector('[name="birth_date"]').value);
    formData.append('phone_number', document.querySelector('[name="phone_number"]').value);
    formData.append('email_add', document.querySelector('[name="email_add"]').value);
    formData.append('program', document.querySelector('[name="program"]').value);

    // Handle file uploads
    if (document.querySelector('[name="id_passport"]').files.length > 0) {
      formData.append('id_passport', document.querySelector('[name="id_passport"]').files[0]);
    }
    if (document.querySelector('[name="passport_pic"]').files.length > 0) {
      formData.append('passport_pic', document.querySelector('[name="passport_pic"]').files[0]);
    }
    if (document.querySelector('[name="vaccine"]').files.length > 0) {
      formData.append('vaccine', document.querySelector('[name="vaccine"]').files[0]);
    }

    if (document.querySelector('[name="transcript_doc"]').files.length > 0) {
      formData.append('transcript_doc', document.querySelector('[name="transcript_doc"]').files[0]);
    }
    return formData;
  }

  function sendAbroadDataToServer() {

    let formData = gatherAbroadFormData();

    // fetch('http://localhost:3000/api/study/abroad/application', {
    fetch('http://173.212.230.165:3000/api/study/abroad/application', {
      method: 'POST',
      headers: {
        // 'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: formData,
    })
      .then((response) => {
        if (!response.ok) {
          return response.json().then((data) => {
            const errorMessage = data.error || 'Please fill the form correctly';
            alertAndLogError(errorMessage);
            throw new Error(errorMessage);
          });
        }
        return response.json();
      })
      .then((data) => {
        console.log(data);
        alertAndReload('Your application was sent successfully!');
      })
      .catch((error) => {
        console.error('Client-Side Error:', error);
        alertAndLogError('Something went wrong! Please fill the form correctly.');
      });
  }

  function alertAndLogError(errorMessage) {
    alert(errorMessage);
    console.error('Server-Side Error:', errorMessage);
  }



  document.getElementById('abroadApplicationForm').addEventListener('submit', function (e) {
    e.preventDefault();
    sendAbroadDataToServer();
  });


  function alertAndReload(message) {
    alert(message);
    location.reload();
  }

  function checkOnlyOne(checkbox) {
    const checkboxes = document.getElementsByName('program');
    checkboxes.forEach((chk) => {
      if (chk !== checkbox) {
        chk.checked = false;
      }
    });
  }


</script>

</body>

</html>