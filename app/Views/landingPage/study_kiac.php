<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apply To Study At Kigali International Art School</title>
<<<<<<< HEAD
=======
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

>>>>>>> b40f686cd4421bc1add116885efb977cf50ece08
</head>
<body class="bg-gray-200">
<<<<<<< HEAD
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
  <div class="max-w-xl mx-auto">
    <div class="h-4 rounded-xl bg-blue-500 transition-all duration-500 ease-in" id="progressBar">
    </div>
    <span id="progressPerc" class="font-semibold text-gray-700">25%</span>
  </div>
  <form id="form_main" class="">
    <div id="edLevel" class="w-full max-w-xl mx-auto mt-4 shadow-lg p-12 bg-white rounded-xl">
      <div class="mb-4">
        <h2 class="text-blue-700 text-xl font-semibold">EDUCATIONAL BACKGROUND</h2>
        <div class="mt-4">
          <p class="text-sm text-gray-700">We would like to know your educational background</p>
        </div>
        <div class="w-full mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            WHAT IS YOUR LEVEL OF EDUCATION
          </label>
          <div class="">
            <input onclick="checkLevel()" required class="w-3 h-3" type="radio" name="level" id="university"
              value="university" /> University Level
          </div>
          <div class="">
            <input onclick="checkLevel()" required class="w-3 h-3" type="radio" name="level" id="secondary"
              value="secondary" /> Secondary Level
          </div>
        </div>
      </div>
    </div>
    <div id="secondaryLevel" class="w-full max-w-xl mx-auto mt-4 shadow-lg p-12 bg-white rounded-xl hidden">
      <div class="mb-4">
        <h2 class="text-blue-700 text-xl font-semibold">EDUCATIONAL BACKGROUND</h2>
        <div class="mt-4">
          <p class="text-sm text-gray-700">We would like to know your educational background</p>
        </div>
        <div class="w-full mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            DID YOU FINISH YOUR SECONDARY SCHOOL
          </label>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="finish_secondary" value="1" /> YES
          </div>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="finish_secondary" value="0" /> NO
          </div>
        </div>
        <div class="w-full mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            IF YOUR ANSWER IS NO, INDICATE YOUR YEAR OF STUDY AT YOUR HIGH SCHOOL?
          </label>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="secondary_level" value="s3" /> S3
          </div>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="secondary_level" value="S4[level3]" /> S4[LEVEL 3]
          </div>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="secondary_level" value="S5[level4]" /> S4[LEVEL 4]
          </div>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="secondary_level" value="S6[level5]" /> S6[LEVEL 5]
          </div>
        </div>
      </div>
    </div>
    <div id="universityLevel" class="w-full max-w-xl mx-auto mt-4 shadow-lg p-12 bg-white rounded-xl hidden">
      <div class="mb-4">
        <h2 class="text-blue-700 text-xl font-semibold">EDUCATIONAL BACKGROUND</h2>
        <div class="mt-4">
          <p class="text-sm text-gray-700">We would like to know your educational background</p>
        </div>
        <div class="w-full mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            DID YOU GRADUATE FROM UNIVERSITY ?
          </label>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="finish_university" value="1" /> YES
          </div>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="finish_university" value="0" /> NO
          </div>
        </div>
        <div class="w-full mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            IF YOUR ANSWER IS NO, INDICATE YOUR YEAR OF STUDY AT YOUR UNIVERSITY ?
          </label>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="university_level" value="1" /> YEAR 1
          </div>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="university_level" value="2" /> YEAR 2
          </div>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="university_level" value="3" /> YEAR 3
          </div>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="university_level" value="4" /> YEAR 4
          </div>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="university_level" value="5" /> YEAR 5
          </div>
        </div>
      </div>
    </div>
    <div id="schoolInformation" class="w-full max-w-xl mx-auto mt-4 shadow-lg p-12 bg-white rounded-xl hidden">
      <div class="mb-4">
        <h2 class="text-blue-700 text-xl font-semibold">SCHOOL INFORMATION</h2>

        <div class="mt-4">
          <p class="text-sm text-gray-700">Choose school you want to apply for</p>
        </div>
      </div>
      <div class="-mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            SELECT SCHOOL
          </label>
          <select required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            name="school_id" id="schoolSelect">
            <?php foreach ($schools as $school): ?>
              <option value="<?= $school['id'] ?>"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                <?= $school['name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="w-full px-3 mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            REQUIREMENTS FOR THE SELECTED SCHOOL
          </label>
          <div id="requirements" class="requirements">
          </div>
        </div>
      </div>
    </div>
    <div id="personalInformation" class="w-full max-w-xl mx-auto mt-4 shadow-lg p-12 bg-white rounded-xl hidden">
      <div class="mb-4">
        <h2 class="text-blue-700 text-xl font-semibold">PERSONAL INFORMATION</h2>
        <div class="mt-2">
          <p class="text-sm text-gray-700">Your cooperation in providing this information will greatly assist us in
            efficiently processing your application. If you have any concerns or questions regarding the collection of
            personal identification information, please do not hesitate to reach out to us.</p>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Fist Name
          </label>
          <input required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="grid-last-name" name="fname" type="text" placeholder="ex: John">
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Last Name
          </label>
          <input required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="grid-last-name" name="lname" type="text" placeholder="ex: Doe">
        </div>
      </div>
      <div class="-mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Nationality
          </label>
          <input required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="grid-last-name" name="nationality" type="text" placeholder="ex: Rwandan">
        </div>
        <div class="w-full px-3 mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Date Of Birth
          </label>
          <input required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="grid-last-name" name="date_of_birth" type="date">
        </div>
        <div class="w-full px-3 mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Gender
          </label>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="gender" value="male" required /> Male
            <input required class="w-3 h-3" type="radio" name="gender" value="female" required /> Female
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Phone Number
          </label>
          <input required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="grid-last-name" name="phone" type="phone" placeholder="ex: +250....">
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Email Address
          </label>
          <input required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="grid-last-name" name="email" type="text" placeholder="ex: example@at.com">
        </div>
      </div>
    </div>
    <div id="residentialInformation" class="w-full max-w-xl mx-auto mt-4 shadow-lg p-12 bg-white rounded-xl hidden">
      <div class="mb-4">
        <h2 class="text-blue-700 text-xl font-semibold">RESIDENTIAL ADDRESS</h2>
        <div class="mt-2">
          <p class="text-sm text-gray-700">We kindly request you to fill in your personal identification information to
            proceed with your application. Providing accurate and complete personal identification details is essential
            for the application process. This information will be treated with utmost confidentiality and used solely
            for the purpose of processing your application.</p>
        </div>
      </div>
      <div class="-mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            COUNTRY OF RESIDENCE
          </label>
          <input required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="grid-last-name" name="country" type="text" placeholder="Country">
        </div>
        <div class="w-full px-3 mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            DISTRICT OF RESIDENCE
          </label>
          <input required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="grid-last-name" placeholder="District" name="district" type="text">
        </div>
        <div class="w-full px-3 mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            SECTOR OF RESIDENCE
          </label>
          <input required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="grid-last-name" placeholder="Sector" name="sector" type="text">
        </div>
        <div class="w-full px-3 mt-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            IF YOU DON'T LIVE IN KIGALI CITY, DO YOU HAVE ANY OF YOUR FAMILY MEMBERS IN KIGALI CITY
          </label>
          <div class="">
            <input required class="w-3 h-3" type="radio" name="city_relatives" value="0" /> Yes
            <input required class="w-3 h-3" type="radio" name="city_relatives" value="1" /> No
          </div>
        </div>
      </div>
    </div>
    <div id="chooseCourse" class="w-full max-w-xl mx-auto mt-4 shadow-lg p-12 bg-white rounded-xl hidden">
      <div class="mb-6">
        <h2 class="text-blue-700 text-xl font-semibold">COURSE</h2>
        <div class="mt-2">
          <p class="text-sm text-gray-700">We are excited to inform you about the wide range of courses available for
            partial scholarships at our institution. These scholarships aim to make quality education more accessible to
            talented individuals like yourself. Below, you will find a list of the courses eligible for our partial
            scholarship program:</p>
        </div>
      </div>
      <div class="w-full mt-4 mb-4">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
          CHOOSE Programs YOU WANT TO STUDY
        </label>
        <div class="mt-2">
          <div class="flex items-center gap-2">
            <input required type="radio" name="program" value="day" class="p-2 w-4 h-4 focus:ring-blue-500" />
            <span>
              Day
            </span>
          </div>
          <div class="flex items-center gap-2">
            <input required type="radio" name="program" value="night" class="p-2 w-4 h-4 focus:ring-blue-500" />
            <span>
              Evening
            </span>
          </div>
          <div class="flex items-center gap-2">
            <input required type="radio" name="program" value="weekend" class="p-2 w-4 h-4 focus:ring-blue-500" />
            <span>
              Weekend
            </span>
          </div>
        </div>
      </div>
      <div class="mb-6">
        <div class="w-full">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            SELECT THE COURSE YOU WANT TO STUDY
          </label>
          <div class="mt-2">
            <?php foreach ($faculties as $fac): ?>
              <div class="flex items-center gap-2">
                <input required onclick="changeCourse('<?= $fac['title']; ?>')" type="radio" name="course"
                  value="<?= $fac['id']; ?>" class="p-2 w-4 h-4 focus:ring-blue-500" />
                <span>
                  <?= $fac['title']; ?>
                </span>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-4">
            <span class="font-medium">Select a course to see it's description</span>
          </div>
          <div class="">
            <p id="courseDescription"></p>
=======

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
>>>>>>> b40f686cd4421bc1add116885efb977cf50ece08
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD
    <div id="attachments" class="w-full max-w-xl mx-auto mt-4 shadow-lg p-12 bg-white rounded-xl hidden">
      <div class="mb-4">
        <h2 class="text-blue-700 text-xl font-semibold">Attachments</h2>
      </div>
      <div class="-mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            YOUR ID or PASSPORT
          </label>
          <input required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="grid-last-name" name="id_passport" type="file">
        </div>
        <div class="w-full px-3 mt-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            YOUR ADVANCED LEVEL CERTIFICATE or ACADEMIC TRANSCRIPT [SCHOOL REPORT ]
          </label>
          <input required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="grid-last-name" name="transcript" type="file">
        </div>
      </div>
    </div>
    <div id="choose_payment_method" class="w-full max-w-xl mx-auto mt-4 shadow-lg p-12 bg-white rounded-xl hidden">
      <div class="mb-4">
        <h2 class="text-blue-700 text-xl font-semibold">APPLICATION FEE</h2>
        <div class="mt-4">
          <p class="text-sm text-gray-700">CHOOSE PAYMENT METHOD</p>
        </div>
      </div>
      <div class="-mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            SELECT SCHOOL
          </label>
          <select required
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            name="payment_method" id="payment_option">
            <option value="cash"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
              Cash</option>
            <option value="MOMO Pay" disabled
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
              MOMO Pay</option>
            <option value="VIS/CREDIT/DEBIT Card" disabled
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
              VIS/CREDIT/DEBIT Card</option>
          </select>
        </div>
      </div>
    </div>
    <div id="error"
      class="text-red-500 bg-red-200 font-medium w-fit mx-auto p-3 rounded-xl mt-2 text-sm text-center hidden">
      Something went wrong
    </div>
    <div class="max-w-xl mx-auto mt-4 flex gap-4 px-4">
      <button type="button" id="prevButton"
        class="p-3 bg-yellow-700 text-white rounded-lg text-sm font-medium shadow-md">PREV</button>
      <button type="button" id="nextButton"
        class="p-3 bg-blue-500 text-white rounded-lg text-sm font-medium shadow-md">NEXT</button>
    </div>
  </form>
  <?php
  include('footer.php');
  ?>
  <div id="customAlert" class="modal">
    <div class="modal-content">
      <span class="close-button">×</span>
      <p>Your custom message here</p>
=======
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
>>>>>>> b40f686cd4421bc1add116885efb977cf50ece08
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

<<<<<<< HEAD
      var selectedLevel = '';

      for (var i = 0; i < levelRadios.length; i++) {
        if (levelRadios[i].checked) {
          selectedLevel = levelRadios[i].value;
          edLevel = selectedLevel
          break;
        }
      }
    }
    const progressBar = document.querySelector("#progressBar")
    const progressPerc = document.querySelector("#progressPerc")
    let progress = 10
    progressBar.style.width = `${progress}%`
    progressPerc.innerHTML = `${progress}%`
    const courseDescription = document.querySelector("#courseDescription")
    const handleStepChange = (step) => {
      switch (step) {
        case 0:
          form1.classList.add("hidden")
          form2.classList.add("hidden")
          form3.classList.add("hidden")
          form4.classList.add("hidden")
          form5.classList.add("hidden")
          form6.classList.add("hidden")
          form7.classList.add("hidden")
          form8.classList.add("hidden")
          form0.classList.remove("hidden")
          progress = 10
          progressBar.style.width = `${progress}%`
          progressPerc.innerHTML = `${progress}%`
          nextButton.type = "button"
          break
        case 1:
          form1.classList.remove("hidden")
          form2.classList.add("hidden")
          form3.classList.add("hidden")
          form4.classList.add("hidden")
          form5.classList.add("hidden")
          form6.classList.add("hidden")
          form7.classList.add("hidden")
          form8.classList.add("hidden")
          form0.classList.add("hidden")
          progress = 20
          progressBar.style.width = `${progress}%`
          progressPerc.innerHTML = `${progress}%`
          nextButton.type = "button"
          break
        case 2:
          form1.classList.add("hidden")
          form2.classList.remove("hidden")
          form3.classList.add("hidden")
          form4.classList.add("hidden")
          form5.classList.add("hidden")
          form6.classList.add("hidden")
          form7.classList.add("hidden")
          form8.classList.add("hidden")
          form0.classList.add("hidden")
          progress = 30
          progressBar.style.width = `${progress}%`
          progressPerc.innerHTML = `${progress}%`
          nextButton.type = "button"
          break
        case 3:
          form1.classList.add("hidden")
          form2.classList.add("hidden")
          form3.classList.remove("hidden")
          form4.classList.add("hidden")
          form5.classList.add("hidden")
          form6.classList.add("hidden")
          form7.classList.add("hidden")
          form8.classList.add("hidden")
          form0.classList.add("hidden")
          progress = 40
          progressBar.style.width = `${progress}%`
          progressPerc.innerHTML = `${progress}%`
          nextButton.type = "button"
          break
        case 4:
          form1.classList.add("hidden")
          form2.classList.add("hidden")
          form3.classList.add("hidden")
          form4.classList.remove("hidden")
          form5.classList.add("hidden")
          form6.classList.add("hidden")
          form7.classList.add("hidden")
          form8.classList.add("hidden")
          form0.classList.add("hidden")
          progress = 50
          progressBar.style.width = `${progress}%`
          progressPerc.innerHTML = `${progress}%`
          nextButton.type = "button"
          break
        case 5:
          form1.classList.add("hidden")
          form2.classList.add("hidden")
          form3.classList.add("hidden")
          form4.classList.add("hidden")
          form5.classList.remove("hidden")
          form6.classList.add("hidden")
          form7.classList.add("hidden")
          form8.classList.add("hidden")
          form0.classList.add("hidden")
          progress = 75
          progressBar.style.width = `${progress}%`
          progressPerc.innerHTML = `${progress}%`
          nextButton.type = "button"
          break
        case 6:
          form1.classList.add("hidden")
          form2.classList.add("hidden")
          form3.classList.add("hidden")
          form4.classList.add("hidden")
          form5.classList.add("hidden")
          form6.classList.remove("hidden")
          form7.classList.add("hidden")
          form8.classList.add("hidden")
          form0.classList.add("hidden")
          progress = 85
          progressBar.style.width = `${progress}%`
          progressPerc.innerHTML = `${progress}%`
          nextButton.type = "button"
          break
        case 7:
          form1.classList.add("hidden")
          form2.classList.add("hidden")
          form3.classList.add("hidden")
          form4.classList.add("hidden")
          form5.classList.add("hidden")
          form6.classList.add("hidden")
          form7.classList.remove("hidden")
          form8.classList.add("hidden")
          form0.classList.add("hidden")
          progress = 95
          progressBar.style.width = `${progress}%`
          progressPerc.innerHTML = `${progress}%`
          nextButton.type = "button"
          nextButton.innerHTML = "Next"
          break
        case 8:
          form1.classList.add("hidden")
          form2.classList.add("hidden")
          form3.classList.add("hidden")
          form4.classList.add("hidden")
          form5.classList.add("hidden")
          form6.classList.add("hidden")
          form7.classList.add("hidden")
          form8.classList.remove("hidden")
          form0.classList.add("hidden")
          progress = 100
          progressBar.style.width = `${progress}%`
          progressPerc.innerHTML = `${progress}%`
          // nextButton.type = "button"
          nextButton.innerHTML = "Submit Application"
          break

      }
=======
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
        <input type="checkbox" name="program" value="Day"> Day<br>
        <input type="checkbox" name="program" value="Night"> Night<br>
        <input type="checkbox" name="program" value="Weekend"> Weekend<br>


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
>>>>>>> b40f686cd4421bc1add116885efb977cf50ece08
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
<<<<<<< HEAD
    nextButton.onclick = (e) => {
      if (currentStep < MAX_STEPS) {

        skip = edLevel.toLocaleLowerCase() == "university" ? 2 : 1

        currentStep += 1


        handleStepChange(currentStep)


      } else {
        if (currentStep >= MAX_STEPS) {
          sendApplication()
        }
      }
    }
    const handleButtons = (step) => {
      if (step = MAX_STEPS) {
        prevButton.classList.remove("hidden")
        nextButton.classList.add("hidden")
      }
      if (step = 1) {
        prevButton.classList.add("hidden")
        nextButton.classList.remove("hidden")
      }
    }

    //form steps

    const courses = [
      {
        title: "CCTV CAMERA",
        description: "This course equips students with the skills to install, maintain, and troubleshoot closed-circuit television (CCTV) systems. Students learn about camera types, wiring, networking, and video management systems, enabling them to pursue careers in security system installation and maintenance."
      },
      {
        title: "Computer Hardware",
        description: "This course focuses on the technical aspects of computer hardware and software maintenance. Students learn about computer components, system troubleshooting, software installation, and data backup techniques. Graduates can work as computer technicians, system administrators, or pursue further studies in computer science."
      },
      {
        title: "Music",
        description: "The Music course at KIAC offers comprehensive training in music theory, composition, performance, and production. Students can specialize in various instruments or vocal performance. They gain a solid foundation in music theory and have access to recording studios and practice spaces, fostering their creativity and musical abilities."
      },
      {
        title: "Graphic Design",
        description: "This course explores the principles and techniques of visual communication and graphic design. Students learn to use industry-standard software for designing logos, posters, websites, and other visual materials. They develop skills in typography, layout design, and digital image manipulation, preparing them for careers as graphic designers or freelancers."
      },
      {
        title: "Video Production",
        description: "The Video Production course at KIAC teaches students the art of capturing and editing video footage. Students learn about camera operation, lighting, composition, and video editing techniques. They gain practical experience in creating compelling visual stories and can pursue careers in film, television, advertising, or digital media production."
      },
      {
        title: "Creative Art",
        description: "This course focuses on developing students' artistic skills and creativity through various mediums such as painting, sculpture, drawing, and mixed media. Students explore different art forms, techniques, and concepts while honing their artistic expression and visual storytelling abilities."
      },
      {
        title: "Web design",
        description: "The Web Design course provides students with the skills to create visually appealing and functional websites. They learn HTML, CSS, and web design principles to build user-friendly interfaces, responsive designs, and interactive web elements. Graduates can work as web designers or start their own web design businesses."
      },
      {
        title: "Software Development",
        description: "This course trains students in programming languages, software development methodologies, and problem-solving techniques. Students learn to develop software applications, websites, and mobile apps. They gain practical experience through hands-on projects and can pursue careers as software developers or software engineers."
      },
      {
        title: "Photography",
        description: "The Photography course focuses on developing students' technical skills and artistic vision in capturing compelling images. Students learn about camera operation, lighting techniques, composition, and post-processing. They have access to studio equipment and can explore various genres of photography, including portrait, landscape, and documentary."
      }
      ,
      {
        "title": "Electronic Services",
        "description": "This course covers a wide range of topics related to electronic services. It is designed to provide participants with a comprehensive understanding of the various electronic services available today. The course will delve into the principles, technologies, and best practices that drive electronic services in different industries. From online banking to e-commerce platforms, participants will gain insights into the workings and benefits of electronic services. Through practical examples and case studies, participants will also learn how to develop, implement, and optimize electronic service strategies."
      }

    ];
    function changeCourse(title) {
      const course = courses.find(course => course.title.toString().toLowerCase() === title.toString().toLowerCase())
      if (course) {
        console.log(course.description)
        courseDescription.innerHTML = course.description
      }
    }

    const applicationSettings = <?= json_encode($settings); ?>

    const schoolSelect = document.querySelector("#schoolSelect")
    const requirementsDiv = document.querySelector("#requirements")
    schoolSelect.addEventListener('change', (e) => {
      const selectedSchoolId = e.target.value
      console.log(selectedSchoolId)

      const settingsData = applicationSettings.find(req => req.school_id == selectedSchoolId)

      if (settingsData) {
        requirementsDiv.classList.remove("hidden")
        requirementsDiv.innerHTML = `
        <p>Registration Fees: ${settingsData.registration_fees}</p>
        <a download class="bg-blue-500 p-2 block mt-4 w-fit rounded-xl px-3 text-white font-medium " href="assets/documents/${settingsData.requirement_document}">Download the requirements document</a>
        `
      } else {
        requirementsDiv.classList.add("hidden")
      }

    })
    // Educational Background Fields
    let schoolLevel = document.getElementsByName('level')
    var finishSecondaryRadio = document.getElementsByName('finish_secondary');
    var secondaryLevelRadio = document.getElementsByName('secondary_level');
    var finishUniversityRadio = document.getElementsByName('finish_university');
    var universityLevelRadio = document.getElementsByName('university_level');

    // School Information Fields
    // var schoolSelect = document.getElementById('schoolSelect');
    // var requirementsDiv = document.getElementById('requirements');

    // Personal Information Fields
    var firstNameInput = document.querySelector('input[name="fname"]');
    var lastNameInput = document.querySelector('input[name="lname"]');
    var nationalityInput = document.querySelector('input[name="nationality"]');
    var phoneNumberInput = document.querySelector('input[name="phone"]');
    var emailAddressInput = document.querySelector('input[name="email"]');

    // Residential Address Fields
    var countryInput = document.querySelector('input[name="country"]');
    var sectorInput = document.querySelector('input[name="sector"]');
    var liveInKigaliRadio = document.getElementsByName('city_relatives');

    // Attachments Fields
    var idPassportFileInput = document.querySelector('input[name="id_passport"]');
    var transcriptFileInput = document.querySelector('input[name="transcript"]');

    // Payment Method Field
    // var paymentMethodSelect = document.querySelector('select[name="payment_method"]');

    // date of birth

    function sendApplication() {
      // Create a new FormData object to store the form data
      var formData = new FormData();

      // date of birth
      var date_of_birth = document.querySelector("input[name='date_of_birth']");
      formData.append('date_of_birth', date_of_birth.value)
      console.log(date_of_birth)

      // Educational Background Fields

      formData.append('level', getSelectedRadioValue(schoolLevel));

      formData.append('finish_secondary', getSelectedRadioValue(finishSecondaryRadio));  // This will append true or false to formData
      formData.append('secondary_level', getSelectedRadioValue(secondaryLevelRadio));

      formData.append('finish_university', getSelectedRadioValue(finishUniversityRadio));
      formData.append('university_level', getSelectedRadioValue(universityLevelRadio));


      // School Information Fields
      formData.append('school_id', schoolSelect.value);

      // Personal Information Fields
      formData.append('fname', firstNameInput.value);
      formData.append('lname', lastNameInput.value);
      formData.append('nationality', nationalityInput.value);


      (function () {
        let selectedGender = document.querySelector("input[name='gender']:checked");
        if (selectedGender) {
          formData.append('gender', selectedGender.value);
        } else {
          alert("You must select your gender");
=======

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
>>>>>>> b40f686cd4421bc1add116885efb977cf50ece08
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

<<<<<<< HEAD
      formData.append('phone', phoneNumberInput.value);
      formData.append('email', emailAddressInput.value);
=======
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
>>>>>>> b40f686cd4421bc1add116885efb977cf50ece08

    const programs = Array.from(document.querySelectorAll('[name="program"]:checked')).map(input => input.value);

<<<<<<< HEAD
      // Choose Course Fields
      (function () {
        let program = document.querySelector("input[name='program']:checked")
        if (program) {
          formData.append('program', program.value);
        } else {
          alert("You must select program");
          location.reload();
        }
      })();
      // Choose Course Fields
      var courseRadio = document.getElementsByName('course');
      formData.append('course', getSelectedRadioValue(courseRadio));
=======
    // Initialize URLSearchParams from the data object
    const params = new URLSearchParams(data);

    // Add each program to the params
    programs.forEach(program => {
      params.append('program', program);
    });

    return params.toString();
  }
>>>>>>> b40f686cd4421bc1add116885efb977cf50ece08

  function sendAgentDataToServer() {
    let formData = gatheragentFormData();

<<<<<<< HEAD
      // Payment Method Field
      // formData.append('payment_method', paymentMethodSelect.value);
      const paymentOption = document.getElementById("payment_option");
      const selectedPaymentMethod = paymentOption.value;

      fetch('http://173.212.230.165:3000/api/students/register', {
        method: 'POST',
        body: formData,
      })
        .then(response => {
          if (!response.ok) {
            // Throwing an error to be caught in the next catch block
            throw new Error(`HTTP error! Status: ${response.status}`);
            return;
          }
          return response.json(); // Parsing the JSON data from the response
        })
        .then(data => {
          if (data.errors) {
            let firstValue = Object.values(data.errors)[0]; // Get the first error message
            errors.innerHTML = firstValue;
            console.error('Server-side error:', firstValue);
            showAlert(firstValue);
            location.reload();
            return firstValue; // Return the error
          } else if (data.message) {
            if (data.message == "Application created successfully") {
              // alert(data.message);
              // displaySuccessModal();
              showAlert(data.message);
              location.reload();
            } else {
              console.error('Unknown server message:', data.message);
              return data.message;
            }
          } else {
            console.error('Unexpected response:', data);
            alert("SOMETHING WENT WRONG");
            location.reload()
            // return data; // Return the unexpected data
          }
        })
        .catch(error => {
          console.error('Error occurred in fetch:', error.message);
          alert("Something went wrong!, try again later");

          location.reload();
          // showAlert("Your custom alert message here.");
=======
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
>>>>>>> b40f686cd4421bc1add116885efb977cf50ece08
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
<<<<<<< HEAD
  </script>
=======

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



</script>

>>>>>>> b40f686cd4421bc1add116885efb977cf50ece08
</body>
</html>