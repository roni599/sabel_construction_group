<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Contact Us</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="/Client/logo.png" />
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/Client/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/Client/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="/Client/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="/Client/css/leaflet.css">
    <link rel="stylesheet" href="/Client/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="/Client/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="/Client/css/leaflet.markercluster.default.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="/Client/css/animate.css">
    <link rel="stylesheet" href="/Client/css/lightcase.css">
    <link rel="stylesheet" href="/Client/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Client/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Client/css/menu.css">
    <link rel="stylesheet" href="/Client/css/styles.css">
    <link rel="stylesheet" id="color" href="/Client/css/default.css">
    <link rel="stylesheet" href="/Client/css/leaflet.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
      #map-contact {
          height: 400px;
      }
      .leaflet-popup-content-wrapper {
          height: 70px;
          overflow: hidden;
      }
      .leaflet-popup-content {
          max-height: 100%;
      }
  </style>
</head>

<body class="inner-pages int_dark_bg">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header" class="int_content_wraapper hd">
                <div class="container container-header d-md-flex justify-content-around align-items-center">
                    <!-- Left Side Content -->
                    <div class="d-flex align-items-center">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="/" class="d-block"><img src="/Client/logo.png"
                                    data-sticky-logo="/Client/logo.png" alt="" /></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 black">
                            <ul id="responsive">
                                <li><a href="/">Home</a></li>
                                <li>
                                    <a href="/about">About Us</a>
                                    <ul>
                                        <li><a href="/about">SABEL</a></li>
                                        <!-- <li><a href="/under-construction">Organogram</a></li> -->
                                        <li><a href="/management-team">Management Team</a></li>
                                        <li><a href="/clients">Clients</a></li>
                                        <!-- <li><a href="/under-construction">Achivements</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="/projects/completed-projects">Projects</a>
                                    <ul>
                                        <li>
                                            <a href="/projects/completed-projects">Completed Projects</a>
                                        </li>
                                        <li><a href="/projects/ongoing-projects">Current Projects</a></li>
                                    </ul>
                                </li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/plants-&-equipments">Plants & Equipments</a></li>
                                <!-- <li><a href="/under-construction">Sister Concerns</a></li> -->
                                <li><a href="/contact-us">Contact Us</a></li>
                                <!-- <li><a href="under-construction.html">My Account</a></li> -->
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->
                    <div class="button" id="my-account-btn">

                    </div>
                </div>
            </div>
            <!-- Header / End -->
        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Contact Us</h1>
                    <h2><a href="/">Home </a> &nbsp;/&nbsp; Contact Us</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION CONTACT US -->
        <section class="contact-us">
            <div class="container">
                <div class="property-location mb-5">
                    <h3>Our Location</h3>
                    <div class="divider-fade"></div>
                    <div id="map-contact" class="contact-map"></div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h3 class="mb-4">Contact Us</h3>
                        <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                            <div id="success" class="successform">
                                <p class="alert alert-success font-weight-bold" role="alert">Your message was sent
                                    successfully!</p>
                            </div>
                            <div id="error" class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full"
                                    name="name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full"
                                    name="lastname" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-custom input-full" name="email"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8"
                                    placeholder="Message"></textarea>
                            </div>
                            <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 bgc">
                        <div class="call-info">
                            <h3>Contact Details</h3>
                            <p class="mb-5">Please find below contact details and contact us today!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">House #38 (Ground Floor), Road #09, Nikunja-02, Khilkhet,
                                            Dhaka-1229, Bangladesh</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">+88 01717-378466, +88 01515-256796</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">sabellmlted38@gmail.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info cll">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p class="in-p ti">8:00 a.m - 9:00 p.m</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT US -->

        <!-- START FOOTER -->
        <footer class="first-footer rec-pro">
            <div class="top-footer bg-black-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="/" class="logo">
                                    <img src="/Client/logo.png" alt="netcom" />
                                </a>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Cum incidunt architecto soluta laboriosam, perspiciatis,
                                    aspernatur officiis esse.
                                </p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">House #38 (Ground Floor), Road #09, Nikunja-02, Khilkhet,
                                                Dhaka-1229, Bangladesh.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p"> +88 01717-378466, +88 01515-256796</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti">sabellmlted38@gmail.com</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="navigation">
                                <h3>Navigation</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/under-construction">Organogram</a></li>
                                        <li><a href="/management-team">Management Team</a></li>
                                        <li><a href="/clients">Clients</a></li>
                                        <li><a href="/under-constructionv">Achivements</a></li>
                                    </ul>
                                    <ul class="nav-right">
                                        <li><a href="/projects/completed-projects">Projects Details</a></li>
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/under-construction">Latest Blog</a></li>
                                        <li><a href="/under-construction">Sister Concerns</a></li>
                                        <li class="no-mgb">
                                            <a href="/contact-us">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3>Twitter Feeds</h3>
                                <div class="twitter-widget contuct">
                                    <div class="twitter-area">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5>
                                                    <a href="#">@sabellmlted</a> all share them with me
                                                    baby said inspet.
                                                </h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5>
                                                    <a href="#">@sabellmlted</a> all share them with me
                                                    baby said inspet.
                                                </h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5>
                                                    <a href="#">@sabellmlted</a> all share them with me
                                                    baby said inspet.
                                                </h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>
                                    Sign Up for Our Newsletter to get Latest Updates and Offers.
                                    Subscribe to receive news in your inbox.
                                </p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL"
                                        placeholder="Enter Your Email" />
                                    <input type="submit" value="Subscribe" />
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer rec-pro">
                <div class="container-fluid sd-f">
                    <p>2024 © Copyright - All Rights Reserved.</p>
                    <ul class="netsocials">
                        <li>
                            <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->


        <!-- ARCHIVES JS -->
        <script src="/Client/js/jquery-3.5.1.min.js"></script>
        <script src="/Client/js/tether.min.js"></script>
        <script src="/Client/js/popper.min.js"></script>
        <script src="/Client/js/bootstrap.min.js"></script>
        <script src="/Client/js/mmenu.min.js"></script>
        <script src="/Client/js/mmenu.js"></script>
        <script src="/Client/js/jquery.form.js"></script>
        <script src="/Client/js/jquery.validate.min.js"></script>
        <script src="/Client/js/smooth-scroll.min.js"></script>
        <script src="/Client/js/forms.js"></script>
        <script src="/Client/js/ajaxchimp.min.js"></script>
        <script src="/Client/js/newsletter.js"></script>
        <script src="/Client/js/leaflet.js"></script>
        <script src="/Client/js/leaflet-gesture-handling.min.js"></script>
        <script src="/Client/js/leaflet-providers.js"></script>
        <script src="/Client/js/leaflet.markercluster.js"></script>
        <script src="/Client/js/map-single.js"></script>
        <script src="/Client/js/color-switcher.js"></script>
        <script src="/Client/js/inner.js"></script>
    </div>
    <!-- Wrapper / End -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        // Initialize Leaflet map
        var map = L.map('map-contact').setView([23.8487, 90.4116], 15); // Coordinates for the location

        // Add a tile layer for OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker for the specific location
        var marker = L.marker([23.8487, 90.4116]).addTo(map); // Marker coordinates
        marker.bindPopup("<b>House #38 (Ground Floor), Road #09, Nikunja-02, Khilkhet, Dhaka-1229, Bangladesh</b>").openPopup();
    </script>
</body>

</html>
