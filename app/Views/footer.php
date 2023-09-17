<!DOCTYPE html>
<html lang="en">

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

    <style>
        .lower-footer {
            border-bottom: 1px solid rgba(3, 110, 157, 0.3);
            padding-bottom: 20px;

        }

        .lower-footer .logo img {
            width: 150px;
            height: auto;
        }

        @media only screen and (max-width: 768px) {

            .footer-heading {
                font-size: 16px;
            }

            .main_footer_links li a,
            .main_footer_links li {
                font-size: 12px !important;
            }

            .footer-social li i {
                font-size: 16px;
            }

            .footer-links a {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 768px) {
            .lower-footer {
                flex-direction: column;
                text-align: center;
            }

            .lower-footer .logo {
                flex-direction: column;
                display: flex;
                align-items: center;
            }

            .lower-footer .logo img {
                padding: 10px;
                width: 120px;
            }
        }
    </style>
</head>

<body>

    <div class="footer-container gray-bg_medium" style="height: auto; padding-bottom: auto;">
        <footer class="container" id="footer" style="padding: 20px; border-bottom: 1px solid rgba(3, 110, 157, 0.3);">
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <div class="footer-links-group">
                        <h3 class="footer-heading fw_300">About Us</h3>
                        <ul class="main_footer_links" style="display: block;">
                            <ul>
                                <li><a href="#">KIAC Facts and Figures</a></li>
                                <li><a href="#">KIAC Statement and Concept</a></li>
                                <li><a href="#">Vision and Mission</a></li>
                                <li><a href="#">The Chancellor</a></li>
                                <li><a href="#">Vice Chancellor's Office</a></li>
                                <li><a href="#">Board of Governors</a></li>
                                <li><a href="#">Administrative offices</a></li>
                                <li><a href="#">Key Documents & Policies</a></li>
                                <li><a href="#">Partnerships</a></li>
                            </ul>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="footer-links-group">
                        <h3 class="footer-heading fw_300">Academic</h3>
                        <ul class="main_footer_links" style="display: block;">
                            <ul>
                                <li><a href="#">Students</a></li>
                                <li><a href="#">Colleges and Campuses Schools</a></li>
                                <li><a href="#">Schools</a></li>
                                <li><a href="#">Admission</a></li>
                                <li><a href="#">International Students</a></li>
                                <li><a href="#">Fee Structure</a></li>
                                <li><a href="#">KIAC Bank accounts</a></li>
                                <li><a href="#">Academic Calendar</a></li>
                                <li><a href="#">Academic Regulations & Policies</a></li>
                                <li><a href="#">Centres of excellence</a></li>
                                <li><a href="#">E-Learning</a></li>
                            </ul>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="footer-links-group">
                        <h3 class="footer-heading fw_300">Key Links</h3>
                        <ul class="main_footer_links" style="display: block;">
                            <ul>
                                <li><a href="#">KIAC brand guidelines</a></li>
                                <li><a href="#">Our partner universities/institutions</a></li>
                                <li><a href="#">Government Smart Admin System</a></li>
                                <li><a href="#">E-mboni</a></li>
                                <li><a href="#">MIFOTRA self-service portal</a></li>
                                <li><a href="#">Class Representative Report Form</a></li>
                                <li><a href="#">Students Evaluation of Module Teaching and Learning Form</a></li>
                                <li><a href="#">KIAC weekly reporting form</a></li>
                                <li><a href="#">DTLE</a></li>
                            </ul>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="footer-links-group">
                        <h3 class="footer-heading fw_300">Address</h3>
                        <ul class="main_footer_links ">
                            <li style="font-weight: 600;color: #036e9d; font-size: 14px; padding-top: 5px;"><i
                                    class="fa fa-map-marker"></i> KK 737
                                Street, Remera, Kigali<br>
                                PO BOX 4285 Kigali-Rwanda</li>
                            <li style="font-weight: 600;color: #036e9d; font-size:14px; padding: 5px 0 15px;"> <i
                                    class="fa fa-envelope"></i>
                                info@kiac.ac.rw</li>
                        </ul>
                    </div>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127601.33843275288!2d29.95548984335936!3d-1.9355972999999946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7a9f5f652c3%3A0xd0fe063e8f64a42b!2sKIAC%20-%20Kigali%20International%20Art%20College!5e0!3m2!1sen!2srw!4v1694422613436!5m2!1sen!2srw"
                            width="285" height="200" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </footer>
        <section class="footer-btm" style="margin-top: 0; margin-bottom: 0;">
            <div class="container">
                <div class="border-b border-blue-300" style="height: auto; padding: 10px auto;">
                    <div class="flex justify-center items-center w-full lower-footer">
                        <!-- First Div: Image -->
                        <div class="w-full px-4 logo">
                            <a href="">
                                <img src="<?= base_url(); ?>assets/landing_new/img/kiac-logo.png" alt="img">
                            </a>
                        </div>

                        <!-- Second Div: Social Media -->
                        <div class="w-full px-4 social-media">
                            <ul class="footer-social">
                                <li class="inline-block m-2">
                                    <a href="#">
                                        <i class="fab fa-facebook inline-block align-middle"></i>
                                        <span class="sr-only">Link to Facebook</span>
                                    </a>
                                </li>
                                <li class="inline-block m-2">
                                    <a href="#">
                                        <i class="fab fa-twitter inline-block align-middle"></i>
                                        <span class="sr-only">Link to Twitter</span>
                                    </a>
                                </li>
                                <li class="inline-block m-2">
                                    <a href="#">
                                        <i class="fab fa-instagram inline-block align-middle"></i>
                                        <span class="sr-only">Link to Instagram</span>
                                    </a>
                                </li>
                                <li class="inline-block m-2">
                                    <a href="#">
                                        <i class="fab fa-youtube inline-block align-middle"></i>
                                        <span class="sr-only">Link to YouTube</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Third Div: Copyright -->
                        <div class="w-full px-4 copyright">
                            <ul class="footer-links">
                                <li><a href="#" class="text-blue-600 pr-2.5">Copyright / Disclaimer / Privacy</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="row gray-bg" style="padding: 20px 0;">
                    <div class="col-md-12">
                        <p class="cricos">
                            <span style="color: #666;">© 2023 Kigali International Art College. All Right
                                Reserved</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Back to Top -->
    <a href="#" class="back-to-top fixed bottom-4 right-4 bg-[#091e35] text-white p-2 rounded-full shadow-md">
        <i class="fa fa-chevron-up"></i>
    </a>
</body>

</html>