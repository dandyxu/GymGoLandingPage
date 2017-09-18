<?php
/**
 * Template Name: Landing Page
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GymGo.ie - Ireland's No.1 Website for Gyms & PTs">
    <meta name="author" content="GymGo.ie Team">

    <title>GymGo.ie - Ireland's No.1 Website for Gyms & PTs</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="wp-content/themes/LoadingPageAssets/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link href="wp-content/themes/gymgolanding/LoadingPageAssets/css/scrolling-nav.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="wp-content/themes/gymgolanding/LoadingPageAssets/img/logo/Gymgo-small.png" style="width:120px; height:25px;" alt="GymGo.ie" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about-us">About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#join-us">Sign Up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#share-to-friends">Share to Friends</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact-us">Contact Us</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Home Section -->
    <section id="home" class="home-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>GymGo.ie</h1>
                   <!--<div class="embed-responsive embed-responsive-16by9">
                        <iframe width="900" height="215" frameborder="0" src="https://www.youtube.com/embed/jx_HxehI4I0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>-->
                    <button class="video check-video-button" data-video="https://www.youtube.com/embed/jx_HxehI4I0" data-toggle="modal" data-target="#videoModal">See How it Looks Like</button>

                    <div class="modal fade " id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <br />
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/jx_HxehI4I0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <!--<section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Us</h1>
  
                </div>
            </div>
        </div>
    </section>-->

    <!-- About Us Section -->
    <section id="about-us" class="about-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <h1>Welcome to GymGo.ie</h1><br />
                    <h2> - the place where people go to find Gyms and Personal Trainers</h2>
                    <br />
                    <br />
                    <ul>
                        <li>Next Generation Technology for the Fitness Industry</li>
                        <li>Bringing all Gyms and PTs in Ireland to one place</li>
                        <li>Promote the service you offer directly to customers who are genuinely looking to get fit</li>
                        <li>No more hit or miss Advertising</li>
                        <li>Allows Gyms and PT’s to advertise everything, including
                            <ul>
                                <li>Facilities</li>
                                <li>Classes</li>
                                <li>Pricing</li>
                                <li>Opening times etc.</li>
                            </ul>
                        </li>
                        <li>Brings customers to YOU</li>
                        <li>Allowing them to book an online appointment</li>
                        <li>Get directions to your Gym</li>
                        <li>Communicate directly with You</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Us section-->
    <section id="join-us" class="join-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <div style="border: 2px solid white; padding: 10px 10px 10px 10px;">
                        <?php echo do_shortcode("[caldera_form id=\"CF59bf945bc2198\"]")?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Share to Friends section -->
    <section id="share-to-friends" class="share-to-friends-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <h1>Share to Your Friends</h1>
                        <!-- Social Buttons Section -->
                        <div class="row" align="center" style="padding: 40px; border: 2px dashed white;">
                            <div class="icon-circle" style="display:inline;">
                                <a href="https://www.facebook.com/gymgoie/" target="blank" class="ifacebook" title="GymGo.ie Facebook"><i class="fa fa-facebook"></i></a>
                            </div>

                            <div class="icon-circle" style="display:inline;">
                                <a href="https://twitter.com/gymgoie" target="blank" class="itwittter" title="GymGo.ie Twitter"><i class="fa fa-twitter"></i></a>
                            </div>

                            <div class="icon-circle" style="display:inline;">
                                <a href="https://www.instagram.com/gymgoie/" target="blank" class="iinstagram" title="GymGo.ie Instagram"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- End of Social Buttons Section -->
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact-us" class="contact-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Contact Us</h1>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>Email us to <a href="mailto:info@ivyclub.ie">info@gymgo.ie</a> <br /><br />
                                    Call us on <em>061 278 601</em>.</h2>
                                <hr />
                                <address>
                                    <strong>Proudly Designed by GymGo.ie</strong><br>
                                </address>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <!--<script src="LoadingPageAssets/js/jquery.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="LoadingPageAssets/js/bootstrap.min.js"></script>-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="wp-content/themes/gymgolanding/LoadingPageAssets/js/jquery.easing.min.js"></script>
    <script src="wp-content/themes/gymgolanding/LoadingPageAssets/js/scrolling-nav.js"></script>

    <!-- Load Caldera-Form Libraries -->
    <script type='text/javascript' src='wp-content/plugins/caldera-forms/assets/build/js/parsley.min.js?ver=1.5.6.1'></script>
    <script type='text/javascript' src='wp-content/plugins/caldera-forms/assets/build/js/caldera-forms-front.min.js?ver=1.5.6.1'></script>
    <script type='text/javascript' src='wp-content/plugins/caldera-forms/assets/build/js/jquery-baldrick.min.js?ver=1.5.6.1'></script>
    <script type='text/javascript' src='wp-content/plugins/caldera-forms/assets/build/js/ajax-core.min.js?ver=1.5.6.1'></script>
    <script type='text/javascript' src='wp-content/plugins/caldera-forms/assets/build/js/conditionals.min.js?ver=1.5.6.1'></script>
    <script type='text/javascript' src='wp-content/plugins/caldera-forms/assets/js/i18n/en.js?ver=1.5.6.1'></script>
    <link rel='stylesheet' id='cf-intltelinputcss-css'  href='wp-content/plugins/caldera-forms/fields/phone_better/assets/css/intlTelInput.css?ver=1.5.6.1' type='text/css' media='all' />
    <link rel='stylesheet' id='cf-front-css'  href='wp-content/plugins/caldera-forms/assets/build/css/caldera-forms-front.min.css?ver=1.5.6.1' type='text/css' media='all' />

</body>

</html>

