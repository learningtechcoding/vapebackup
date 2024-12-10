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

        <!--//========slider End=========//-->
        <!--//========About us section start=========//-->
        <section class="about-us-section pad-top10000 pad-bottom100">
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
                      Sky High  is your premier destination for all things vape. We're passionate about providing high-quality vape devices, e-liquids, and accessories to elevate your vaping experience. Our commitment to customer satisfaction, product quality, and industry knowledge sets us apart.



                        </p>

                        <p class="pregap-tecx">
                        Whether you're a seasoned vaper or just starting out, our knowledgeable team is here to guide you. Explore our extensive range of products, from sleek pod systems to powerful mod kits, and indulge in a world of flavors.


                        </p>
                        <p class="pregap-tecx">
                        Sky High  is your one-stop shop for all your vaping needs. We're passionate about providing high-quality vape devices, e-liquids, and accessories to elevate your vaping experience. Our commitment to customer satisfaction, product quality, and industry knowledge sets us apart.
                        </p>

                        <a href="" class="itg-button mar-top20">Read more</a>
                    </div>
                </div>
            </div>
        </section>
        <!--//========About us section End=========//-->
        <!--//========Our service section Start=========//-->

        <!--//========Our service section End=========//-->


        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const buttons = document.querySelectorAll('.filter');
                const sections = document.querySelectorAll('.category-sections .section');

                buttons.forEach(button => {
                    button.addEventListener('click', function() {
                        const category = this.getAttribute('data-category');

                        // If "All" is selected, display all sections
                        if (category === 'all') {
                            sections.forEach(section => section.style.display = 'block');
                        } else {
                            // Otherwise, only display the selected category section
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
                const allButton = document.querySelector(".filter[data-category='all']");

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
            // Replace with your WhatsApp number in international format (e.g., 1234567890)
            const phoneNumber = "1234567890";
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
</body>

</html>
