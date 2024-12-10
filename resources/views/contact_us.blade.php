<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Interrio - Corporate Architecture and Interior Design, Responsive Html5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=0.67, maximum-scale=0.67" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <title>
        Sky High
    </title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <!-- Master Css -->
    <link href="main.css" rel="stylesheet" />
    <style>
        .whatsapp-icon {
            position: fixed;
            /* Fixed positioning */
            bottom: 20px;
            /* Distance from the bottom */
            right: 10px;
            /* Distance from the right */
            background-color: white;
            /* Background color */
            border-radius: 50%;
            /* Circular shape */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Optional shadow */
            padding: 15px;
            /* Increased padding around the icon */
            z-index: 1000;
            /* Ensure it stays on top */
        }

        .whatsapp-icon i {
            font-size: 40px;
            /* Increased size of the icon */
            color: green;
            /* Color of the icon */
        }

        /* Additional styles for your content can go here */
        h1 {
            color: #333;
        }

        /* Optional: Add styles to make the images responsive */
        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        /* Style for the category sections */
        .section {
            display: none;
            /* Hide all sections initially */
            margin-top: 20px;
        }


        /* Optional: Add hover effect for category buttons */
        .filter {
            margin-bottom: 10px;
        }

        .fixed-size {
            width: 390px;
            /* Fixed width */
            height: 300px;
            /* Fixed height */
            object-fit: cover;
            /* Ensures images are not distorted and will be cropped if necessary */
        }

        .image-row {
            gap: 15px;
            /* Adjust the gap between columns */
        }


        .img-container {
            width: 100%;
            /* Ensure the container takes the full width of the column */
            height: 200px;
            /* Set a fixed height for the images */
            overflow: hidden;
            /* Hide any overflow from the image */
        }

        .img-container img {
            width: 390px;
            /* Fixed width */
            height: 300px;
            /* Fixed height */
            object-fit: cover;
            /* Ensure the image maintains its aspect ratio while covering the container */
        }

        .pregap-tecx {
            text-align: left;
            /* Default alignment */
        }

        @media (max-width: 768px) {
            .pregap-tecx {
                text-align: center;
                /* Center text on smaller screens */
            }
        }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>
    <div class="dark-version">
        <!--//==top header Start==//-->
        <!--//==preloader Start==//-->




           <!--//==preloader End==//-->
           <header id="main-header">
            <div class="top-header pad-top10 pad-bottom10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-9 text-left">
                            <ul class="top-bar-icon">
                                <li>
                                    <a href="tel:8329980202"><i class="fa fa-phone"
                                            aria-hidden="true"></i>832-9988760</a>
                                </li>
                                <li>
                                    <a href="mailto:info@gmail.com"><i class="fa fa-envelope-o"
                                            aria-hidden="true"></i>info@gmail.com</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-3 text-right">
                            <ul class="top-right-icon">
                                <li>
                                    <a href="https://www.facebook.com"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.instagram.com"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--//==top header end==//-->
            <!--//==mega menu start==//-->
            <div id="main-menu" class="wa-main-menu">
                <!-- Menu -->
                <div class="wathemes-menu relative">
                    <!-- navbar -->
                    <div class="navbar navbar-default navbar-bg-dark" role="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="navbar-header pad-top15 pad-bottom15">
                                        <!-- Button For Responsive toggle -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <!-- Logo -->
                                        <a class="navbar-brand" href="/"
                                            style="display: flex; align-items: center;">
                                            <img class="site_logo dark-logo" alt="Site Logo"
                                                style="height: 70px; width: auto;" src="assets/img/Rahim.png" />
                                            <img class="site_logo light-logo" alt="Site Logo"
                                                style="height: 70px; width: auto;" src="assets/img/Rahim.png" />
                                            <span
                                                style="font-size: 24px; margin-left: 10px; font-weight: bold; color: #0266ab;">SKY HIGH</span>
                                        </a>


                                    </div>
                                    <!-- Navbar Collapse -->
                                    @include('navbar')
                                    <!-- navbar-collapse -->
                                </div>
                                <!-- col-md-12 -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- container -->
                    </div>
                    <!-- navbar -->
                </div>
                <!--  Menu -->
            </div>
            <!--//==mega menu end==//-->
        </header>
        <!--//========slider start=========//-->

        <div class="breadcrumb-section-box">
            <div class="special-style special-style-full special-style-semidark col-md-12 col-md-offset-0 pull-right">
                <div class="bg-image" style="background-image:url('assets/img/3.jpg');"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 pad-top250 pad-bottom100 heading-box">
                        <h1 class="heading-color box-z">Contact</h1>
                        <div class="clear"></div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a class="heading-wa box-z" href="index.html">home</a>
                                </li>
                                <li class="heading-wa box-z activ">contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--//========breadcrumb section End=========//-->
        <div class="contact-page pad-top100 pad-bottom100">
            <div class="container">
                <div class="row contactmain">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h2 class="heading-color theme-title"> Contact Us</h2>
                        <div class="contact-icon pad-top30">
                           <ul>
    <li><i class="fa fa-map-marker" aria-hidden="true"></i><span> Houston, Texas,USA</span></li>
    <li><i class="fa fa-phone" aria-hidden="true"></i><span><a href="tel:+18329980654">+1 (832) 998-8761</a></span></li>
    <li><i class="fa fa-envelope" aria-hidden="true"></i><span><a href="mailto:info@gmail.com">info@gmail.com</a></span></li>
    <li>
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <span><a href="https://www.facebook.com" target="_blank">Facebook</a></span>
    </li>
    <li>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <span><a href="https://www.instagram.com" target="_blank">Instagram</a></span>
    </li>
</ul>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- <h2 class="heading-color space-letter text-left theme-title">Contact Us</h2> -->
                        <form action="{{ route('send.message') }}" method="POST">
                            @csrf
                            <div class="row message-box pad-top30">
                                <div class="col-md-12  col-xs-12 mar-bottom">
                                    <div class="fome-box pad-bottom30">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="fome-box pad-bottom30">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="fome-box">
                                        <input type="text" name="contact_no" placeholder="Contact No.">
                                    </div>
                                    <div class="fome-box">
                                        <textarea name="message" placeholder="Your Message" style="margin-top: 30px;" rows="5" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">

                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="itg-button mar-top30">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <!--//========NEW-letter section Start=========//-->

        <!--//========NEW-letter section End=========//-->
        <!--//========footer section Strat=========//-->
        @include('footer')
        <!--//========footer section End=========//-->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/plugin/menu-menu/js/hover-dropdown-menu.js"></script>
    <script src="assets/plugin/menu-menu/js/jquery.hover-dropdown-menu-addon.js"></script>
    <script src="assets/plugin/owl-carousel-slider/js/owl.carousel.min.js"></script>
    <script src="assets/plugin/fancyBox/js/jquery.fancybox.pack.js"></script>
    <script src="assets/plugin/fancyBox/js/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="assets/plugin/counter/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="assets/plugin/counter/js/jquery.appear.js"></script>
    <script src="assets/plugin/mixitup/js/jquery.mixitup.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
