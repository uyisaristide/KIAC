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
    -
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
    </style>
</head>

<body class="w-screen max-w-full -mt-[30px]">
    <div class="w-full max-w-full">
        <div class="container-main p-4">
            <header>
                <div class="border-2 border-white/60 w-full ">
                    <!-- img header -->
                    <div class="w-full flex items-center justify-between  h-24 md:block">
                        <div class="h-full w-full md:hidden">
                            <img class="w-full h-full" src="<?= base_url(); ?>assets/landing_new/img/banner_left.jpg"
                                alt="img" />
                        </div>
                        <!-- <div class="h-full w-1/2 md:w-full">
                            <img class="w-full h-full" src="<?= base_url(); ?>assets/landing_new/img/banner_right.gif"
                                alt="img" />
                        </div> -->
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
                            <h2><a id="has-submenu" class="" href="<?=base_url('study_at_kiac');?>"><span class="sub-arrow">+</span><i
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
            <div class="mt-2 w-full ">
                    <!-- img header -->
                    <div class="w-full flex items-center justify-between  h-24 md:block">
                        <div class="h-full w-full md:hidden">
                        <img class="w-full h-full" src="<?= base_url(); ?>assets/landing_new/img/banner_right.gif"
                                alt="img" />
                        </div>
                    </div>

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
    <!-- boxes -->
    <h2 class="text-custom-blue">Why Choose Kiac?</h2>

<div class="bg-custom-gradient px-4">
    <div class="flex flex-wrap text-white justify-between mx-auto max-w-5xl">
        <!-- Card 1 -->
        <div class="card-container">
            <img src="<?= base_url() ?>assets/landing_new/img/icon-1.png" alt="Icon 1" class="card-image">
            <h2 class="card-title">WE'RE ON THE RISE</h2>
            <p class="text-center">Ranked in the world's top 100 young universities.</p>
        </div>
        <!-- Card 2 -->
        <div class="card-container">
            <img src="<?= base_url() ?>assets/landing_new/img/icon-2.png" alt="Icon 2" class="card-image">
            <h2 class="card-title">BEST COURSE</h2>
            <p class="text-center">UR Courses are ranked by students as the best</p>
        </div>
        <!-- Card 3 -->
        <div class="card-container">
            <img src="<?= base_url() ?>assets/landing_new/img/icon-3.png" alt="Icon 3" class="card-image">
            <h2 class="card-title">FACTS & FIGURES</h2>
            <p class="text-center">The Universit of Rwanda is a public research university</p>
        </div>
    </div>
</div>

<div class="gallery-container">
    <div class="gallery-image">
        <img src="<?= base_url() ?>assets/landing_new/img/1.png" alt="Image 1" class="image-fit">
    </div>
    <div class="gallery-image">
        <img src="<?= base_url() ?>assets/landing_new/img/2.png" alt="Image 2" class="image-fit">
    </div>
    <div class="gallery-image">
        <img src="<?= base_url() ?>assets/landing_new/img/3.png" alt="Image 3" class="image-fit">
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