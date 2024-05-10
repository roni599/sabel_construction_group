<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Completed Projects</title>
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
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="/Client/css/search.css">
    <link rel="stylesheet" href="/Client/css/animate.css">
    <link rel="stylesheet" href="/Client/css/magnific-popup.css">
    <link rel="stylesheet" href="/Client/css/lightcase.css">
    <link rel="stylesheet" href="/Client/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Client/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Client/css/menu.css">
    <link rel="stylesheet" href="/Client/css/styles.css">
    <link rel="stylesheet" id="color" href="/Client/css/default.css">
</head>

<body class="inner-pages agents hp-6 full int_dark_bg">
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
        <section class="properties-list featured portfolio blog ho-17">
            <div class="container">
                <section class="headings-2 pt-0 pb-0">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p><a href="/">Projects </a> &nbsp;/&nbsp; <span>Completed Projects</span></p>
                                </div>
                                <h3>Completed Projects</h3>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row portfolio-items pt-5">
                    @foreach ($projects as $project)
                        <div class="item col-lg-3 col-md-6 col-xs-12 landscapes sale">
                            <div class="project-single mb-0" data-aos="fade-up">
                                <a href="{{ route('details.view', $project->project->project_id) }}"  class="recent-16 w-ds99">
                                    @foreach (explode('|', $project->image_name) as $image)
                                        <div class="recent-img16 img-center"
                                            style="background-image: url('{{ asset('images/uploads/' . $image) }}');">
                                        </div>
                                    @endforeach
                                    <div class="recent-content"></div>
                                    <div class="recent-details">
                                        <div class="recent-title">{{ $project->project_name }}</div>
                                        <div class="recent-price">{{ $project->location }}</div>
                                    </div>
                                    <div class="view-proper">View Details</div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <!-- <div class="item col-lg-3 col-md-6 col-xs-12 people rent">
                        <div class="project-single mb-0" data-aos="fade-up">
                            <a href="single-property-1.html" class="recent-16 w-ds99">
                                <div class="recent-img16 img-center" style="background-image: url(./images/ss-projects/x.jpg);"></div>
                                <div class="recent-content"></div>
                                <div class="recent-details">
                                     <div class="recent-title">Vertical Construction of Jalalabad Ragib-Rabeya Medical College & Hospital Old Library Bhaban 5th and 6th floor including remodeling from ground floor to 4th floor</div>
                                    <div class="recent-price">Sylhet</div>
                                     
                                </div>
                                <div class="view-proper">View Details</div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-xs-12 people landscapes sale">
                        <div class="project-single mb-0 no-mb" data-aos="fade-up">
                            <a href="single-property-1.html" class="recent-16 w-ds99">
                                <div class="recent-img16 img-center" style="background-image: url(./images/ss-projects/x.jpg);"></div>
                                <div class="recent-content"></div>
                                <div class="recent-details">
                                     <div class="recent-title">Construction of Rabeya Khatun Chowdhury General Hospital Building with 4 Storied foundation up to 1st and 2nd floor of Jalalabad Ragib-Rabeya Medical College & Hospital</div>
                                    <div class="recent-price">Sylhet</div>
                                     
                                </div>
                                <div class="view-proper">View Details</div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single mb-0" data-aos="fade-up">
                            <a href="single-property-1.html" class="recent-16 w-ds99">
                                <div class="recent-img16 img-center" style="background-image: url(./images/ss-projects/x.jpg);"></div>
                                <div class="recent-content"></div>
                                <div class="recent-details">
                                     <div class="recent-title">Construction of Remaining Portion of Syed Mojtaba Ali Hall 3rd Floor of 1st Block 2nd 3rd and 4th Block</div>
                                    <div class="recent-price">Shahjalal University of Science and Technology (SUST), Sylhet.</div>
                                     
                                </div>
                                <div class="view-proper">View Details</div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-xs-12 people rent">
                        <div class="project-single mb-0" data-aos="fade-up">
                            <a href="single-property-1.html" class="recent-16 w-ds99">
                                <div class="recent-img16 img-center" style="background-image: url(./images/ss-projects/x.jpg);"></div>
                                <div class="recent-content"></div>
                                <div class="recent-details">
                                     <div class="recent-title">Construction of 3 Storied Barisal RRC Building of Bangladesh Open University</div>
                                    <div class="recent-price">Barisal</div>
                                     
                                </div>
                                <div class="view-proper">View Details</div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-xs-12 people landscapes sale">
                        <div class="project-single mb-0 no-mb" data-aos="fade-up">
                            <a href="single-property-1.html" class="recent-16 w-ds99">
                                <div class="recent-img16 img-center" style="background-image: url(./images/ss-projects/x.jpg);"></div>
                                <div class="recent-content"></div>
                                <div class="recent-details">
                                     <div class="recent-title">Construction of Female Hostel ABCD & E-Block for Shahjalal University</div>
                                    <div class="recent-price">SUST, Sylhet</div>
                                     
                                </div>
                                <div class="view-proper">View Details</div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single mb-0" data-aos="fade-up">
                            <a href="single-property-1.html" class="recent-16 w-ds99">
                                <div class="recent-img16 img-center" style="background-image: url(./images/ss-projects/x.jpg);"></div>
                                <div class="recent-content"></div>
                                <div class="recent-details">
                                     <div class="recent-title">Construction of boy’s hostel at Jalabad Ragib-Rabeya Medical College & Hospital Sylhet.</div>
                                    <div class="recent-price">Jalalabad Ragib-Rabeya Medical College &Hospital, Sylhet</div>
                                     
                                </div>
                                <div class="view-proper">View Details</div>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->

        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="second-footer">
                <div class="container">
                    <p>2024 © Copyright - All Rights Reserved.</p>
                    <ul class="netsocials">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
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
        <script src="/Client/js/rangeSlider.js"></script>
        <script src="/Client/js/tether.min.js"></script>
        <script src="/Client/js/popper.min.js"></script>
        <script src="/Client/js/bootstrap.min.js"></script>
        <script src="/Client/js/mmenu.min.js"></script>
        <script src="/Client/js/mmenu.js"></script>
        <script src="/Client/js/aos.js"></script>
        <script src="/Client/js/aos2.js"></script>
        <script src="/Client/js/smooth-scroll.min.js"></script>
        <script src="/Client/js/lightcase.js"></script>
        <script src="/Client/js/search.js"></script>
        <script src="/Client/js/light.js"></script>
        <script src="/Client/js/jquery.magnific-popup.min.js"></script>
        <script src="/Client/js/popup.js"></script>
        <script src="/Client/js/searched.js"></script>
        <script src="/Client/js/ajaxchimp.min.js"></script>
        <script src="/Client/js/newsletter.js"></script>
        <script src="/Client/js/inner.js"></script>
        <script src="/Client/js/color-switcher.js"></script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });
        </script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>
