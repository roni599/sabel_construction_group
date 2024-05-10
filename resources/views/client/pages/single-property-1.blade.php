<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="html 5 template" />
    <meta name="author" content="" />
    <title>{{ $projects->project->project_name }}</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="/Client/logo.png" />
    <link rel="stylesheet" href="/Client/css/jquery-ui.css" />
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/Client/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="/Client/css/fontawesome-5-all.min.css" />
    <link rel="stylesheet" href="/Client/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="/Client/css/search.css" />
    <link rel="stylesheet" href="/Client/css/animate.css" />
    <link rel="stylesheet" href="/Client/css/aos.css" />
    <link rel="stylesheet" href="/Client/css/aos2.css" />
    <link rel="stylesheet" href="/Client/css/swiper.min.css" />
    <link rel="stylesheet" href="/Client/css/magnific-popup.css" />
    <link rel="stylesheet" href="/Client/css/lightcase.css" />
    <link rel="stylesheet" href="/Client/css/owl-carousel.css" />
    <link rel="stylesheet" href="/Client/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/Client/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Client/css/menu.css" />
    <link rel="stylesheet" href="/Client/css/slick.css" />
    <link rel="stylesheet" href="/Client/css/styles.css" />
    <link rel="stylesheet" id="color" href="/Client/css/default.css" />
</head>


<body class="inner-pages sin-1 homepage-4 int_dark_bg">
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
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="single-proper blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="headings-2 pt-0">
                                    <div class="pro-wrapper">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h3>{{ $projects->project->project_name }}</h3>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <i
                                                            class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{ $projects->project->location }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- main slider carousel items -->
                                <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                    <h5 class="mb-4">Gallery</h5>
                                    <div class="carousel-inner">
                                        @foreach (explode('|', $projects->image_name) as $key => $image)
                                            @if ($key == 0)
                                                <div class="active item carousel-item"
                                                    data-slide-number="{{ $key }}">
                                                    <img src="{{ asset('images/uploads/' . $image) }}"
                                                        class="img-fluid" alt="slider-listing">
                                                </div>
                                            @else
                                                <div class="item carousel-item"
                                                    data-slide-number="{{ $key }}">
                                                    <img src="{{ asset('images/uploads/' . $image) }}"
                                                        class="img-fluid" alt="slider-listing">
                                                </div>
                                            @endif
                                            <!-- <div class="item carousel-item" data-slide-number="2">
                                            <img src="Client/images/ss-projects/2-2.jpg" class="img-fluid" alt="slider-listing">
                                        </div> -->
                                        @endforeach
                                        
                                        

                                        <a class="carousel-control left" href="#listingDetailsSlider"
                                            data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#listingDetailsSlider"
                                            data-slide="next"><i class="fa fa-angle-right"></i></a>

                                    </div>
                                    <!-- main slider carousel nav controls -->
                                    <ul class="carousel-indicators smail-listing list-inline">

                                        {{-- @foreach ($project->images as $image)
                                            <li class="list-inline-item active">
                                                <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                                    data-target="#listingDetailsSlider">
                                                    <img src="{{ asset('storage/images/' . $image->image_name) }}"
                                                        class="img-fluid" alt="listing-small">
                                                </a>
                                            </li>
                                        @endforeach --}}
                                        {{-- @foreach (explode('|', $projects->image_name) as $image)
                                            <li class="list-inline-item active">
                                                <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                                    data-target="#listingDetailsSlider">
                                                    <img src="{{ asset('images/uploads/' . $image) }}"
                                                        class="img-fluid" alt="listing-small">
                                                </a>
                                            </li>
                                        @endforeach --}}
                                        @foreach (explode('|', $projects->image_name) as $image)
                                            <li class="list-inline-item active">
                                                <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                                    data-target="#listingDetailsSlider">
                                                    <img src="{{ asset('images/uploads/' . $image) }}"
                                                        class="img-fluid" alt="listing-small">
                                                </a>
                                            </li>
                                        @endforeach
                                       

                                        <!-- <li class="list-inline-item">
                                            <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                                                <img src="Client/images/ss-projects/2-1.jpg" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                                                <img src="Client/images/ss-projects/2-2.jpg" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li> -->
                                    </ul>
                                    <!-- main slider carousel items -->
                                </div>
                                <div class="blog-info details mb-30">
                                    <h5 class="mb-4">Description</h5>
                                    <p class="mb-3">{{ $projects->project->description }}</p>
                                </div>
                                

                            </div>
                        </div>
                        <div class="single homes-content details mb-30 d-flex flex-column">
                            <!-- title -->
                            <h5 class="mb-4">Project Details</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">Name of Employer : </span>
                                    <span class="det">{{ $projects->project->employee }} </span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Type of work Performed :</span>
                                    <span class="det">{{ $projects->project->type }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Date of Completion :</span>
                                    <span class="det">
                                        {{ \Carbon\Carbon::parse($projects->project->doc)->timezone('Asia/Dhaka')->format('d F Y') }}
                                    </span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Value of Contract :</span>
                                    <span class="det">Tk. {{ $projects->project->value }}</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                    
                </div>


            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->

        <!-- START FOOTER -->
        <footer class="first-footer">
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

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with
                            Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()"
                                            value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form"
                                            id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()"
                                                value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()"
                                                value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()"
                                                value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()"
                                                value="">
                                            <button type="submit"
                                                class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- ARCHIVES JS -->
        <script src="/Client/js/jquery-3.5.1.min.js"></script>
        <script src="/Client/js/jquery-ui.js"></script>
        <script src="/Client/js/range-slider.js"></script>
        <script src="/Client/js/tether.min.js"></script>
        <script src="/Client/js/popper.min.js"></script>
        <script src="/Client/js/bootstrap.min.js"></script>
        <script src="/Client/js/mmenu.min.js"></script>
        <script src="/Client/js/mmenu.js"></script>
        <script src="/Client/js/slick.min.js"></script>
        <script src="/Client/js/slick4.js"></script>
        <script src="/Client/js/fitvids.js"></script>
        <script src="/Client/js/smooth-scroll.min.js"></script>
        <script src="/Client/js/jquery.magnific-popup.min.js"></script>
        <script src="/Client/js/popup.js"></script>
        <script src="/Client/js/ajaxchimp.min.js"></script>
        <script src="/Client/js/newsletter.js"></script>
        <script src="/Client/js/timedropper.js"></script>
        <script src="/Client/js/datedropper.js"></script>
        <script src="/Client/js/jqueryadd-count.js"></script>
        <script src="/Client/js/leaflet.js"></script>
        <script src="/Client/js/leaflet-gesture-handling.min.js"></script>
        <script src="/Client/js/leaflet-providers.js"></script>
        <script src="/Client/js/leaflet.markercluster.js"></script>
        <script src="/Client/js/map-single.js"></script>
        <script src="/Client/js/color-switcher.js"></script>
        <script src="/Client/js/inner.js"></script>

        <!-- Date Dropper Script-->
        <script>
            $('#reservation-date').dateDropper();
        </script>
        <!-- Time Dropper Script-->
        <script>
            this.$('#reservation-time').timeDropper({
                setCurrentTime: false,
                meridians: true,
                primaryColor: "#e8212a",
                borderColor: "#e8212a",
                minutesInterval: '15'
            });
        </script>

        <script>
            $(document).ready(function() {
                $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });
        </script>

        <script>
            $('.slick-carousel').each(function() {
                var slider = $(this);
                $(this).slick({
                    infinite: true,
                    dots: false,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0'
                });

                $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                    slider.slick('slickPrev');
                });
                $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                    slider.slick('slickNext');
                });
            });
        </script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>
