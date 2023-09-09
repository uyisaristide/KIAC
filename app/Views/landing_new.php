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
    <link href="<?= base_url(); ?>assets/landing_new/css/menu1.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu2.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu3.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/main.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <link href="<?= base_url(); ?>assets/css/tailwind/output.css" rel="stylesheet">

    <script>
        $(document).ready(function () {
            $('#myCarousel').carousel();
        });
    </script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <style>
        * {
            box-sizing: border-box;
        }

        .container-main {
            background-image: url("<?= base_url(); ?>assets/landing_new/css/back1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .image-link {
            text-decoration: none;
            display: inline-block;
            position: relative;
        }

        .image-link img {
            width: 100%;
            height: 100%;
        }

        .image-link .button {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px 20px;
            background-color: #FFC600;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: opacity 0.3s ease;
            font-size: 0.80rem;
            width: 70%;
        }

        .image-link:hover img {
            opacity: 0.7;
            -webkit-filter: none;
            filter: blur(1px);
        }

        .image-link:hover .button {
            display: block;
            opacity: 1;
        }

        .custom-bg {
            background: rgba(0, 0, 0, 0) linear-gradient(152deg, #4eb9d3 0, #007bb3 72%, #0375a1 100%) repeat scroll 0 0;
        }

        .tailwind-container * {
            all: initial;
        }

        /* Slideshow */

        /* .image-slideshow {
            position: relative;
            margin: auto;
        }

        .image-slideshow img {
            width: 100%
        }

        .fade {
            animation-name: fade;
            animation-duration: 2s;
        }

        @keyframes fade {
            from {
                opacity: .6
            }

            to {
                opacity: 1
            }
        } */


        /* Why Choose Kiac? */

        .text-choose,
        .text-course {
            color: #036e9d;
        }

        .card-container {
            background-color: rgba(3, 110, 157, 0.3);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .card-container:hover,
        .card-container:focus {
            background-color: rgba(3, 110, 157, 1);
        }

        .gallery-image,
        .gallery-image:focus {
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            border-left: 1px solid rgba(3, 110, 157, 0.3);
            border-right: 1px solid rgba(3, 110, 157, 0.3);

        }

        .gallery-image:hover,
        .gallery-image:hover:focus {
            box-shadow: 0 0.5em 0.5em -0.5em var(--hover);
            transform: translateY(-0.8em);

        }

        .program-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
        }

        .box {
            width: 14em;
            height: 14em;
            border: 1px solid rgba(3, 110, 157, 0.3);
            ;
            box-shadow:
                inset 0 -3em 3em rgba(0, 0, 0, 0.1),
                0 0 0 2px rgb(255, 255, 255),
                0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
            padding: 1em;
            text-align: center;
            margin: 1em;
        }

        .box h2 {
            position: relative;
            display: inline-block;
            color: #036e9d;
            padding: 10px 0;
        }

        .box h2::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 3em;
            border-bottom: 3px solid #036e9d;
        }

        @media (max-width: 768px) {
            .program-container {
                flex-direction: column;
            }

            .box {
                width: 100%;
                margin: 0.5em 0;
            }
        }

        /* Service Section */
        .news_events {
            margin-top: -20px;
        }

        .txt,
        .txt-service {
            color: #036e9d;
        }

        .pt50 {
            padding-top: 50px;
        }

        .why_chosse_list {
            padding-top: 10px;
        }

        .why_chosse_list li,
        .more {
            list-style-type: none;
            color: #036e9d;
        }

        .why_chosse_list li:hover,
        .more:hover,
        .txt:hover,
        .panel:hover {
            color: dodgerblue;
            text-decoration: underline;
        }

        .why_chosse_list li .choose_icon img {
            width: 100%;
            height: auto;
        }

        .bottom-bdr {
            border-bottom: 3px solid #036e9d;
            display: block;
            width: 8em;
            padding-top: 5px;
        }

        .home-events,
        .panel-group {
            position: relative;
            padding-top: 10px;
        }

        .col-xs-2 {
            width: 16.66666667%;
        }

        .home-events .calendar {
            background: #009edd;
            color: #FFF;
            float: left;
            height: 55px;
            margin-right: 20px;
            margin-top: 7px;
            overflow: hidden;
            text-align: center;
            text-transform: uppercase;
            width: 55px;
        }

        .home-events .calendar .month {
            display: block;
            font-size: 1em;
        }

        .home-events .calendar .day {
            display: block;
            font-size: 1.6em;
        }

        .pl20_lg {
            padding-left: 20px;
        }

        .horizontal {
            margin: 10px 0 20px;
            opacity: 0.1;
        }

        .panel-group .panel {
            border: none;
            margin: 10px 0 20px;
        }

        .panel-group .panel .panel-heading {
            background-color: transparent;
        }

        .panel-group .panel .panel-title {
            font-size: 16px;
        }

        .panel-group .panel .panel-title a {
            text-decoration: none;
            color: inherit;
        }

        /* Contact us */

        .txt-contact {
            position: relative;
            display: inline-block;
            color: #036e9d;
            padding: 10px 0;
        }

        .txt-contact::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 4em;
            border-bottom: 3px solid #036e9d;
        }

        .contact-container {
            margin-top: -50px;
            width: 99%;
            justify-content: center;
            align-items: center;
        }

        .contact-container input[type=text],
        .contact-container input[type=email],
        .contact-container textarea {
            width: 70%;
            padding: 8px;
            border: 1px solid #036e9d;
            margin-top: 5px;
            margin-bottom: 10px;
            resize: vertical;
            border-radius: 5px;
        }

        .contact-container input[type=text]::placeholder,
        .contact-container input[type=email]::placeholder,
        .contact-container textarea::placeholder {
            color: black;
            opacity: 0.8;
        }

        .contact-container input[type=submit] {
            background-color: #0d6efd;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type=submit]:hover {
            background-color: #009edd;
        }

        .contact-container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }

        .column {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {

            .column,
            .contact-container input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        /* Testimonials */
        .testimonial-slider {
            max-width: 100%;
            width: 100%;
            white-space: nowrap;
            transition: all 0.3s;
        }

        .testimonial {
            display: inline-block;
            width: 33.3333%;
            box-sizing: border-box;
        }

        .testimonial img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 2px solid #fff;
        }

        button#slideLeft,
        button#slideRight {
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button#slideLeft:hover,
        button#slideRight:hover {
            background-color: #0056b3;
        }

        /* Style for the "Slide Right" button */
        button#slideRight {
            right: 0;
            border-radius: 0;
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
                                <img class="w-full h-full"
                                    src="<?= base_url(); ?>assets/landing_new/img/banner_left.jpg" alt="img" />
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
                    <!-- <div class="flex items-center float-right text-white/80 text-xs font-medium py-2">
                        <div class="flex gap-1">
                            <span>+27 &deg;</span>
                            <span class="px-4 border-l">KIGALI</span>
                        </div>
                    </div> -->
                    <div class="flex items-center h-[8rem] md:h-[4rem] w-full md:grid md:grid-cols-2">
                        <div class="w-1/3 py-2 pl-4 md:w-full">
                            <img class="w-1/2 h-[80%]" src="<?= base_url(); ?>assets/landing_new/img/logo1.png"
                                alt="no image found">
                        </div>
                        <div class="w-full md:w-full">
                            <img class="w-full h-full" src="<?= base_url(); ?>assets/landing_new/img/middle_banner.jpg "
                                alt="no image found">
                        </div>
                    </div>
                </div>
                <nav class="main-nav w-full mt-2" role="navigation">
                    <input id="main-menu-state" type="checkbox" />
                    <label class="main-menu-btn" for="main-menu-state">
                        <span class="main-menu-btn-icon"></span> Toggle main menu visibility
                    </label>
                    <ul id="main-menu" class="sm sm-blue">
                        <li><a class="current" href="/"><i class="fa fa-home fa-lg"></i> Home</a></li>
                        <li><a href="#about"><i class="fa fa-institution"></i> About Kiac</a>
                        </li>
                        <li><a href="#programs"><i class="fa fa-heartbeat "></i> Study At Kiac</a>
                        </li>
                        <li><a href="#"><i class="fa fa-trophy"></i> Students</a>
                        </li>
                        <li><a href="#"><i class="fa fa-bullseye"></i>Courses</a>
                        </li>
                        <li><a href="#contact"><i class="fa fa-laptop"></i> Admissions</a>
                        </li>
                        <li><a href="<?= base_url('login'); ?>"><i class="fa fa-language"></i> Login</a></li>
                    </ul>
                    <ul id="main-menu2" class="sm2 sm-blue">
                        <li><a href="#"><i class="fa fa-plane"></i>Services</a>
                        </li>
                        <li><a href="#"><i class="fa fa-line-chart "></i>Projects</a>
                        </li>
                        <li><a href="#"><i class="fa fa-group"></i>KIAC TV</a>
                        </li>
                        <li><a href="#"><i class="fa fa-female"></i> News and Events</a>
                        </li>
                        <li><a href="#"><i class="fa fa-building"></i>Agents</a></li>
                        <li><a href="#"><i class="fa fa-newspaper-o"></i>Study Abroad </a>
                        </li>
                        <li class="menu-item">
                            <h2><a id="has-submenu" class="" href="<?= base_url('study_at_kiac'); ?>"><span
                                        class="sub-arrow">+</span><i class="fa fa-share-alt"></i> Apply Now</a></h2>
                            <ul class="">
                                <li><a href="ibidukikije/">Ibidukikije</a></li>
                                <li><a href="umuco/"> Umuco</a></li>
                                <li><a href="twinigure/">Twinigure</a></li>
                                <li><a href="imyemerere/"><i class="fa fa-plus-circle"></i> Iyobokamana</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="mt-2 w-full ">
                <!-- img header -->
                <div class="w-full flex items-center justify-between  h-24 md:block">
                    <div class="h-full w-full md:hidden">
                        <img class="w-full h-full" src="<?= base_url(); ?>assets/landing_new/img/banner_right.jpg"
                            alt="img" />
                    </div>
                </div>

                <div class="flex gap-3 mt-4 md:flex-col ">
                    <div class="w-[30%] md:w-full">
                        <div class="my-2 w-full flex item-center gap-2">
                            <input
                                class="py-1 w-4/6 text-sm px-2 rounded-lg outline-none border text-white placeholder:text-white/90 focus:border-yellow-300 transition-colors border-white/30 bg-white/20"
                                type="text" placeholder="Search . . ." name="search" id="search" />
                            <button class="p-2 w-2/6 bg-yellow-500 rounded-lg text-sm text-white"
                                type="submit">Search</button>
                        </div>
                        <div class="border-2 border-yellow-300 text-center p-2 bg-blue-500 rounded-lg">
                            <a class="text-white font-semibold" href="#">Study <span
                                    class="text-white bg-yellow-500 p-1 rounded-lg px-3">Abroad</span></a>
                        </div>

                        <div class="pt-3 flex flex-col gap-2">
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-3/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/arm.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-2/5">
                                    <button
                                        class="px-3 py-2 text-sm rounded-lg w-full font-semibold text-blue-500 bg-blue-100 transition-colors hover:text-white hover:bg-blue-500"
                                        href="#">Study in Armenia</button>
                                </div>
                            </div>

                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-3/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/turk.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-2/5">
                                    <button
                                        class="px-3 py-2 text-sm rounded-lg w-full font-semibold text-blue-500 bg-blue-100 transition-colors hover:text-white hover:bg-blue-500"
                                        href="#">Study in Turkey</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-3/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/4.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-2/5">
                                    <button
                                        class="px-3 py-2 text-sm rounded-lg w-full font-semibold text-blue-500 bg-blue-100 transition-colors hover:text-white hover:bg-blue-500"
                                        href="#">Study in Cyprus</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-3/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/arm.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-2/5">
                                    <button
                                        class="px-3 py-2 text-sm rounded-lg w-full font-semibold text-blue-500 bg-blue-100 transition-colors hover:text-white hover:bg-blue-500"
                                        href="#">Study in Poland</button>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2 md:hidden">
                            <img class="h-[14rem] w-full rounded-lg object-cover"
                                src="<?= base_url(); ?>assets/landing_new/img/header-slide-3.jpg" alt="" />
                        </div>
                    </div>
                    <div class="w-[60%] h-full md:w-full">
                        <div id="carouselControls" class="carousel slide carousel-fade rounded-lg h-full"
                            data-ride="carousel">
                            <div class="carousel-inner h-full">
                                <div class="carousel-item active  h-full">
                                    <img class="h-full w-full d-block w-100 rounded-lg"
                                        src="<?= base_url() ?>assets/landing_new/img/header-slide-1.jpg" alt="">
                                </div>
                                <div class="carousel-item h-full">
                                    <img class="h-full w-full d-block w-100 rounded-lg"
                                        src="<?= base_url() ?>assets/landing_new/img/header-slide-2.jpg" alt="">
                                </div>
                                <div class="carousel-item h-full">
                                    <img class="h-full w-full d-block w-100 rounded-lg"
                                        src="<?= base_url() ?>assets/landing_new/img/header-slide-3.jpg" alt="">
                                </div>
                                <div class="carousel-item h-full">
                                    <img class="h-full w-full d-block w-100 rounded-lg"
                                        src="<?= base_url() ?>assets/landing_new/img/header-slide-4.jpg" alt="">
                                </div>
                                <div class="carousel-item h-full">
                                    <img class="w-full h-[41rem] max-h-[41rem] d-block w-100 rounded-lg"
                                        src="<?= base_url() ?>assets/landing_new/img/header-slide-5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[30%] md:w-full">
                        <div class="my-2 w-full flex item-center gap-2">
                            <input
                                class="py-1 w-4/6 text-sm px-2 rounded-lg outline-none border text-white placeholder:text-white/90 focus:border-yellow-300 transition-colors border-white/30 bg-white/20"
                                type="text" placeholder="Search . . ." name="search" id="search" />
                            <button class="p-2 w-2/6 bg-yellow-500 rounded-lg text-sm text-white"
                                type="submit">Search</button>
                        </div>
                        <div class="border-2 border-yellow-300 text-center p-2 bg-blue-500 rounded-lg">
                            <a class="text-white font-semibold" href="#">Study At <span
                                    class="text-white bg-yellow-500 p-1 px-3 rounded-lg">Kigali International
                                    School</span></a>
                        </div>
                        <div class="pt-3 flex flex-col gap-2">
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-4/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/video.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-2/5">
                                    <button
                                        class="px-3 py-2 text-sm rounded-lg w-full font-semibold text-blue-500 bg-blue-100 transition-colors hover:text-white hover:bg-blue-500"
                                        href="#">Video Production</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-4/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/photo.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-2/5">
                                    <button
                                        class="px-3 py-2 text-sm rounded-lg w-full font-semibold text-blue-500 bg-blue-100 transition-colors hover:text-white hover:bg-blue-500"
                                        href="#">Photography</button>
                                </div>
                            </div>

                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-4/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/graphic.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-2/5">
                                    <button
                                        class="px-3 py-2 text-sm rounded-lg w-full font-semibold text-blue-500 bg-blue-100 transition-colors hover:text-white hover:bg-blue-500"
                                        href="#">Graphic Design</button>
                                </div>
                            </div>

                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-4/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/web.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-2/5">
                                    <button
                                        class="px-3 py-2 text-sm rounded-lg w-full font-semibold text-blue-500 bg-blue-100 transition-colors hover:text-white hover:bg-blue-500"
                                        href="#">Web Design</button>
                                </div>
                            </div>

                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-4/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/crea.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-2/5">
                                    <button
                                        class="px-3 py-2 text-sm rounded-lg w-full font-semibold text-blue-500 bg-blue-100 transition-colors hover:text-white hover:bg-blue-500"
                                        href="#">Creative Arts</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-4/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/comp.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-2/5">
                                    <button
                                        class="px-3 py-2 text-sm rounded-lg w-full font-semibold text-blue-500 bg-blue-100 transition-colors hover:text-white hover:bg-blue-500"
                                        href="#">Computer Maintainance</button>
                                </div>
                            </div>
                            <div
                                class="rounded-lg pr-2 overflow-hidden border border-blue-300 bg-white shadow-md flex gap-2 items-center">
                                <div class="w-4/5 h-[70px] md:h-[100px]">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url(); ?>assets/landing_new/img/music.jpg" alt="Armenia Image">
                                </div>
                                <div class="w-2/5">
                                    <button
                                        class="px-3 py-2 text-sm rounded-lg w-full font-semibold text-blue-500 bg-blue-100 transition-colors hover:text-white hover:bg-blue-500"
                                        href="#">Music</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- boxes -->
        <h2 class="text-choose text-custom-blue">Why Choose Kiac?</h2>

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
        <h2 class="text-course text-custom-blue">Our Courses</h2>

        <div class="program-container">
            <div class="box">
                <h2 style="font-size: 20px;">Web design</h2>
                <p style="font-size: 14px; padding-top: 5px;">Web design refers to the design of websites that are
                    displayed on the internet.</p>
            </div>
            <div class="box">
                <h2 style="font-size: 20px;">Software Development</h2>
                <p style="font-size: 14px; padding-top: 5px">Software Development
                    Our courses helps in process programmers use to build computer programs.</p>
            </div>
            <div class="box">
                <h2 style="font-size: 20px;">Photography</h2>
                <p style="font-size: 14px; padding-top: 5px">Photography courses enable the candidates to understand the
                    utility of different camera parts, working out the lights while clicking pictures.</p>
            </div>
            <div class="box">
                <h2 style="font-size: 20px;">Graphic Design</h2>
                <p style="font-size: 14px; padding-top: 5px">Graphic design courses helps in a craft where professionals
                    create visual content to communicate messages.</p>
            </div>
            <div class="box">
                <h2 style="font-size: 20px;">Computer Hardware</h2>
                <p style="font-size: 14px; padding-top: 5px;">Web design refers to the design of websites that are
                    displayed on the internet. It usually refers to</p>
            </div>
        </div>
        <div class="program-container">
            <div class="box">
                <h2 style="font-size: 20px;">Video Production</h2>
                <p style="font-size: 14px; padding-top: 5px;">The Photography course focuses on developing students'
                    technical skills and artistic vision in capturing compelling images</p>
            </div>
            <div class="box">
                <h2 style="font-size: 20px;">Creative Art</h2>
                <p style="font-size: 14px; padding-top: 5px">A broad, practice-based course, that encompasses a wide
                    variety of visual and non-visual disciplines </p>
            </div>
            <div class="box">
                <h2 style="font-size: 20px;">CCTV Camera</h2>
                <p style="font-size: 14px; padding-top: 5px">This course equips students with the skills to install,
                    maintain, and troubleshoot closed-circuit television (CCTV) systems.</p>
            </div>
            <div class="box">
                <h2 style="font-size: 20px;">Electronic Services</h2>
                <p style="font-size: 14px; padding-top: 5px">This course covers a wide range of topics related to
                    electronic services. It is designed to provide</p>
            </div>
            <div class="box">
                <h2 style="font-size: 20px;">Music</h2>
                <p style="font-size: 14px; padding-top: 5px">Music courses range in specialization from practical
                    instrument training to music theory to the music business.</p>
            </div>
        </div>

        <!-- Service section -->

        <section id="news_events" class="news_events pt50 ">
            <div class="container">
                <div class="row">
                    <div id="choose" class="col-lg-4">
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
                                            <h3 class="fw_400"> <a href="#">UR’s
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
                                            <h3 class="fw_400"> <a href="#">UR
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
                                            at the UR-CBE-SOE</a>
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
                                            class="collapsed">Results for accountant position at UR HG Ltd</a>
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


        <!-- Contact us -->

        <div class="contact-container">
            <div style="text-align:center">
                <h2 class="txt-contact fw_400" style="font-size: 25px;">Contact Us</h2>
                <h1 class="mb-0" style="font-size: 16px; padding: 10px 0;">Feel free to reach out to us. We're here to
                    assist you!</h1>
            </div>
            <div class="row">
                <div class="column">
                    <div class="col-lg-7">
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
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px;">
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
                <div class="column">
                    <form action="/action_page.php">

                        <input type="text" id="fname" name="firstname" placeholder="Enter your Name">

                        <input type="text" id="lname" name="lastname" placeholder="Enter your Last Name">

                        <input type="email" id="email" name="email" placeholder="Enter your Email">

                        <textarea id="subject" name="subject" placeholder="Write something.."
                            style="height:170px"></textarea><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonial-container mx-auto mt-20">
            <div style="text-align:center">
                <h2 class="txt-contact fw_400" style="font-size: 25px; padding-top: 60px">Testimonials</h2>
                <h1 class="mb-0" style="font-size: 16px; padding: 10px 0;">Read trusted reviews from our customers</h1>
            </div>
            <div class="testimonial-slider overflow-hidden relative">
                <div class="slider-content flex" id="sliderContent">
                    <!-- Profile 1 -->
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/review-1.jpg" alt="Profile 1"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <p>"This is the testimonial text for profile 1."</p>
                            <h4 class="mt-4">John Doe</h4>
                        </div>
                    </div>
                    <!-- Profile 2 -->
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/review-2.jpg" alt="Profile 2"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <p>"This is the testimonial text for profile 2."</p>
                            <h4 class="mt-4">Jane Smith</h4>
                        </div>
                    </div>
                    <!-- Profile 3 -->
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/review-3.jpg" alt="Profile 3"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <p>"This is the testimonial text for profile 3."</p>
                            <h4 class="mt-4">Alice Johnson</h4>
                        </div>
                    </div>
                    <!-- Profile 4 -->
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="<?= base_url(); ?>assets/landing_new/img/slider-2.jpg" alt="Profile 4"
                                    class="w-20 h-20 rounded-full">
                            </div>
                            <p>"This is the testimonial text for profile 3."</p>
                            <h4 class="mt-4">Alice Johnson</h4>
                        </div>
                    </div>
                    <!-- Profile 5 -->
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="profile3.jpg" alt="Profile 5" class="w-20 h-20 rounded-full">
                            </div>
                            <p>"This is the testimonial text for profile 3."</p>
                            <h4 class="mt-4">Alice Johnson</h4>
                        </div>
                    </div>
                    <!-- Profile 6 -->
                    <div class="testimonial p-4 w-1/3">
                        <div class="bg-white p-4 rounded shadow flex flex-col items-center">
                            <div class="mb-4">
                                <img src="profile3.jpg" alt="Profile 6" class="w-20 h-20 rounded-full">
                            </div>
                            <p>"This is the testimonial text for profile 3."</p>
                            <h4 class="mt-4">Alice Johnson</h4>
                        </div>
                    </div>
                </div>
                <button id="slideLeft"
                    class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white p-2 rounded-r-lg shadow">&#8249;
                    Prev</button>
                <!-- Add the "Slide Left" button here -->
                <button id="slideRight"
                    class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white p-2 rounded-l-lg shadow">Next
                    &#8250;</button>
            </div>
            <!-- <button id="slideLeft"
                class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white p-2 rounded-r-lg shadow">&lt;</button>
            <button id="slideRight"
                class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white p-2 rounded-l-lg shadow">&gt;</button> -->
        </div>


        <!-- FOOTER -->
        <div class="-mb-24">
            <!-- Footer Start -->
            <div class="bg-[#091e35] text-white py-16 md:px-6">
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
                                <p class="flex items-center gap-2 mt-3 md:mt-2"><i class="fa fa-map-marker"></i>4 KG 11
                                    Ave, Kigali
                                    YUSSA PLAZZA Building at 1st Floor
                                </p>
                                <p class="flex items-center gap-2 mt-3"><i class="fa fa-envelope"></i>info@kiac.ac.rw
                                </p>
                                <p class="flex items-center gap-2 mt-3"><i class="fa fa-phone"></i>+250 783 205 698</p>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold mb-4 md:mb-2 md:mt-4">Follow Us</h2>
                            <div class="text-md">
                                <div class="flex gap-3">
                                    <a href="https://twitter.com/kiac_rwanda" target="_blank"
                                        class="fab fa-twitter"></a>
                                    <a href="https://www.facebook.com/kiac.rw1" target="_blank"
                                        class="fab fa-facebook-f"></a>
                                    <a href="https://www.linkedin.com/in/kigaliartcollege/" target="_blank"
                                        class="fab fa-linkedin-in"></a>
                                    <a href="https://www.instagram.com/kiac_rwanda?" target="_blank"
                                        class="fab fa-instagram"></a>
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
    const slideContent = document.getElementById('sliderContent');
    const slideLeftBtn = document.getElementById('slideLeft');
    const slideRightBtn = document.getElementById('slideRight');

    let sliderPosition = 0;
    const slideWidth = slideContent.children[0].clientWidth;

    slideLeftBtn.addEventListener('click', () => {
        if (sliderPosition < 0) {
            sliderPosition += slideWidth;
            slideContent.style.transform = `translateX(${sliderPosition}px)`;
        }
    });

    slideRightBtn.addEventListener('click', () => {
        if (sliderPosition > -(slideContent.children.length - 3) * slideWidth) {
            sliderPosition -= slideWidth;
            slideContent.style.transform = `translateX(${sliderPosition}px)`;
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

<script>


    //REAL-TIME CLOCK

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
<!-- <script src="<?= base_url(); ?>assets/landing_new/lib/easing/easing.min.js"></script>
      <script src="<?= base_url(); ?>assets/landing_new/lib/slick/slick.min.js"></script> -->
<script src="<?= base_url(); ?>assets/landing_new/js/main.js"></script>

</html>