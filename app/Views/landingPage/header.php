<!DOCTYPE hmtl>
<html lang="rw">

<head>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
</head>

<body class="w-screen max-w-full -mt-[30px]">
    <div class="w-full max-w-full">
        <div class="container-main p-4">
            <style>
                #main-menu2 .menu-item:hover .submenu {
                    display: block;
                }

                #main-menu2 .submenu {
                    display: none;
                    position: absolute;
                    top: 100%;
                    left: 0;
                    border-right: 3px solid #fff;
                    border-top: 0;
                    border-bottom: 0;
                    border-left: 0;
                    padding: 0;
                }

                #main-menu2 .submenu li {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                }

                #main-menu2 .submenu a {
                    display: block;
                    padding: 10px 20px;
                    text-decoration: none;
                    color: #fff;
                    text-align: center;
                    font-size: 15px;
                    font-family: 'Trebuchet MS', sans-serif;
                    border-bottom: 1px solid rgba(3, 110, 157, 1) !important;

                }

                #main-menu2 .submenu a:hover {
                    color: #036e9d;
                    background: #fff !important;
                }
            </style>
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
                </div>
                <nav class="main-nav w-full mt-2" role="navigation">
                    <input id="main-menu-state" type="checkbox" />
                    <label class="main-menu-btn" for="main-menu-state">
                        <span class="main-menu-btn-icon"></span> Toggle main menu visibility
                    </label>
                    <ul id="main-menu" class="sm sm-blue">
                        <li><a class="current" href="<?= base_url('#'); ?>"><i class="fa fa-home fa-lg"></i> Home</a>
                        </li>
                        <li><a href="<?= base_url('about'); ?>"><i class="fa fa-institution"></i> About KIAC</a>
                        </li>
                        <li><a href="<?= base_url('study_at_kiac'); ?>"><i class="fa fa-heartbeat "></i> Study At
                                KIAC</a>
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
                        <li><a href="#"><i class="fa fa-plane"></i>Services</a></li>
                        <li><a href="#"><i class="fa fa-line-chart "></i>Projects</a></li>
                        <li><a href="#"><i class="fa fa-group"></i>KIAC TV</a></li>
                        <li><a href="#"><i class="fa fa-female"></i> News and Events</a></li>
                        <li><a href="<?= base_url('agent'); ?>"><i class="fa fa-building"></i>Agents</a></li>
                        <li><a href="<?= base_url('abroad'); ?>"><i class="fa fa-newspaper-o"></i>Study Abroad </a></li>
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
        </div>
    </div>
</body>

</html>