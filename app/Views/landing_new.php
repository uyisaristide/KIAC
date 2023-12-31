<!DOCTYPE hmtl>
<html lang="rw">

<head>
    <title>KIAC</title>
    <meta charset="utf-8" />
    <meta name="description" content="Kigali Art College" />
    <meta name="keywords" content="Kigali Art College" />
    <meta name="author" content="KIAC" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="<?= base_url(); ?>assets/landing_new/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= base_url(); ?>assets/landing_new/img/logo.png" rel="icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet" />
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/landing_new/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/landing_new/css/main2.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu1.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu2.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu3.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/main.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <link href="<?= base_url(); ?>assets/css/tailwind/output.css" rel="stylesheet">
    <script>
        // Add custom JavaScript to trigger the carousel slide
        $('#carouselControls').on('slide.bs.carousel', function (e) {
            let $nextImage = $(e.relatedTarget);
            let $currentImage = $(e.relatedTarget).prev();

            if ($nextImage.index() > $currentImage.index()) {
                $nextImage.removeClass('right').addClass('left');
                $currentImage.removeClass('left').addClass('right');
            } else {
                $nextImage.removeClass('left').addClass('right');
                $currentImage.removeClass('right').addClass('left');
            }

            $currentImage.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                $(this).removeClass('active left right');
            });
        });
        $('#carouselControls').carousel({ interval: 2000 });
    </script>
    <script>
        function scrollToCourses() {
            const coursesDiv = document.getElementById("our-courses");

            if (coursesDiv) {
                coursesDiv.scrollIntoView({ behavior: "smooth" });
            }
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <style>
        button.login {
            transition: transform 0.3s ease;
        }

        button.login:hover {
            transform: scale(1.001);
            border: 2px solid #036e9d;
            font-weight: bold;
            color: #036e9d !important;
            background-color: #EBF8FF;
        }

        .carousel-fade .carousel-item {
            display: block;
            opacity: 0;
            transform: translateX(100%);
            transition: opacity 1s, transform 1s;
        }

        .carousel-fade .carousel-item.active {
            opacity: 1;
            transform: translateX(0);
        }

        .carousel-fade .carousel-item.active.left {
            transform: translateX(-100%);
        }

        .carousel-fade .carousel-item.active.right {
            transform: translateX(100%);
        }



        #main-menu .menu-item:hover .submenu,
        #main-menu2 .menu-item:hover .submenu {
            display: block;
        }

        #main-menu .submenu,
        #main-menu2 .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            border: none;
            padding: 0;
            width: 100%;
            border-top: 0;
            border-bottom: 0;
            border-left: 0;
            padding: 0;
        }

        #main-menu .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            border: none;
            width: 100%;
            padding: 0;
            border-top: 0;
            border-bottom: 0;
            border-left: 0;
            padding: 0;
        }

        #main-menu .submenu li,
        #main-menu2 .submenu li {
            list-style: none;
            margin: 0;
            padding: 0;
            /* border-bottom: 1px solid rgba(3, 110, 157, 0.3) !important; */
        }

        #main-menu .submenu a,
        #main-menu2 .submenu a {
            display: block;
            padding: 10px 10px;
            text-decoration: none;
            color: #fff;
            text-align: center;
            font-size: 15px;
            font-family: 'Trebuchet MS', sans-serif;
            border-bottom: 1px solid rgba(3, 110, 157, 1) !important;
        }

        #main-menu .submenu a:hover,
        #main-menu2 .submenu a:hover {
            color: #036e9d;
            background: #fff !important;
        }

        .side-button {
            color: #036e9d;
        }

        .side-button:hover {
            color: #fff;
        }

        .box .service-icon {
            width: 40px;
            height: 40px;
            display: flex;
            margin: 15px 0 0;
            align-items: center;
            justify-content: center;
            background: var(--primary);
            border-radius: 2px;
            transform: rotate(-45deg);
        }

        .box .service-icon i {
            transform: rotate(45deg);
        }

        .text-white {
            color: #fff !important;
        }

        .fab {
            font-family: "Font Awesome 5 Brands";
        }

        .contact-container {
            width: 99%;
            border-radius: 5px;
            padding: 10px 0 30px;
        }

        .gallery-image:hover,
        .gallery-image:hover:focus {
            box-shadow: 0 0.5em 0.5em -0.5em var(--hover);
            transform: translateY(-0.5em);

        }

        @media only screen and (max-width: 768px) {

            .middle-banner,
            .middle-banner img {
                display: none;
            }
        }
    </style>

</head>

