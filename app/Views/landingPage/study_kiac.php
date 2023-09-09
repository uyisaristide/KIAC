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
          </div>
        </div>
      </div>
    </div>

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

  <div class="-mb-24 mt-12">
    <!-- Footer Start -->
    <div class="bg-[#091e35] text-white py-16 px-4 md:px-6">
      <div class="container mx-auto">
        <div class="grid md:grid-cols-1 md:gap-4 grid-cols-4 gap-0">
          <div class="text-center">
            <div class="mb-4">
              <img class="" src="<?= base_url(); ?>assets/landing_new/img/kiac-logo.png" alt="Logo">
            </div>
          </div>
          <div>
            <h2 class="text-xl font-semibold mb-4 md:mb-2">Get in Touch</h2>
            <div class="text-md">
              <p class="flex items-center gap-2 mt-3 md:mt-2"><i class="fa fa-map-marker"></i>4 KG 11 Ave, Kigali
                YUSSA PLAZZA Building at 1st Floor
              </p>
              <p class="flex items-center gap-2 mt-3"><i class="fa fa-envelope"></i>info@kiac.ac.rw</p>
              <p class="flex items-center gap-2 mt-3"><i class="fa fa-phone"></i>+250 783 205 698</p>
            </div>
          </div>
          <div>
            <h2 class="text-xl font-semibold mb-4 md:mb-2 md:mt-4">Follow Us</h2>
            <div class="text-md">
              <div class="flex gap-3">
                <a href="https://twitter.com/kiac_rwanda" target="_blank" class="fab fa-twitter"></a>
                <a href="https://www.facebook.com/kiac.rw1" target="_blank" class="fab fa-facebook-f"></a>
                <a href="https://www.linkedin.com/in/kigaliartcollege/" target="_blank" class="fab fa-linkedin-in"></a>
                <a href="https://www.instagram.com/kiac_rwanda?" target="_blank" class="fab fa-instagram"></a>
                <a href="https://www.youtube.com/channel/UClc_sPYUsjFGVgFGOi1k01g" target="_blank"
                  class="fab fa-youtube"></a>
              </div>
            </div>
          </div>
          <div>
            <h2 class="text-xl font-semibold mb-4 md:mb-2 mt-4">Useful Links</h2>
            <ul class="text-md">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom bg-[#061429] py-4">
      <div class="container mx-auto text-center">
        <p class="text-sm text-white">Copyright &copy; <a href="#" class="text-white">KIAC</a>. All Rights
          Reserved</p>
      </div>
    </div>
    <!-- Footer Bottom End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top fixed bottom-4 right-4 bg-[#091e35] text-white p-2 rounded-full shadow-md">
      <i class="fa fa-chevron-up"></i>
    </a>

  </div>
  <div id="customAlert" class="modal">
    <div class="modal-content">
      <span class="close-button">×</span>
      <p>Your custom message here</p>
    </div>
  </div>
  <script>
    const MAX_STEPS = 8
    let currentStep = 0
    const prevButton = document.querySelector("#prevButton")
    const nextButton = document.querySelector("#nextButton")

    const form0 = document.querySelector("#edLevel")
    const form1 = document.querySelector("#secondaryLevel")
    const form2 = document.querySelector("#universityLevel")
    const form3 = document.querySelector("#schoolInformation")
    const form4 = document.querySelector('#personalInformation')
    const form5 = document.querySelector('#residentialInformation')
    const form6 = document.querySelector('#chooseCourse')
    const form7 = document.querySelector("#attachments")
    const form8 = document.querySelector("#choose_payment_method")

    let edLevel = ''
    const errors = document.querySelector('#error')

    function checkLevel() {
      var levelRadios = document.getElementsByName('level');

      // Initialize a variable to store the selected value
      var selectedLevel = '';

      // Loop through each radio button
      for (var i = 0; i < levelRadios.length; i++) {
        // Check if the radio button is checked
        if (levelRadios[i].checked) {
          // Set the selectedLevel variable to the value of the checked radio button
          selectedLevel = levelRadios[i].value;
          edLevel = selectedLevel
          break; // Exit the loop once a checked radio button is found
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
    }
    let skip = 1
    prevButton.onclick = (e) => {
      if (currentStep > 0) {
        skip = edLevel.toLocaleLowerCase() == "university" ? 2 : 1

        currentStep -= 1
        handleStepChange(currentStep)
        // handleButtons(currentStep)

      }
      console.log(currentStep)
      if (currentStep == 0) {
        console.log(edLevel)
      }
    }



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

    // Choose Course Fields
    var courseRadio = document.getElementsByName('course');

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
          location.reload();
        }
      })();


      formData.append('phone', phoneNumberInput.value);
      formData.append('email', emailAddressInput.value);

      // Residential Address Fields
      formData.append('country', countryInput.value);
      formData.append('sector', sectorInput.value);
      let districtValue = document.querySelector('input[name="district"]');
      formData.append('district', districtValue.value);
      formData.append('city_relatives', getSelectedRadioValue(liveInKigaliRadio));



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
      
      formData.append('course', getSelectedRadioValue(courseRadio));

      // Attachments Fields
      formData.append('id_passport', idPassportFileInput.files[0]);
      formData.append('transcript', transcriptFileInput.files[0]);

      // Payment Method Field
      // formData.append('payment_method', paymentMethodSelect.value);
      const paymentOption = document.getElementById("payment_option");
      const selectedPaymentMethod = paymentOption.value;


      fetch('http://localhost:3000/api/students/register', {
        method: 'POST',
        body: formData,
      })
        .then(response => {
          if (!response.ok) {
            // Throwing an error to be caught in the next catch block
            throw new Error(`HTTP error! Status: ${response.status}`);
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
              displaySuccessModal();
              location.reload();
            } else {
              console.error('Unknown server message:', data.message);
              return data.message;
            }
          } else {
            console.error('Unexpected response:', data);
            alert("SOMETHING WENT WRONG");
            return data; // Return the unexpected data
          }
        })
        .catch(error => {
          console.error('Error occurred in fetch:', error.message);
          showAlert("Your custom alert message here.");
          // alert("Something went wrong!, try again later");
        });
      document.addEventListener('DOMContentLoaded', (event) => {

        let modal = document.getElementById("customAlert");
        let span = document.getElementsByClassName("close-button")[0];

        function showAlert(message) {
          modal.querySelector("p").textContent = message;
          modal.style.display = "block";
        }

        span.onclick = function () {
          modal.style.display = "none";
          window.location.reload();
        }

        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
            window.location.reload();
          }
        }
      })
    }

    // Helper function to get the selected value from a group of radio buttons
    function getSelectedRadioValue(radioNodeList) {
      let value = null;
      for (let i = 0; i < radioNodeList.length; i++) {
        if (radioNodeList[i].checked) {
          value = radioNodeList[i].value;
          break;
        }
      }
      return value === "true";  // Convert "true" string to true, otherwise return false
    }




  </script>

</body>

</html>