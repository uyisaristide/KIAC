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
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="<?= base_url(); ?>assets/landing_new/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= base_url(); ?>assets/landing_newimg/logo.png" rel="icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet" />
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/landing_new/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    -
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu1.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu2.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu3.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <link href="<?= base_url(); ?>assets/css/tailwind/output.css" rel="stylesheet">
    <script>
        $(document).ready(function () {
            $('#myCarousel').carousel();
        });
    </script>
    <style>
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
    </style>
</head>

<body class="w-screen max-w-full -mt-[30px]">
    <div class="w-full max-w-full">
        <div class="container-main p-4">
            <header>
                <div class="border-2 border-white/60 w-full ">
                    <!-- img header -->
                    <div class="w-full flex items-center justify-between gap-4 h-24 md:block">
                        <div class="h-full w-1/2 md:hidden">
                            <img class="w-full h-full" src="<?= base_url(); ?>assets/landing_new/img/banner_left.jpg"
                                alt="img" />
                        </div>
                        <div class="h-full w-1/2 md:w-full">
                            <img class="w-full h-full" src="<?= base_url(); ?>assets/landing_new/img/banner_right.gif"
                                alt="img" />
                        </div>
                    </div>
                    <div class="p-2 bg-[#333] flex items-center justify-between md:flex-col md:gap-2">
                        <div class="flex gap-2 text-white items-center md:flex-col md:gap-3">
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
                    <div class="flex items-center float-right text-white/80 text-xs font-medium py-2">
                        <div class="flex gap-1">
                            <span>+27 &deg;</span>
                            <span class="px-4 border-l">KIGALI</span>
                        </div>
                    </div>
                    <div class="flex items-center h-[8rem] md:h-[4rem] w-full md:grid md:grid-cols-2">
                        <div class="w-1/2 py-2 pl-4 md:w-full">
                            <img class="w-1/2 h-[80%]" src="<?= base_url(); ?>assets/landing_new/img/logo1.png"
                                alt="no image found">
                        </div>
                        <div class="w-full md:w-full">
                            <img class="w-full h-full" src="<?= base_url(); ?>assets/landing_new/img/middle_banner.jpg "
                                alt="no image found">
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
                        <li><a href="<?=base_url('login');?>"><i class="fa fa-language"></i> Login</a></li>
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
            </header>


            <div class="flex gap-3 mt-4 md:flex-col ">
                <div class="w-[30%] md:w-full">
                    <div class="my-2 w-full flex item-center gap-2">
                        <input class="py-1 w-4/6 text-sm px-2 rounded-lg outline-none border text-white placeholder:text-white/90 focus:border-yellow-300 transition-colors border-white/30 bg-white/20" type="text" placeholder="Search . . ." name="search" id="search" />
                        <button class="p-2 w-2/6 bg-yellow-500 rounded-lg text-sm text-white" type="submit">Search</button>
                    </div>
                    <div class="border-2 border-yellow-300 text-center p-2 bg-blue-500 rounded-lg">
                        <a class="text-white font-semibold" href="#">Study <span class="text-white bg-yellow-500 p-1 rounded-lg px-3">Abroad</span></a>
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
                    <div id="carouselControls" class="carousel slide carousel-fade rounded-lg h-full" data-ride="carousel">
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
                        <input class="py-1 w-4/6 text-sm px-2 rounded-lg outline-none border text-white placeholder:text-white/90 focus:border-yellow-300 transition-colors border-white/30 bg-white/20" type="text" placeholder="Search . . ." name="search" id="search" />
                        <button class="p-2 w-2/6 bg-yellow-500 rounded-lg text-sm text-white" type="submit">Search</button>
                    </div>
                    <div class="border-2 border-yellow-300 text-center p-2 bg-blue-500 rounded-lg">
                        <a class="text-white font-semibold" href="#">Study At <span
                                class="text-white bg-yellow-500 p-1 px-3 rounded-lg">Kigali International School</span></a>
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

    <div class="p-4 container-main">
        <div id="about" class="bg-white p-12 rounded-lg shadow">
            <div class="flex gap-2 h-96 md:flex-col md:h-fit">
                <div class="w-3/5 md:w-full">
                    <div class="">
                        <h2 class="text-2xl font-bold text-gray-800">ABOUT <span class="text-blue-500">KIAC</span></h2>
                    </div>
                    <div class="mt-4">
                        <h2 class="text-xl font-semibold text-gray-800">Who We Are</h2>
                    </div>
                    <div class="mt-4">
                        <p class="text-lg font-regular text-gray-800">
                            Kigali International Art College (KIAC) is a dynamic and forward-looking technical school,
                            vibrant and lively; established in 2015 under the Workforce Development Authority (WDA)
                            decision, to produce highly technical skilled workforce to meet industry and social needs.
                            We are confident that our technical courses are internationally benchmarked and meet
                            national and international demands. Technical and Vocational training tackle directly the
                            environment issues through nurturing young skilled technician with skills of renewable
                            energy.
                        </p>
                    </div>
                </div>
                <div class="w-2/5 md:w-full">
                    <div class="h-full">
                        <img class="w-full h-full object-cover rounded-lg"
                            src="<?= base_url() ?>assets/landing_new/img/header-slide-4.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="">
                    <h2 class="text-center text-xl font-semibold text-gray-800">KIAC Objectives</h2>
                </div>
                <div class="mt-2 flex flex-col gap-2">
                    <p class="text-lg font-regular text-gray-800">
                        1. To offer professional training to meet both local and international market demands to
                        develoop and improve the effectiviness on young generations through quality training, capacity
                        building & career quidance.
                    </p>
                    <p class="text-lg font-regular text-gray 800">
                        2. To participate in discovery, transmission and preservation and enhancement of technical
                        skills and stimulate the intellectual participation of trainees in the economic, art,
                        professional technological development of Rwanda.
                    </p>
                    <div class="text-lg-font-regular text-gray-800">
                        3. Upon successful completion of the course, students will be issued a certificate, depending on
                        the organizers of the course.after getting all required skills student can be able to graduate
                        and start making differencesy.
                    </div>
                </div>
            </div>
        </div>

        <div id="programs" class="bg-blue-100 py-4 rounded-lg mt-4">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-semibold text-center mb-6 text-blue-800">OUR PROGRAMS</h2>
                <div class="grid md:grid-cols-1 grid-cols-3 gap-4">
                    <!-- Program Card 1: Photography -->
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                        <div class="text-3xl mb-4 text-blue-600">
                            <i class="fas fa-camera"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Photography</h3>
                        <p class="text-center text-gray-700">
                            Photography courses enable the candidates to understand the utility of different camera
                            parts, working out the lights while clicking pictures.
                        </p>
                    </div>

                    <!-- Program Card 2: Graphic Design -->
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                        <div class="text-3xl mb-4 text-blue-600">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Graphic Design</h3>
                        <p class="text-center text-gray-700">
                            Graphic design courses help in a craft where professionals create visual content to
                            communicate messages.
                        </p>
                    </div>

                    <!-- Program Card 3: Videography -->
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                        <div class="text-3xl mb-4 text-blue-600">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Videography</h3>
                        <p class="text-center text-gray-700">
                            Our Videography courses provide learners with the skills to master your camera for video and
                            audio.
                        </p>
                    </div>

                    <!-- Program Card 4: Creative Art -->
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                        <div class="text-3xl mb-4 text-blue-600">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Creative Art</h3>
                        <p class="text-center text-gray-700">
                            A broad, practice-based course, that encompasses a wide variety of visual and non-visual
                            disciplines for students to select as part of their tailor-made creative journey.
                        </p>
                    </div>

                    <!-- Program Card 5: CCTV Camera Installation -->
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                        <div class="text-3xl mb-4 text-blue-600">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">CCTV Camera Installation</h3>
                        <p class="text-center text-gray-700">
                            CCTV Camera Installation courses are designed to provide you with the skills and knowledge
                            required to install and commission Closed Circuit TV systems from the cameras to the image
                            processors and recorders.
                        </p>
                    </div>

                    <!-- Program Card 6: Computer Maintenance -->
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                        <div class="text-3xl mb-4 text-blue-600">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Computer Maintenance</h3>
                        <p class="text-center text-gray-700">
                            Computer Maintenance provides an introduction to the computer hardware and software skills
                            needed to bring students to an entry-level ICT professional.
                        </p>
                    </div>

                    <!-- Program Card 7: Music -->
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                        <div class="text-3xl mb-4 text-blue-600">
                            <i class="fas fa-music"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Music</h3>
                        <p class="text-center text-gray-700">
                            Music courses range in specialization from practical instrument training to music theory to
                            the music business.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="py-6 rounded-lg mt-4 md:w-full" id="contact">
            <div class="px-4 md:px-0 md:w-full">
                <h2 class="text-3xl font-semibold text-center mb-6 text-gray-800">CONTACT US</h2>
                <div class="bg-white p-8 md:w-full rounded-lg shadow-md flex gap-4 md:flex-col justify-between">
                    <div class="md:w-full w-2/3 mb-8 md:mb-0">
                        <h3 class="text-xl font-semibold mb-4 text-blue-800">Get in Touch</h3>
                        <form>
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-semibold mb-2">Your Name</label>
                                <input type="text" id="name" name="name"
                                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-semibold mb-2">Your Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-gray-700 font-semibold mb-2">Your Message</label>
                                <textarea id="message" name="message"
                                    class="w-full p-2 border border-gray-300 rounded resize-none focus:outline-none focus:border-blue-500"
                                    rows="4"></textarea>
                            </div>
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Submit</button>
                        </form>
                    </div>
                    <div class="md:w-full w-1/3">
                        <h3 class="text-xl font-semibold mb-4 text-blue-800">Contact Information</h3>
                        <p class="text-gray-700 font-medium text-[16px] mt-3 mb-2"><i class="fas fa-phone-alt mr-2 text-blue-600"></i>+123 456 7890
                        </p>
                        <p class="text-gray-700 font-medium text-[16px] mb-2"><i class="fas fa-envelope mr-2 text-blue-600"></i>info@kiac.ac.rw
                        </p>
                        <p class="text-gray-700 font-medium text-[16px] mb-2"><i class="fas fa-clock mr-2 text-blue-600"></i>Reply within 24
                            hours</p>
                        <p class="text-gray-700 font-medium text-[16px] mb-2"><i class="fas fa-headset mr-2 text-blue-600"></i>24 hrs Support
                        </p>
                        <p class="text-gray-700 font-medium text-[16px] mb-2"><i class="fas fa-phone mr-2 text-blue-600"></i>Call to ask any
                            question<br>+250 783 205 698</p>
                    </div>
                </div>
            </div>
        </div>





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
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const subMenu = this.nextElementSibling;
            subMenu.style.display = (subMenu.style.display === 'block') ? 'none' : 'block';
        });
    });
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