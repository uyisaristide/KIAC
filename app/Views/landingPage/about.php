<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>KIAC - <?= lang("app.login")?></title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="school management system">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
       <!--  <link href="<?=base_url();?>assets/landing_new/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
       <!--  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/css/all.min.css" rel="stylesheet"> -->
        <link href="<?=base_url();?>assets/landing_new/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/landing_new/lib/slick/slick.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/landing_new/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->

        <link href="<?=base_url();?>assets/landing_new/css/style.css" rel="stylesheet">
        <style type="text/css">

        

       

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
        .lang{
            position: absolute;bottom: 10px;left: 10px;
        }
        .lang a{
            margin-right: 10px;
        }
        .lang img{
            margin: -5px 3px 0 0;
        }
    
    </style>
</head>

<body cz-shortcut-listen="true" class='container' bgcolor="yellow">
    <!-- Top bar Start -->
        <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <img src="<?=base_url();?>assets/landing_new/img/banner.jpg" style="width: 100%;height: 8rem;">
                </div>
                 <!-- ======= Header ======= -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="http://164.68.127.249/public/" class="nav-item nav-link active">Home</a>
                           
                            <a href="http://164.68.127.249/public/" class="nav-item nav-link">Programs</a>
                            <a href="http://164.68.127.249/public/" class="nav-item nav-link">KIAC AGENT</a>
                        <a href="http://164.68.127.249/public/" class="nav-item nav-link">kiac life</a>
                         <a href="http://164.68.127.249/public/" class="nav-item nav-link">Applications</a>

                            <a href="http://164.68.127.249/public/" class="nav-item nav-link">Contact us</a>
                           
                        </div>
<!--                         <div class="navbar-nav ml-auto">
                           <a href="<?=base_url('login');?>" class="btn-get-started">Login</a>&nbsp;
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        <br>


<!-- Footer Start -->
        <div class="footer" style="background: #091e35;color: white;">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <img src="<?=base_url();?>assets/landing_new/img/kiac-logo.png" alt="Logo">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>4 KG 11 Ave, Kigali
                                YUSSA PLAZZA Building at 1st Floor</p>
                                <p><i class="fa fa-envelope"></i>info@kiac.ac.rw</p>
                                <p><i class="fa fa-phone"></i>+250 783 205 698</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
<a href="https://twitter.com/kiac_rwanda" target="_blank"><i class="fab fa-twitter"></i></a>
<a href="https://www.facebook.com/kiac.rw1" target="_blank"><i class="fab fa-facebook-f"></i></a>
<a href="https://www.linkedin.com/in/kigaliartcollege/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
<a href="https://www.instagram.com/kiac_rwanda?" target="_blank"><i class="fab fa-instagram"></i></a>
<a href="https://www.youtube.com/channel/UClc_sPYUsjFGVgFGOi1k01g" target="_blank"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Usefull Links</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom" style="background: #061429;">
            <div class="container text-center">
                <div class="row">
                    <div class="copyright">
                        <p class="navbar-text col-md-12 col-sm-12 col-xs-12">Copyright &copy; <a href="#">KIAC</a>. All Rights Reserved</p>
                    </div>

                   
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
<script type="application/javascript" src="<?=base_url('assets/js/jquery-3.4.1.min.js');?>"></script>
<script type="application/javascript" src="<?=base_url('assets/js/parsley.min.js');?>"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/toast.js"></script>

<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
     xlink="http://www.w3.org/1999/xlink" svgjs="http://svgjs.com/svgjs"
     style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
</svg>
<div class="jvectormap-tip"></div>
</body>
</html>
