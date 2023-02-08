<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// $this->load->view("header");s
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../examtakalo/assets/images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="../examtakalo/assets/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../examtakalo/assets/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="../examtakalo/assets/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="../examtakalo/assets/css/responsive.css">
        <!-- Modernizr js -->
        <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Connect</a></li>
                            <li class="active">put a link to register here</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="<?php echo base_url(); ?>index.php/user/login"  method="POST">
                                <div class="login-form">
                                    <h4 class="login-title">Login</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Email Address</label>
                                            <input class="mb-0" type="email" placeholder="Email Address" name="email">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Password</label>
                                            <input class="mb-0" type="password" placeholder="Password" name="password">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="#"> Forgotten password?</a>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="register-button mt-0" name="btn-log">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
				            if($this->session->flashdata('error')){
					    ?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php
				}
			?>
                        <!-- <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="#">
                                <div class="login-form">
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name</label>
                                            <input class="mb-0" type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name</label>
                                            <input class="mb-0" type="text" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email Address*</label>
                                            <input class="mb-0" type="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Password</label>
                                            <input class="mb-0" type="password" placeholder="Password">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Confirm Password</label>
                                            <input class="mb-0" type="password" placeholder="Confirm Password">
                                        </div>
                                        <div class="col-12">
                                            <button class="register-button mt-0">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="../assets/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="../assets/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="../assets/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="../assets/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="../assets/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="../assets/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="../assets/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="../assets/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="../assets/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="../assets/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="../assets/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="../assets/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="../assets/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="../assets/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="../assets/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="../assets/js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="../assets/js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="../assets/js/main.js"></script>
    </body>

<!-- login-register31:27-->
</html>
