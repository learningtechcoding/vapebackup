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
        SKY HIGH
    </title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <!-- Master Css -->
    <link href="main.css" rel="stylesheet" />
    <style>
        .modal-dialog {
            /* Center the modal vertically */
            position: absolute;
            top: 30%;
            transform: translateY(-50%);
            left: 0px;
            right: 0px;
        }

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

        .home-slider-img {
            height: 45vh;
        }

        @media(min-width:554px) {


            .home-slider-img {
                height: 60vh;
            }
        }

        @media(min-width:768px) {


            .home-slider-img {
                height: 90vh;
            }
        }


        @media(min-width:992px) {


            .home-slider-img {
                height: 120vh;
            }
        }





        /* css start  */
        @import url('https://fonts.googleapis.com/css?family=Abel');

        a {
            outline: 0 !important;
        }

        .magnific-img img {
            width: 100%;
            height: auto;
        }

        .mfp-bottom-bar,
        * {
            font-family: 'Abel', sans-serif;
        }

        .magnific-img {
            display: inline-block;
            width: 32.3%;
        }

        .image-popup-vertical-fit {
            cursor: -webkit-zoom-in;
        }

        .mfp-with-zoom .mfp-container,
        .mfp-with-zoom.mfp-bg {
            opacity: 0;
            -webkit-backface-visibility: hidden;
            /* ideally, transition speed should match zoom duration */
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        .mfp-with-zoom.mfp-ready .mfp-container {
            opacity: 1;
        }

        .mfp-with-zoom.mfp-ready.mfp-bg {
            opacity: 0.98;
        }

        .mfp-with-zoom.mfp-removing .mfp-container,
        .mfp-with-zoom.mfp-removing.mfp-bg {
            opacity: 0;
        }

        .mfp-arrow-left:before {
            border-right: none !important;
        }

        .mfp-arrow-right:before {
            border-left: none !important;
        }

        button.mfp-arrow,
        .mfp-counter {
            opacity: 1 !important;
            transition: opacity 200ms ease-in, opacity 2000ms ease-out;
        }

        .mfp-container:hover button.mfp-arrow,
        .mfp-container:hover .mfp-counter {
            opacity: 1 !important;
        }


        /* Magnific Popup CSS */
        .mfp-bg {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1042;
            overflow: hidden;
            position: fixed;
            background: #0b0b0b;
            opacity: 0.8;
        }

        .mfp-wrap {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1043;
            position: fixed;
            outline: none !important;
            -webkit-backface-visibility: hidden;
        }

        .mfp-container {
            text-align: center;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            padding: 0 8px;
            box-sizing: border-box;
        }

        .mfp-container:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }

        .mfp-align-top .mfp-container:before {
            display: none;
        }

        .mfp-content {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            margin: 0 auto;
            text-align: left;
            z-index: 1045;
        }

        .mfp-inline-holder .mfp-content,
        .mfp-ajax-holder .mfp-content {
            width: 100%;
            cursor: auto;
        }

        .mfp-ajax-cur {
            cursor: progress;
        }

        .mfp-zoom-out-cur,
        .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
            cursor: -moz-zoom-out;
            cursor: -webkit-zoom-out;
            cursor: zoom-out;
        }

        .mfp-zoom {
            cursor: pointer;
            cursor: -webkit-zoom-in;
            cursor: -moz-zoom-in;
            cursor: zoom-in;
        }

        .mfp-auto-cursor .mfp-content {
            cursor: auto;
        }

        .mfp-close,
        .mfp-arrow,
        .mfp-preloader,
        .mfp-counter {
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .mfp-loading.mfp-figure {
            display: none;
        }

        .mfp-hide {
            display: none !important;
        }

        .mfp-preloader {
            color: #CCC;
            position: absolute;
            top: 50%;
            width: auto;
            text-align: center;
            margin-top: -0.8em;
            left: 8px;
            right: 8px;
            z-index: 1044;
        }

        .mfp-preloader a {
            color: #CCC;
        }

        .mfp-preloader a:hover {
            color: #FFF;
        }

        .mfp-s-ready .mfp-preloader {
            display: none;
        }

        .mfp-s-error .mfp-content {
            display: none;
        }

        button.mfp-close,
        button.mfp-arrow {
            overflow: visible;
            cursor: pointer;
            background: transparent;
            border: 0;
            -webkit-appearance: none;
            display: block;
            outline: none;
            padding: 0;
            z-index: 1046;
            box-shadow: none;
            touch-action: manipulation;
        }

        button::-moz-focus-inner {
            padding: 0;
            border: 0;
        }

        .mfp-close {
            width: 44px;
            height: 44px;
            line-height: 44px;
            position: absolute;
            right: 0;
            top: 0;
            text-decoration: none;
            text-align: center;
            opacity: 0.65;
            padding: 0 0 18px 10px;
            color: #FFF;
            font-style: normal;
            font-size: 28px;
            font-family: Arial, Baskerville, monospace;
        }

        .mfp-close:hover,
        .mfp-close:focus {
            opacity: 1;
        }

        .mfp-close:active {
            top: 1px;
        }

        .mfp-close-btn-in .mfp-close {
            color: #333;
        }

        .mfp-image-holder .mfp-close,
        .mfp-iframe-holder .mfp-close {
            color: #FFF;
            right: -6px;
            text-align: right;
            padding-right: 6px;
            width: 100%;
        }

        .mfp-counter {
            position: absolute;
            top: 0;
            right: 0;
            color: #CCC;
            font-size: 12px;
            line-height: 18px;
            white-space: nowrap;
        }

        .mfp-arrow {
            position: absolute;
            opacity: 0.65;
            margin: 0;
            top: 50%;
            margin-top: -55px;
            padding: 0;
            width: 90px;
            height: 110px;
            -webkit-tap-highlight-color: transparent;
        }

        .mfp-arrow:active {
            margin-top: -54px;
        }

        .mfp-arrow:hover,
        .mfp-arrow:focus {
            opacity: 1;
        }

        .mfp-arrow:before,
        .mfp-arrow:after {
            content: '';
            display: block;
            width: 0;
            height: 0;
            position: absolute;
            left: 0;
            top: 0;
            margin-top: 35px;
            margin-left: 35px;
            border: medium inset transparent;
        }

        .mfp-arrow:after {
            border-top-width: 13px;
            border-bottom-width: 13px;
            top: 8px;
        }

        .mfp-arrow:before {
            border-top-width: 21px;
            border-bottom-width: 21px;
            opacity: 0.7;
        }

        .mfp-arrow-left {
            left: 0;
        }

        .mfp-arrow-left:after {
            border-right: 17px solid #FFF;
            margin-left: 31px;
        }

        .mfp-arrow-left:before {
            margin-left: 25px;
            border-right: 27px solid #3F3F3F;
        }

        .mfp-arrow-right {
            right: 0;
        }

        .mfp-arrow-right:after {
            border-left: 17px solid #FFF;
            margin-left: 39px;
        }

        .mfp-arrow-right:before {
            border-left: 27px solid #3F3F3F;
        }

        .mfp-iframe-holder {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .mfp-iframe-holder .mfp-content {
            line-height: 0;
            width: 100%;
            max-width: 900px;
        }

        .mfp-iframe-holder .mfp-close {
            top: -40px;
        }

        .mfp-iframe-scaler {
            width: 100%;
            height: 0;
            overflow: hidden;
            padding-top: 56.25%;
        }

        .mfp-iframe-scaler iframe {
            position: absolute;
            display: block;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
            background: #000;
        }

        /* Main image in popup */
        img.mfp-img {
            width: auto;
            max-width: 100%;
            height: auto;
            display: block;
            line-height: 0;
            box-sizing: border-box;
            padding: 40px 0 40px;
            margin: 0 auto;
        }

        /* The shadow behind the image */
        .mfp-figure {
            line-height: 0;
        }

        .mfp-figure:after {
            content: '';
            position: absolute;
            left: 0;
            top: 40px;
            bottom: 40px;
            display: block;
            right: 0;
            width: auto;
            height: auto;
            z-index: -1;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
            background: #444;
        }

        .mfp-figure small {
            color: #BDBDBD;
            display: block;
            font-size: 12px;
            line-height: 14px;
        }

        .mfp-figure figure {
            margin: 0;
        }

        .mfp-bottom-bar {
            margin-top: -36px;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            cursor: auto;
        }

        .mfp-title {
            text-align: left;
            line-height: 18px;
            color: #F3F3F3;
            word-wrap: break-word;
            padding-right: 36px;
        }

        .mfp-image-holder .mfp-content {
            max-width: 100%;
        }

        .mfp-gallery .mfp-image-holder .mfp-figure {
            cursor: pointer;
        }

        @media screen and (max-width: 800px) and (orientation: landscape),
        screen and (max-height: 300px) {

            /**
       * Remove all paddings around the image on small screen
       */
            .mfp-img-mobile .mfp-image-holder {
                padding-left: 0;
                padding-right: 0;
            }

            .mfp-img-mobile img.mfp-img {
                padding: 0;
            }

            .mfp-img-mobile .mfp-figure:after {
                top: 0;
                bottom: 0;
            }

            .mfp-img-mobile .mfp-figure small {
                display: inline;
                margin-left: 5px;
            }

            .mfp-img-mobile .mfp-bottom-bar {
                background: rgba(0, 0, 0, 0.6);
                bottom: 0;
                margin: 0;
                top: auto;
                padding: 3px 5px;
                position: fixed;
                box-sizing: border-box;
            }

            .mfp-img-mobile .mfp-bottom-bar:empty {
                padding: 0;
            }

            .mfp-img-mobile .mfp-counter {
                right: 5px;
                top: 3px;
            }

            .mfp-img-mobile .mfp-close {
                top: 0;
                right: 0;
                width: 35px;
                height: 35px;
                line-height: 35px;
                background: rgba(0, 0, 0, 0.6);
                position: fixed;
                text-align: center;
                padding: 0;
            }
        }

        @media all and (max-width: 900px) {
            .mfp-arrow {
                -webkit-transform: scale(0.75);
                transform: scale(0.75);
            }

            .mfp-arrow-left {
                -webkit-transform-origin: 0;
                transform-origin: 0;
            }

            .mfp-arrow-right {
                -webkit-transform-origin: 100%;
                transform-origin: 100%;
            }

            .mfp-container {
                padding-left: 6px;
                padding-right: 6px;
            }
        }

        /* css End  */
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <a href="https://api.whatsapp.com/send?phone=+1(832)998-0202&text=Hello!%20I%20would%20like%20to%20get%20in%20touch%20with%20you."
        target="_blank" class="whatsapp-icon">
        <i class="fab fa-whatsapp"></i>
    </a>


    <div class="dark-version">
        <!--//==top header Start==//-->
        <!--//==preloader Start==//-->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="object"></div>
                    <h3 class="pad-top15 heading-color">Loading</h3>
                </div>
            </div>
        </div>
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
        <section class="slider-section">
            <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item">
                    <figure class="dark-theme">
                        <img src="assets/img/1.jpg" alt="" class="home-slider-img" />
                    </figure>
                    <div class="slider-section-1 text-left">
                        <div class="container">
                            <div class="col-md-8 slider-box1">
                                <div class="row">
                                    <div class="main-slider-heading">
                                        <h1 class="heading-wa">
                                            Vape Shop Bestsellers
                                        </h1>
                                    </div>
                                    <div class="slider-section-1-text">
                                        <p class="pregap-tecx  " style="color: white !important;">Discover our top-rated vape devices and e-liquids, handpicked for quality and flavor.</p>

                                    </div>
                                    <a href="{{url('gallery')}}" class="itg-button mar-top20">Explore Now</a>
                                    <a href="{{ url('contact_us') }}" class="itg-button mar-top20 mar-left15">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <figure class="dark-theme">
                        <img src="assets/img/2.jpg" alt="" class="home-slider-img" />
                    </figure>
                    <div class="slider-section-1 text-left">
                        <div class="container">
                            <div class="col-md-8 slider-box1">
                                <div class="row">
                                    <div class="main-slider-heading">
                                        <h1 class="heading-wa">New Arrivals
                                        </h1>
                                    </div>
                                    <div class="slider-section-1-text">
                                        <p class="pregap-tecx  " style="color: white !important;"> Explore our latest collection of cutting-edge vape devices and tantalizing e-liquid flavors.</p>

                                    </div>
                                    <a href="" class="itg-button mar-top20">Explore Now</a>
                                    <a href="{{ url('contact_us') }}" class="itg-button mar-top20 mar-left15">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <figure class="dark-theme">
                        <img src="assets/img/3.jpg" alt="" class="home-slider-img" />
                    </figure>
                    <div class="slider-section-1 text-left">
                        <div class="container">
                            <div class="col-md-8 slider-box1">
                                <div class="row">
                                    <div class="main-slider-heading">
                                        <h1 class="heading-wa">
                                            Exclusive Deals
                                        </h1>
                                    </div>
                                    <div class="slider-section-1-text">
                                        <p class="pregap-tecx " style="color: white !important;">Grab incredible discounts on your favorite vape products. Limited time offer!</p>

                                    </div>
                                    <a href="" class="itg-button mar-top20">Explore Now</a>
                                    <a href="{{ url('contact_us') }}" class="itg-button mar-top20 mar-left15">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--//========slider End=========//-->
        <!--//========About us section start=========//-->
        <section class="about-us-section pad-top100 pad-bottom100">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <figure class="abouts-image">
                            <img src="assets/img/About/one.jpg" alt="" />
                        </figure>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12 about-box">
                        <h2 class="heading-color theme-title">About us</h2>
                        <p class="pregap-tecx">
                            Sky High is your premier destination for all things vape. We're passionate about providing high-quality vape devices, e-liquids, and accessories to elevate your vaping experience. Our commitment to customer satisfaction, product quality, and industry knowledge sets us apart.



                        </p>

                        <p class="pregap-tecx">
                            Whether you're a seasoned vaper or just starting out, our knowledgeable team is here to guide you. Explore our extensive range of products, from sleek pod systems to powerful mod kits, and indulge in a world of flavors.


                        </p>
                        <p class="pregap-tecx">
                            Sky High is your one-stop shop for all your vaping needs. We're passionate about providing high-quality vape devices, e-liquids, and accessories to elevate your vaping experience. Our commitment to customer satisfaction, product quality, and industry knowledge sets us apart.
                        </p>

                        <a href="" class="itg-button mar-top20">Read more</a>
                    </div>
                </div>
            </div>
        </section>
        <!--//========About us section End=========//-->
        <!--//========Our service section Start=========//-->

        <!--//========Our service section End=========//-->
        <!--//========projects section Start=========//-->

        <section class="categories-section mb-3">
            <div class="container">
                <!-- Category buttons -->






                <div class="row  centertabs">
                    <div class="col-md-10">

                        <div class="filter-container">
                            <div class="buttonstabs">
                                <div class="">
                                    <div class="filter btn tabsbuttinsetting" data-category="all">All</div>
                                </div>
                                <div class="">
                                    <div class="filter btn tabsbuttinsetting" data-category="interior">Vape Devices
                                    </div>
                                </div>
                                <div class="">
                                    <div class="filter btn tabsbuttinsetting" data-category="event-decor">Vape E-Liquids
                                    </div>
                                </div>
                                <div class="">
                                    <div class="filter btn tabsbuttinsetting" data-category="private-commission">
                                        Vape Accessories
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- Category sections -->
                <div class="category-sections  mb-3">
                    <!-- Interior Decor Section -->
                    <div class="section interior" style="display: block;">
                        <div class="row image-row">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/1.avif" title="">
                                    <img src="assets/img/Interior_Decor/1.avif" alt="Interior Decor 1"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/2.avif" title="">
                                    <img src="assets/img/Interior_Decor/2.avif" alt="Interior Decor 2"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/3.avif" title="">
                                    <img src="assets/img/Interior_Decor/3.avif" alt="Interior Decor 3"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/4.avif" title="">
                                    <img src="assets/img/Interior_Decor/4.avif" alt="Interior Decor 4"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>

                        <div class="row image-row  mb-3">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/5.avif" title="">
                                    <img src="assets/img/Interior_Decor/5.avif" alt="Interior Decor 5"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/6.avif" title="">
                                    <img src="assets/img/Interior_Decor/6.avif" alt="Interior Decor 6"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/7.avif" title="">
                                    <img src="assets/img/Interior_Decor/7.avif" alt="Interior Decor 7"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/8.avif" title="">
                                    <img src="assets/img/Interior_Decor/8.avif" alt="Interior Decor 8"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Event Decor Section -->
                    <div class="section event-decor" style="display: block;">
                        <div class="row  mb-3">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Event_Decor/1.jpg" title="">
                                    <img src="assets/img/Event_Decor/1.jpg" alt="Event Decor 1"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Event_Decor/2.avif" title="">
                                    <img src="assets/img/Event_Decor/2.avif" alt="Event Decor 2"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Event_Decor/3.avif" title="">
                                    <img src="assets/img/Event_Decor/3.avif" alt="Event Decor 3"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Event_Decor/4.avif" title="">
                                    <img src="assets/img/Event_Decor/4.avif" alt="Event Decor 4"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Event_Decor/5.avif" title="">
                                    <img src="assets/img/Event_Decor/5.avif" alt="Event Decor 5"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Event_Decor/6.avif" title="">
                                    <img src="assets/img/Event_Decor/6.avif" alt="Event Decor 6"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Event_Decor/7.avif" title="">
                                    <img src="assets/img/Event_Decor/7.avif" alt="Event Decor 7"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Event_Decor/8.avif" title="">
                                    <img src="assets/img/Event_Decor/8.avif" alt="Event Decor 8"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Private Commission Section -->
                    <div class="section private-commission" style="display: block;">
                        <div class="row">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/1.avif" title="">
                                    <img src="assets/img/Private_Commission/1.avif" alt="Private Commission 1"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/2.avif" title="">
                                    <img src="assets/img/Private_Commission/2.avif" alt="Private Commission 2"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/3.avif" title="">
                                    <img src="assets/img/Private_Commission/3.avif" alt="Private Commission 3"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/4.avif" title="">
                                    <img src="assets/img/Private_Commission/4.avif" alt="Private Commission 4"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/5.avif" title="">
                                    <img src="assets/img/Private_Commission/5.avif" alt="Private Commission 5"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/6.avif" title="">
                                    <img src="assets/img/Private_Commission/6.avif" alt="Private Commission 6"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/7.avif" title="">
                                    <img src="assets/img/Private_Commission/7.avif" alt="Private Commission 7"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/8.avif" title="">
                                    <img src="assets/img/Private_Commission/8.avif" alt="Private Commission 8"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="section all" style="display: block;">


                        <div class="row image-row">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/1.avif" title="">
                                    <img src="assets/img/Interior_Decor/1.avif" alt="Interior Decor 1"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/2.avif" title="">
                                    <img src="assets/img/Interior_Decor/2.avif" alt="Interior Decor 2"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/3.avif" title="">
                                    <img src="assets/img/Interior_Decor/3.avif" alt="Interior Decor 3"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/4.avif" title="">
                                    <img src="assets/img/Interior_Decor/4.avif" alt="Interior Decor 4"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>


                        <div class="row image-row">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/5.avif" title="">
                                    <img src="assets/img/Interior_Decor/5.avif" alt="Interior Decor 5"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/6.avif" title="">
                                    <img src="assets/img/Interior_Decor/6.avif" alt="Interior Decor 6"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/7.avif" title="">
                                    <img src="assets/img/Interior_Decor/7.avif" alt="Interior Decor 7"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/8.avif" title="">
                                    <img src="assets/img/Interior_Decor/8.avif" alt="Interior Decor 8"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/1.avif" title="">
                                    <img src="assets/img/Private_Commission/1.avif" alt="Private Commission 1"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/2.avif" title="">
                                    <img src="assets/img/Private_Commission/2.avif" alt="Private Commission 2"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/3.avif" title="">
                                    <img src="assets/img/Private_Commission/3.avif" alt="Private Commission 3"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/4.avif" title="">
                                    <img src="assets/img/Private_Commission/4.avif" alt="Private Commission 4"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/5.avif" title="">
                                    <img src="assets/img/Private_Commission/5.avif" alt="Private Commission 5"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/6.avif" title="">
                                    <img src="assets/img/Private_Commission/6.avif" alt="Private Commission 6"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/7.avif" title="">
                                    <img src="assets/img/Private_Commission/7.avif" alt="Private Commission 7"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Private_Commission/8.avif" title="">
                                    <img src="assets/img/Private_Commission/8.avif" alt="Private Commission 8"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>


                        <div class="row image-row">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/1.avif" title="">
                                    <img src="assets/img/Interior_Decor/1.avif" alt="Interior Decor 1"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/2.avif" title="">
                                    <img src="assets/img/Interior_Decor/2.avif" alt="Interior Decor 2"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/3.avif" title="">
                                    <img src="assets/img/Interior_Decor/3.avif" alt="Interior Decor 3"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/4.avif" title="">
                                    <img src="assets/img/Interior_Decor/4.avif" alt="Interior Decor 4"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>


                        <div class="row image-row">
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/5.avif" title="">
                                    <img src="assets/img/Interior_Decor/5.avif" alt="Interior Decor 5"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/6.avif" title="">
                                    <img src="assets/img/Interior_Decor/6.avif" alt="Interior Decor 6"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/7.avif" title="">
                                    <img src="assets/img/Interior_Decor/7.avif" alt="Interior Decor 7"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                            <div class="col-lg-3 col-xs-6 mb-3">
                                <a class="image-popup-vertical-fit" href="assets/img/Interior_Decor/8.avif" title="">
                                    <img src="assets/img/Interior_Decor/8.avif" alt="Interior Decor 8"
                                        class="img-fluid fixed-size">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>




        <div id="myModal" class="modal fade" role="dialog" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 d-flex justify-content-center">

                        <a class="navbar-brand" href="/"
                            style="display: flex; align-items: center;">
                            <img class="site_logo dark-logo" alt="Site Logo"
                                style="height: 70px; width: auto;" src="assets/img/Rahim.png" />
                            <img class="site_logo light-logo" alt="Site Logo"
                                style="height: 70px; width: auto;" src="assets/img/Rahim.png" />

                        </a>
                    </div>
                    <div class="modal-body">
                        <p class="text-center" style="padding-bottom: 20px;">Please, verify your age before Proceed</p>


                        <div class="d-flex justify-content-around " style="margin-bottom: 30px;">

                            <button type="button" class="btn btn-primary" data-dismiss="modal">i am Over 18</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">i am Under 18</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <!-- <script>
            document.addEventListener("DOMContentLoaded", function() {
                const buttons = document.querySelectorAll('.filter');
                const sections = document.querySelectorAll('.category-sections .section');

                buttons.forEach(button => {
                    button.addEventListener('click', function() {
                        const category = this.getAttribute('data-category');


                        if (category === 'all') {
                            sections.forEach(section => section.style.display = 'block');
                        } else {

                            sections.forEach(section => {
                                if (section.classList.contains(category)) {
                                    section.style.display = 'block';
                                } else {
                                    section.style.display = 'none';
                                }
                            });
                        }
                    });
                });
            });
        </script> -->


        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const buttons = document.querySelectorAll('.filter');
                const sections = document.querySelectorAll('.category-sections .section');

                buttons.forEach(button => {
                    button.addEventListener('click', function() {
                        const category = this.getAttribute('data-category');

                        // Remove active class from all buttons
                        buttons.forEach(btn => btn.classList.remove('active'));
                        // Add active class to the clicked button
                        this.classList.add('active');

                        // Display the appropriate sections
                        if (category === 'all') {
                            sections.forEach(section => section.style.display = 'block');
                        } else {
                            sections.forEach(section => {
                                section.style.display = section.classList.contains(category) ?
                                    'block' : 'none';
                            });
                        }
                    });
                });
            });
        </script>

        <script>
            document.querySelectorAll('.filter').forEach(function(button) {
                button.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    document.querySelectorAll('.category-sections .section').forEach(function(section) {
                        if (section.classList.contains(category)) {
                            section.style.display = 'block';
                        } else {
                            section.style.display = 'none';
                        }
                    });
                });
            });
        </script>





        <script>
            window.addEventListener("load", function() {
                // alert('wa');
                // Find the button with the specified class and data attribute
                const allButton = document.querySelector(".filter[data-category='interior']");

                if (allButton) {
                    // Trigger a click on the "All" button
                    allButton.click();
                }
            });
        </script>


        <!--//========projects section End=========//-->
        <!--//========banner box section Start=========//-->

        <!--//========banner box section End=========//-->

        <!--//========price section End=========//-->
        <!--//========testimony section Start=========//-->

        <!--//========testimony section End=========//-->
        <!--//========team section Start=========//-->

        <!--//========team section End=========//-->
        <!--//========facts section End=========//-->

        <!--//========facts section End=========//-->
        <!--//========blog post section Start=========//-->

        <!--//========blog poas section End=========//-->
        <!--//========pattern section Start=========//-->

        <!--//========pattern section End=========//-->
        <!--//========NEW-letter section Start=========//-->

        <!--//========NEW-letter section End=========//-->
        <!--//========footer section Strat=========//-->


        @include('footer')
        <!--//========footer section End=========//-->
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filters = document.querySelectorAll('.filter'); // All category buttons
            const sections = document.querySelectorAll('.section'); // All category sections

            // Initially hide all sections
            sections.forEach(function(section) {
                section.style.display = 'none';
            });

            // Show the selected category's section
            filters.forEach(function(filter) {
                filter.addEventListener('click', function() {
                    const category = filter.getAttribute('data-category');

                    // Hide all sections first
                    sections.forEach(function(section) {
                        section.style.display = 'none';
                    });

                    // Show the clicked category section
                    const selectedSection = document.querySelector('.' + category);
                    if (selectedSection) {
                        selectedSection.style.display = 'block';
                    }
                });
            });
        });
    </script>
    <script>
        function redirectToWhatsApp() {
            // WhatsApp number in international format without spaces or special characters
            const phoneNumber = "18329980202"; // +1 (832) 998-8761
            const url = `https://wa.me/${phoneNumber}`;

            // Open the WhatsApp link in a new tab
            window.open(url, '_blank');
        }
    </script>


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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        // image Preview Code start

        $(document).ready(function() {
            $('.image-popup-vertical-fit').magnificPopup({
                type: 'image',
                mainClass: 'mfp-with-zoom',
                gallery: {
                    enabled: true
                },

                zoom: {
                    enabled: true,

                    duration: 300, // duration of the effect, in milliseconds
                    easing: 'ease-in-out', // CSS transition easing function

                    opener: function(openerElement) {

                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }

            });

        }); // image Preview Code End
    </script>


    <script>
        $(window).load(function() {
            $('#myModal').modal('show');
        });
    </script>
</body>

</html>