<body class="w-screen max-w-full -mt-[30px]">
    <div class="w-full max-w-full">
        <div class="container-main p-4">
            <header>
                <div class="border-2 border-white/60 w-full ">
                    <!-- img header -->
                    <div class="w-full flex items-center justify-between  h-24 md:block">
                        <!-- <div class="h-full w-full md:hidden image-slideshow"> -->
                        <div class="h-full w-full image-slideshow">
                            <!-- <div class="image fade"> -->
                            <div class="image">
                                <img class="w-full h-full" id="bannerImage"
                                    src="<?= base_url(); ?>assets/landing_new/img/banner_left.jpg"
                                    data-banner-id="banner1" alt="Banner Image">
                            </div>
                            <!-- <div class="image fade">
                                <img class="w-full h-full"
                                    src="<?= base_url(); ?>assets/landing_new/img/banner_right.jpg" alt="img" />
                            </div>
                            <div class="image fade">
                                <img class="w-full h-full" src="<?= base_url(); ?>assets/landing_new/img/banner.jpg"
                                    alt="img" />
                            </div> -->
                        </div>
                    </div>
                    <div class="p-[1px] bg-[#333] flex items-center justify-between md:flex-col md:gap-2">
                        <div class="flex ml-2 gap-2 text-white items-center md:flex-col md:gap-3">
                            <div class="flex items-center gap-2">
                                <i class="fa-regular fa-clock fa-xs"></i>
                                <span class="time-real text-xs font-medium">13:52:32</span>
                            </div>
                            <div class="text-xs text-yellow-300"><a class="text-yellow-300" href="#">KIAC MIS</a>
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
                        <div class="flex items-center float-right text-white/80 text-xs font-medium py-2">
                            <div class="flex gap-2">
                                <span>+27 &deg;</span>
                                <span class="px-4 border-l">KIGALI</span>
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
                <div>
                    <div class="flex items-center h-[4rem] md:h-[4rem] w-full md:grid md:grid-cols-2">
                        <div class=" py-2 pl-4 md:w-full" style="padding-right: 30px">
                            <img src="<?= base_url(); ?>assets/landing_new/img/logo1.png" alt="no image found"
                                style="width: 150; height: auto;">
                        </div>
                        <div class="w-2/3 md:w-full middle-banner">
                            <img class="w-full h-[80%]"
                                src="<?= base_url(); ?>assets/landing_new/img/middle_banner.jpg " alt="no image found"
                                style="height: 96px">
                        </div>
                        <div class="w-1/4 sm:w-full" style="padding-left: 100px">
                            <button onclick="location.href='<?= base_url('login'); ?>';"
                                class="w-full h-[80%] md:w-full bg-blue-500 text-white login"
                                style="border-radius: 5px; font-size: 20px; padding: 10px 30px;">Login</button>
                        </div>
                    </div>
                </div>
                <nav class="main-nav w-full mt-2" role="navigation">
                    <input id="main-menu-state" type="checkbox" />
                    <label class="main-menu-btn" for="main-menu-state">
                        <span class="main-menu-btn-icon"></span> Toggle main menu visibility
                    </label>
                    <ul id="main-menu" class="sm sm-blue">
                        <li><a class="current" href="#"><i class="fa fa-home fa-lg"></i> Home</a>
                        </li>
                        <li><a href="<?= base_url('about'); ?>"><i class="fa fa-institution"></i> About KIAC</a>
                        </li>
                        <li class="menu-item">
                            <h2>
                                <a id="has-submenu" class="" href="#">
                                    <span class="sub-arrow">+</span><i class="fa fa-heartbeat"></i> Study At KIAC
                                </a>
                            </h2>
                            <ul class="submenu">
                                <li><a href="<?= base_url('TechnicalCourses'); ?>">Technical Courses</a></li>
                                <li><a href="<?= base_url('InternationalStudents'); ?>">International Students</a></li>
                                <li><a href="<?= base_url('AdmissionRequirements'); ?>">Admission requirements</a></li>
                                <li><a href="<?= base_url('TrainingCalendar'); ?>">Training Calendar</a></li>
                                <li><a href="<?= base_url('Fees'); ?>">Fees structure and payment information</a></li>
                                <li><a href="<?= base_url('TrainingOutcome'); ?>">Intended Training Outcome</a></li>
                                <li><a href="<?= base_url('RegulationsPolicies'); ?>">Regulations and policies</a></li>
                                <li><a href="<?= base_url('Elearning'); ?>">E-learning platform</a></li>
                                <li><a href="<?= base_url('ElectronicResources'); ?>">Electronic resources</a></li>
                                <li><a href="<?= base_url('Library'); ?>">Library</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <h2>
                                <a id="has-submenu" class="" href="#">
                                    <span class="sub-arrow">+</span><i class="fa fa-trophy"></i> Students
                                </a>
                            </h2>
                            <ul class="submenu">
                                <li><a href="<?= base_url('Projects'); ?>">Projects</a></li>
                                <li><a href="<?= base_url('StudentsDiversity'); ?>">Students diversity</a></li>
                            </ul>
                        </li>
                        </li>
                        <li><a href="#" onclick="scrollToCourses()"><i class="fa fa-bullseye"></i>Courses</a>
                        </li>
                        <li><a href="#contact"><i class="fa fa-laptop"></i> Admissions</a>
                        </li>
                        <li><a href="<?= base_url('abroad'); ?>"><i class="fa fa-newspaper-o"></i>Study Abroad </a></li>
                    </ul>
                    <ul id="main-menu2" class="sm2 sm-blue">
                        <li><a href="https://www.youtube.com/@kiactv7489" target="_blank"><i
                                    class="fa fa-group"></i>KIAC TV</a></li>
                        <li><a href="#"><i class="fa fa-group"></i>KIAC Records</a></li>
                        <li><a href="#"><i class="fa fa-plane"></i>Services</a></li>
                        <li><a href="#"><i class="fa fa-female"></i> News and Events</a></li>
                        <li><a href="<?= base_url('agent'); ?>"><i class="fa fa-building"></i>Agents</a></li>
                        <li><a href="#"><i class="fa fa-line-chart "></i>Partners</a></li>
                        <li class="menu-item">
                            <h2>
                                <a id="has-submenu" class="" href="#">
                                    <span class="sub-arrow">+</span><i class="fa fa-share-alt"></i> Apply Now
                                </a>
                            </h2>
                            <ul class="submenu">
                                <li><a href="<?= base_url('study_at_kiac'); ?>">Study At KIAC</a></li>
                                <li><a href="<?= base_url('abroad'); ?>">Study Abroad</a></li>
                                <li><a href="<?= base_url('internship'); ?>">Internship</a></li>
                                <li><a href="<?= base_url('partners'); ?>">Be A Partner</a></li>
                                <li><a href="<?= base_url('agent'); ?>">Be An Agent</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>

            <div class="mt-2 w-full ">
                <div class="w-full flex items-center justify-between  h-24 md:block">
                    <div class="h-full w-full md:hidden">
                        <img class="w-full h-full" src="<?= base_url(); ?>assets/landing_new/img/banner_right.jpg"
                            alt="img" alt="Current Banner" id="banner1" />
                    </div>
                </div>

                <div class="flex gap-3 mt-4 md:flex-col ">
                    <div class="w-[30%] md:w-full">
                        <div class="my-2 w-full flex item-center gap-2">
                            <input
                                class="py-1 w-4/6 text-sm px-2 rounded-lg outline-none text-black/90 placeholder:text-black/90 transition-colors bg-blue-100"
                                type="text" placeholder="Search . . ." name="search" id="search"
                                style="border: 1px solid rgba(3, 110, 157, 0.3);" />
                            <button class="p-2 w-2/6 bg-blue-500 rounded-lg text-sm text-white"
                                type="submit">Search</button>
                        </div>
                        <div class="text-center p-2">
                            <h2 class="txt-contact fw_400" style="font-size: 25px; padding-top: 0; font-weight: bold;">
                                Study Abroad</h2>
                        </div>
                        <div class="pt-3 flex flex-col gap-2">
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/arm.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Armenia</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/arm.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Azerbaijan</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/4.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Cyprus</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/turk.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">India</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/turk.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Turkey</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/turk.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Russia</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/turk.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Poland</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/turk.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">USA</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/turk.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Canada</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/turk.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">UK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[60%] h-full md:w-full md:flex md:flex-col">


                        <div class="container">
                            <div id="carouselControls" class="carousel slide carousel-fade rounded-lg bg-white"
                                data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 rounded-lg"
                                            src="<?= base_url() ?>assets/landing_new/img/header-slide-1.jpg" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 rounded-lg"
                                            src="<?= base_url() ?>assets/landing_new/img/header-slide-2.jpg" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 rounded-lg"
                                            src="<?= base_url() ?>assets/landing_new/img/header-slide-4.jpg" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 rounded-lg"
                                            src="<?= base_url() ?>assets/landing_new/img/header-slide-5.jpg" alt="">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                        <!-- Under banner -->

                        <div id="carouselControls" class="carousel slide carousel-fade rounded-lg h-full bg-white"
                            data-ride="carousel"
                            style="padding-top: 10px; margin-top: 20px; border-top: 2px solid rgba(3, 110, 157, 0.3); box-shadow: 0 -5px 5px -5px rgba(0, 0, 0, 0.3);">
                            <!-- <div class="carousel-inner h-full"> -->
                            <!-- <div class="carousel-item active  h-full"> -->
                            <img class="h-full w-full d-block w-100 rounded-lg"
                                src="<?= base_url() ?>assets/landing_new/img/creative.jpg" alt="Banner 4">
                            <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>

                    <div class="w-[30%] md:w-full">
                        <div class="my-2 w-full flex item-center gap-2">
                            <input
                                class="py-1 w-4/6 text-sm px-2 rounded-lg outline-none text-black/90 placeholder:text-black/90 transition-colors bg-blue-100 border-white/30"
                                type="text" placeholder="Search . . ." name="search" id="search"
                                style="border: 1px solid rgba(3, 110, 157, 0.3);" />
                            <button class="p-2 w-2/6 bg-blue-500 rounded-lg text-sm text-white"
                                type="submit">Search</button>
                        </div>
                        <div class="text-center p-2">
                            <h2 class="txt-contact fw_400" style="font-size: 25px; padding-top: 0; font-weight: bold;">
                                Kigali International Art College - KIAC</h2>
                        </div>
                        <div class="pt-3 flex flex-col gap-2">
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/video.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Video Production</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/photo.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Photography</button>
                                </div>
                            </div>

                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/graphic.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Graphic Design</button>
                                </div>
                            </div>

                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/web.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Web Design</button>
                                </div>
                            </div>

                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/crea.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Creative Arts</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/comp.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Computer System</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/music.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Music</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/music.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Electronic Services</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/music.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">Software Development</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-2/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/music.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-3/5">
                                    <button
                                        class="px-3 py-2 text-md rounded-lg w-full font-bold bg-blue-100 transition-colors hover:bg-blue-500 side-button"
                                        href="#">CCTV Camera</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- boxes -->
        <div style="text-align:center;">
            <h2 class="txt-contact fw_400" style="font-size: 25px; padding-top: 0;">Why Choose KIAC</h2>
            <h1 class="mb-0" style="font-size: 16px; padding: 10px 0;"></h1>
        </div>

        <div class="bg-custom-gradient px-4">
            <div class="flex flex-wrap text-white justify-between mx-auto max-w-5xl">
                <!-- Card 1 -->
                <div class="card-container">
                    <img src="<?= base_url() ?>assets/landing_new/img/icon-1.png" alt="Icon 1" class="card-image">
                    <h2 class="card-title">WE'RE ON THE RISE</h2>
                    <p class="text-center">Ranked in the world's top 100 Training Center.</p>
                </div>
                <!-- Card 2 -->
                <div class="card-container">
                    <img src="<?= base_url() ?>assets/landing_new/img/icon-2.png" alt="Icon 2" class="card-image">
                    <h2 class="card-title">BEST COURSE</h2>
                    <p class="text-center">Our Courses are ranked by students as the best</p>
                </div>
                <!-- Card 3 -->
                <div class="card-container">
                    <img src="<?= base_url() ?>assets/landing_new/img/icon-3.png" alt="Icon 3" class="card-image">
                    <h2 class="card-title">FACTS & FIGURES</h2>
                    <p class="text-center">KIAC is a public research Center</p>
                </div>
            </div>
        </div>

        <div class="gallery-container">
            <div class="gallery-image">
                <img src="<?= base_url() ?>assets/landing_new/img/1.jpg" alt="Image 1" class="image-fit">
            </div>
            <div class="gallery-image">
                <img src="<?= base_url() ?>assets/landing_new/img/2.jpg" alt="Image 2" class="image-fit">
            </div>
            <div class="gallery-image">
                <img src="<?= base_url() ?>assets/landing_new/img/3.jpg" alt="Image 3" class="image-fit">
            </div>
        </div>

        <!-- Our Program -->
        <div style="text-align:center;" id="our-courses">
            <h2 class="txt-contact fw_400" style="font-size: 25px;">Our Courses</h2>
            <h1 class="mb-0" style="font-size: 16px; padding: 10px 0;"></h1>
        </div>
        <div class="program-container">
            <div class="box flex flex-col items-center">
                <div class="service-icon">
                    <i class="fas fa-code text-white"></i>
                </div>
                <h2 style="font-size: 20px;">Web design</h2>
                <p style="font-size: 14px; padding: 5px;">Web design refers to the design of websites that are
                    displayed on the internet.</p>
            </div>
            <div class="box flex flex-col items-center">
                <div class="service-icon">
                    <i class="fab fa-android text-white"></i>
                </div>
                <h2 style="font-size: 20px;">Software Development</h2>
                <p style="font-size: 14px; padding: 5px">Software Development
                    Our courses helps in process programmers use to build computer programs.</p>
            </div>
            <div class="box flex flex-col items-center">
                <div class="service-icon">
                    <i class="fa fa-image text-white"></i>
                </div>
                <h2 style="font-size: 20px;">Photography</h2>
                <p style="font-size: 14px; padding: 5px">Photography courses enable the candidates to understand the
                    utility of different camera parts</p>
            </div>
            <div class="box flex flex-col items-center">
                <div class="service-icon">
                    <i class="fa fa-adjust text-white"></i>
                </div>
                <h2 style="font-size: 20px;">Graphic Design</h2>
                <p style="font-size: 14px; padding: 5px">Graphic design courses helps in a craft where professionals
                    create visual content to communicate messages.</p>
            </div>
            <div class="box flex flex-col items-center">
                <div class="service-icon">
                    <i class="fa fa-desktop text-white"></i>
                    <i class="fa fa-cog text-white"></i>
                </div>
                <h2 style="font-size: 20px;">Computer Hardware</h2>
                <p style="font-size: 14px; padding: 5px;">Web design refers to the design of websites that are
                    displayed on the internet. It usually refers to</p>
            </div>
        </div>
        <div class="program-container">
            <div class="box flex flex-col items-center">
                <div class="service-icon">
                    <i class="fa fa-video text-white"></i>
                </div>
                <h2 style="font-size: 20px;">Video Production</h2>
                <p style="font-size: 14px; padding: 5px;">The Photography course focuses on developing students'
                    technical skills and artistic vision in capturing compelling images</p>
            </div>
            <div class="box flex flex-col items-center">
                <div class="service-icon">
                    <i class="fa fa-paint-brush text-white"></i>
                </div>
                <h2 style="font-size: 20px;">Creative Art</h2>
                <p style="font-size: 14px; padding: 5px">A broad, practice-based course, that encompasses a wide
                    variety of visual and non-visual disciplines </p>
            </div>
            <div class="box flex flex-col items-center">
                <div class="service-icon">
                    <i class="fa fa-camera text-white"></i>
                </div>
                <h2 style="font-size: 20px;">CCTV Camera</h2>
                <p style="font-size: 14px; padding: 5px">This course equips students with the skills to install,
                    maintain, and troubleshoot closed-circuit television (CCTV) systems.</p>
            </div>
            <div class="box flex flex-col items-center">
                <div class="service-icon">
                    <i class="fas fa-microchip text-white"></i>
                </div>
                <h2 style="font-size: 20px;">Electronic Services</h2>
                <p style="font-size: 14px; padding: 5px">This course covers a wide range of topics related to
                    electronic services. It is designed to provide</p>
            </div>
            <div class="box flex flex-col items-center">
                <div class="service-icon">
                    <i class="fa fa-music text-white"></i>
                </div>
                <h2 style="font-size: 20px;">Music</h2>
                <p style="font-size: 14px; padding: 5px">Music courses range in specialization from practical
                    instrument training to music theory to the music business.</p>
            </div>
        </div>

        <!-- Service section -->

        <section id="news_events" class="news_events pt50 pb-3 "
            style="border-bottom: 1px solid rgba(3, 110, 157, 0.3);">
            <div class="container">
                <div class="row">
                    <div id="choose" class="col-lg-5" style="margin-left: -45px;">
                        <h2 class="txt-service fw_400" style="font-size: 25px;">Latest News</h2>
                        <span class="bottom-bdr"></span>
                        <ul class="why_chosse_list">
                            <li>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4  col-sm-4  col-xs-4">
                                        <a href="#">
                                            <div class="choose_icon"><img alt=""
                                                    src="<?= base_url(); ?>assets/landing_new/img/2.jpg" alt="img"
                                                    class="img-responsive"></div>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-8  col-sm-8  col-xs-8">
                                        <div class="description">
                                            <h3 class="fw_400"> <a href="#">KIAC’s
                                                    ACEIoT empowers youth with AI, Internet of Things training for
                                                    thriving ICT careers</a></h3>
                                        </div>

                                    </div>

                                </div>
                            </li>
                            <hr class="horizontal">


                            <li>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4  col-sm-4  col-xs-4">
                                        <a href="#">
                                            <div class="choose_icon"><img alt=""
                                                    src="<?= base_url(); ?>assets/landing_new/img/1.jpg" alt="img"
                                                    class="img-responsive"></div>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-8  col-sm-8  col-xs-8">
                                        <div class="description">
                                            <h3 class="fw_400"> <a href="#">Upcoming
                                                    3rd Annual Biodiversity Field School brings together 40 participants
                                                    from 10 countries</a></h3>
                                        </div>

                                    </div>

                                </div>
                            </li>
                            <hr class="horizontal">


                            <li>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4  col-sm-4  col-xs-4">
                                        <a href="#">
                                            <div class="choose_icon"><img alt=""
                                                    src="<?= base_url(); ?>assets/landing_new/img/3.jpg" alt="img"
                                                    class="img-responsive"></div>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-8  col-sm-8  col-xs-8">
                                        <div class="description">
                                            <h3 class="fw_400"> <a href="#">KIAC
                                                    welcomes students from Sudanese varsity sheltered in Rwanda to
                                                    resume their medical studies </a></h3>
                                        </div>

                                    </div>

                                </div>
                            </li>
                            <hr class="horizontal">


                            <li>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4  col-sm-4  col-xs-4">
                                        <a href="#">
                                            <div class="choose_icon"><img alt=""
                                                    src="<?= base_url(); ?>assets/landing_new/img/brand-1.jpg" alt="img"
                                                    class="img-responsive"></div>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-8  col-sm-8  col-xs-8">
                                        <div class="description">
                                            <h3 class="fw_400"> <a href="#">Newly
                                                    promoted full professors feted during the annual Professorial
                                                    Inaugural Lectures </a></h3>
                                        </div>

                                    </div>

                                </div>
                            </li>
                            <hr class="horizontal">

                        </ul>
                        <a class="more" href="#">See all News</a>
                    </div>

                    <div class="col-lg-3">
                        <h2 class="txt-service fw_400" style="font-size: 25px;">Upcoming events</h2>
                        <span class="bottom-bdr"></span>

                        <article class="home-events pt10 pl20_lg clearfix">
                            <div class="row">
                                <div class="col-lg-2 col-md-2  col-sm-2  col-xs-2">
                                    <div class="calendar"><span class="month">AUG</span><span class="day"
                                            style="margin-top: -5px;">23</span>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-10  col-sm-10  col-xs-10">
                                    <div class="description" style="margin-left: 25px;">
                                        <h3 class="txt fw_400"> <a href="./?Erasmus-capacity-building">Erasmus+ capacity
                                                building </a></h3>

                                    </div>
                                </div>
                                <i class="fa fa-clock-o" style="font-size:17px;margin: 10px 0;color: #9c9c9c;">
                                    <span class="fw_50" style="font-size: 14px; font-family: arial;">Wednesday
                                        30<sup>th</sup> August 2023</span></i>
                            </div>
                        </article>
                        <hr class="horizontal">

                        <article class="home-events pt10 pl20_lg clearfix">
                            <div class="row">
                                <div class="col-lg-2 col-md-2  col-sm-2  col-xs-2">
                                    <div class="calendar"><span class="month">JUL</span><span class="day"
                                            style="margin-top: -5px;">23</span>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-10  col-sm-10  col-xs-10">
                                    <div class="description" style="margin-left: 25px;">
                                        <h3 class="txt fw_400"> <a href="#">Peace
                                                Education in an Era of Crisis</a></h3>

                                    </div>
                                </div>

                                <i class="fa fa-clock-o" style="font-size:17px;margin: 10px 0;color: #9c9c9c;">
                                    <span class="fw_50" style="font-size: 14px; font-family: arial;">Wednesday
                                        30<sup>th</sup> August 2023</span></i>
                            </div>
                        </article>
                        <hr class="horizontal">
                        <a class="more" href="spip.php?rubrique38">See all events</a>
                    </div>
                    <div class="col-lg-3">
                        <h2 class="txt-service fw_400" style="font-size: 25px;">Announcement</h2>
                        <span class="bottom-bdr"></span>
                        <div id="news" class="panel-group">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title fw_400">
                                        <a href="#" class="collapsed">Shortlisting of applicants for part-time job
                                            opportunities
                                            at the KIAC-CBE-SOE</a>
                                    </h3>
                                </div>

                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title fw_400">
                                        <a href="./?Job-announcement-for-the-position-of-project-officer-for-PITTIR-Project"
                                            class="collapsed">Job announcement for the position of project officer for
                                            (PITTIR) Project</a>
                                    </h3>
                                </div>

                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title fw_400">
                                        <a href="./?Results-for-accountant-position-at-UR-HG-Ltd"
                                            class="collapsed">Results for accountant position at KIAC Ltd</a>
                                    </h3>
                                </div>

                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title fw_400">
                                        <a href="./?List-of-shortlisted-candidates-for-the-interview-for-the-Postdoctoral"
                                            class="collapsed">List of shortlisted candidates for the interview for the
                                            Postdoctoral scholarship in Technology Enhanced Learning</a>
                                    </h3>
                                </div>

                            </div>

                        </div>
                        <a class="more" href="#">See all announcements</a>
                    </div>
                    <div class="col-lg-1">
                        <div style="margin-bottom: 10px; width: 170px"><a target="_blank" href="#">
                                <img class="service-banner"
                                    src="<?= base_url(); ?>assets/landing_new/img/banner-service.jpg" alt="img"
                                    style="margin-top: 10px;"></a></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <div style="text-align:center">
            <h2 class="txt-contact fw_400" style="font-size: 25px; padding-top: 0; margin-top: -40px">Testimonials</h2>
            <h1 class="mb-0" style="font-size: 16px; padding: 10px 0;">Read trusted reviews from our customers</h1>
        </div>
        <div class="testimonial-container mx-auto mt-20">
            <button id="prevBtn" class="testimonial-button testimonial-button-prev">
                <i class="fas fa-angle-left"></i> <!-- FontAwesome angle-left icon -->
            </button>
            <div class="testimonial-slider overflow-hidden relative">
                <div class="slider-content flex" id="sliderContent">
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/review-2.jpg" alt="Profile 2"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <div class="testimonial-content">
                                <h4 class="font-semibold text-lg">Teddy Nila</h4>
                                <h5 class="font-semibold text-sm">Student At KIAC</h5>
                            </div>
                            <p class="testimonial-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, enim exercitationem!
                                Deleniti iure impedit eius possimus?
                            </p>
                        </div>
                    </div>
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/review-1.jpg" alt="Profile 2"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <div class="testimonial-content">
                                <h4 class="font-semibold text-lg">Kitty Nila</h4>
                                <h5 class="font-semibold text-sm">Student Abroad</h5>
                            </div>
                            <p class="testimonial-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, enim exercitationem!
                                Deleniti iure impedit eius possimus?
                            </p>
                        </div>
                    </div>
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/review-3.jpg" alt="Profile 2"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <div class="testimonial-content">
                                <h4 class="font-semibold text-lg">Alice Johnson</h4>
                                <h5 class="font-semibold text-sm">Student Abroad</h5>
                            </div>
                            <p class="testimonial-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, enim exercitationem!
                                Deleniti iure impedit eius possimus?
                            </p>
                        </div>
                    </div>
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/slider-2.jpg" alt="Profile 2"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <div class="testimonial-content">
                                <h4 class="font-semibold text-lg">Kate Angel</h4>
                                <h5 class="font-semibold text-sm">Student At KIAC</h5>
                            </div>
                            <p class="testimonial-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, enim exercitationem!
                                Deleniti iure impedit eius possimus?
                            </p>
                        </div>
                    </div>
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/review-2.jpg" alt="Profile 2"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <div class="testimonial-content">
                                <h4 class="font-semibold text-lg">Teddy Nila</h4>
                                <h5 class="font-semibold text-sm">Student At Abroad</h5>
                            </div>
                            <p class="testimonial-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, enim exercitationem!
                                Deleniti iure impedit eius possimus?
                            </p>
                        </div>
                    </div>
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/review-1.jpg" alt="Profile 2"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <div class="testimonial-content">
                                <h4 class="font-semibold text-lg">Kitty Nila</h4>
                                <h5 class="font-semibold text-sm">Student At KIAC</h5>
                            </div>
                            <p class="testimonial-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, enim exercitationem!
                                Deleniti iure impedit eius possimus?
                            </p>
                        </div>
                    </div>
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/review-3.jpg" alt="Profile 2"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <div class="testimonial-content">
                                <h4 class="font-semibold text-lg">Alice Johnson</h4>
                                <h5 class="font-semibold text-sm">Student Abroad</h5>
                            </div>
                            <p class="testimonial-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, enim exercitationem!
                                Deleniti iure impedit eius possimus?
                            </p>
                        </div>
                    </div>
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/slider-2.jpg" alt="Profile 2"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <div class="testimonial-content">
                                <h4 class="font-semibold text-lg">Kate Angel</h4>
                                <h5 class="font-semibold text-sm">Student Abroad</h5>
                            </div>
                            <p class="testimonial-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, enim exercitationem!
                                Deleniti iure impedit eius possimus?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button id="nextBtn" class="testimonial-button testimonial-button-next">
                <i class="fas fa-angle-right"></i>
            </button>
        </div>
        <div class="contact-container reviews" style="border-bottom: 1px solid rgba(3, 110, 157, 0.3);">
            <div style="text-align:center" style="border-bottom: 1px solid rgba(3, 110, 157, 0.3);">
                <h2 class="txt-contact fw_400" style="font-size: 20px; padding-top: 0;">
                    Be Our Testimonial!</h2>
            </div>
            <div class="row flex justify-content-center align-items-center">
                <!-- Column 1 (Banner Image)-->
                <div class="column" style="width: 30%; background-color: #fff">
                    <img src="<?= base_url(); ?>assets/landing_new/img/header-slide-3.jpg" alt="img" alt="Banner Image"
                        width="300">
                </div>
                <!-- Column 2 -->
                <div class="column" style="width: 35%;">
                    <form action="/action_page.php" class="flex flex-wrap justify-content-center align-items-center">
                        <input class="focus:outline-none" type="email" id="fname" name="email"
                            placeholder="Enter Your Name">
                        <select class="focus:outline-none" id="title" name="title">
                            <option value="" disabled selected>Select Testimonial Category</option>
                            <option value="student_kiac">At KIAC</option>
                            <option value="student_abroad">Abroad</option>
                        </select>
                        <label for="profile" class="custom-file-upload focus:outline-none">
                            Choose Profile Photo
                        </label>
                        <input class="hidden-file-input" id="profile" type="file">
                        <textarea class="focus:outline-none" id="subject" name="subject" placeholder="Write Your Review"
                            style="height:70px"></textarea><br>
                        <input style="width: 70%" type="submit" value="Submit Review">
                    </form>
                </div>
                <!-- Column 3 (Banner Image) -->
                <div class="column" style="width: 30%; background-color: #fff">
                    <img src="<?= base_url(); ?>assets/landing_new/img/header-slide-3.jpg" alt="img" alt="Banner Image"
                        width="300">
                </div>
            </div>
        </div>

        <!-- Contact us -->
        <div style="text-align:center">
            <h2 class="txt-contact fw_400" style="font-size: 25px; padding-top: 20px;">Contact Us</h2>
            <h1 class="mb-0" style="font-size: 16px; padding: 10px 0;">Feel free to reach out to us. We're here to
                assist you!</h1>
        </div>
        <div class="contact-container">
            <div class="row flex justify-content-center align-items-center">
                <div class="column" style="width: 35%; padding-right: 10px; margin-right: 10px">
                    <div class="col-lg-10">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h1 class="mb-0">Need any help about how you can study or getting scholarship with KIAC?
                                Please Feel Free to Contact Us</h1>
                        </div>
                        <div class="row gx-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                                <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                                <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs Support</h5>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                            <div class="bg-primary rounded" style="padding: 10px 20px">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-2">Call to ask any question</h5>
                                <h4 class="text-primary mb-0">+250 783 205 698</h4>
                            </div><br>
                            <i class="fa fa-anvelope text-white"></i>
                            <div class="ps-4">
                                <h5 class="mb-2">Send us email </h5>
                                <h4 class="text-primary mb-0">info@kiac.ac.rw</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column" style="width: 30%;">
                    <form action="/action_page.php" class="flex flex-wrap justify-content-center align-items-center"
                        style="padding: 0;">

                        <input class="focus:outline-none" type="text" id="fname" name="firstname"
                            placeholder="Enter your Name">

                        <input class="focus:outline-none" type="text" id="lname" name="lastname"
                            placeholder="Enter your Last Name">

                        <input class="focus:outline-none" type="email" id="email" name="email"
                            placeholder="Enter your Email">

                        <textarea class="focus:outline-none" id="subject" name="subject" placeholder="Write something.."
                            style="height:100px"></textarea><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div class="column" style="width: 25%; padding: 0; background: none; box-shadow: none">
                    <img src="<?= base_url(); ?>assets/landing_new/img/header-slide-3.jpg" alt="img" alt="Banner Image"
                        width="300">
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php
        include('footer.php');
        ?>
        <!-- Back to Top -->
        <a href="#" class="back-to-top fixed bottom-4 right-4 bg-[#091e35] text-white p-2 rounded-full shadow-md">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    </div>
</body>

<script>
    const submenuLinks = document.querySelectorAll('.has-submenu');

    submenuLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const subMenu = this.nextElementSibling;
            subMenu.style.display = (subMenu.style.display === 'block') ? 'none' : 'block';
        });
    });
</script>

<script>

    // Testimonials

    document.addEventListener("DOMContentLoaded", function () {
        const slideContent = document.getElementById('sliderContent');
        const slideWidth = slideContent.children[0].clientWidth;
        const slideInterval = 3000;

        let sliderPosition = 0;
        let intervalId = null;

        function nextSlide() {
            if (sliderPosition > -(slideContent.children.length - 3) * slideWidth) {
                sliderPosition -= slideWidth;
                slideContent.style.transition = "transform 0.5s ease-in-out";
                slideContent.style.transform = `translateX(${sliderPosition}px)`;
            } else {
                sliderPosition = 0;
                slideContent.style.transition = "transform 0.5s ease-in-out";
                slideContent.style.transform = `translateX(${sliderPosition}px)`;
            }
        }

        function startSlideShow() {
            intervalId = setInterval(nextSlide, slideInterval);
        }

        function pauseSlideShow() {
            clearInterval(intervalId);
        }

        slideContent.addEventListener('mouseover', pauseSlideShow);
        slideContent.addEventListener('mouseout', startSlideShow);

        startSlideShow();
    });

    // Get testimonial container and buttons
    const testimonialContainer = document.querySelector('.testimonial-container');
    const prevButton = document.getElementById('prevBtn');
    const nextButton = document.getElementById('nextBtn');

    const testimonials = testimonialContainer.querySelectorAll('.testimonial');
    const totalTestimonials = testimonials.length;

    let currentIndex = 0;

    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.style.transform = `translateX(-${100 * index}%)`;
        });
    }
    showTestimonial(currentIndex);
    nextButton.addEventListener('click', () => {
        if (currentIndex < totalTestimonials - 1) {
            currentIndex++;
            showTestimonial(currentIndex);
        }
    });
    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            showTestimonial(currentIndex);
        }
    });
</script>

<!-- image-slideshow -->

<script>
    // let index = 0;
    // displayImages();
    // function displayImages() {
    //     let i;
    //     const images = document.getElementsByClassName("image");
    //     for (i = 0; i < images.length; i++) {
    //         images[i].style.display = "none";
    //     }
    //     index++;
    //     if (index > images.length) {
    //         index = 1;
    //     }
    //     images[index - 1].style.display = "block";
    //     setTimeout(displayImages, 2000);
    // }

</script>

<!-- REAL-TIME CLOCK -->
<script>
    let hours = new Date().getHours()
    let minutes = new Date().getMinutes()
    let seconds = new Date().getSeconds()

    setInterval(() => {
        hours = new Date().getHours()
        minutes = new Date().getMinutes()
        seconds = new Date().getSeconds()

        document.querySelector('.time-real').innerHTML = `${hours >= 10 ? hours : "0 " + hours} : ${minutes >= 10 ? minutes : "0 " + minutes} : ${seconds >= 10 ? seconds : "0 " + seconds} ${hours >= 12 ? "PM" : "AM"}`

    }, 500)
</script>
<script src="<?= base_url(); ?>assets/landing_new/js/main.js"></script>

</html>