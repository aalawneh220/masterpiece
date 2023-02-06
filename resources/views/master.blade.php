<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/" />

    <!-- title -->
    <title>Fruitkha - Slider Version</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="../../assets/img/favicon.png" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />

    <!-- fontawesome -->
    <link rel="stylesheet" href={{ asset('../../assets/css/all.min.css') }} />
    <!-- bootstrap -->
    <link rel="stylesheet" href={{ asset('../../assets/bootstrap/css/bootstrap.min.css') }} />
    <!-- owl carousel -->
    <link rel="stylesheet" href={{ asset('../../assets/css/owl.carousel.css') }} />
    <!-- magnific popup -->
    <link rel="stylesheet" href={{ asset('../../assets/css/magnific-popup.css') }} />
    <!-- animate css -->
    <link rel="stylesheet" href={{ asset('../../assets/css/animate.css') }} />
    <!-- mean menu css -->
    <link rel="stylesheet" href={{ asset('../../assets/css/meanmenu.min.css') }} />
    <!-- main style -->
    <link rel="stylesheet" href={{ asset('../../assets/css/main.css') }} />
    <!-- responsive -->
    <link rel="stylesheet" href={{ asset('../../assets/css/responsive.css') }} />
    <!-- product section -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>

<body>
    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html" class="text-decoration-none">

                                {{-- <img src="../../assets\img\logoo.png" alt="Avatar Logo"
                                    style="width: 40px; border-radius: 50%"> --}}
                                <h2> <span class="orange-text">PetFinder</span></h2>

                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item">
                                    <!-- <a href="#">Home</a>
                    <ul class="sub-menu">
                      <li><a href="index.html">Static Home</a></li>

                    </ul>
                  </li> -->
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li>
                                    @guest()
                                        <a href="#">login</a>
                                    @endguest

                                    @auth()
                                        <a href="#">profile</a>
                                    @endguest
                                    <ul class="sub-menu">


                                        @guest()
                                            <li><a href="/login">Login</a></li>

                                            <li><a href="/registration">register</a></li>
                                        @endguest
                                        @auth
                                            <li><a href="/profile">Profile</a></li>
                                            <li><a href="/signout">Logout</a></li>




                                        @endauth
                                    </ul>
                                </li>
                                <li>
                                    <a href="/adopt">Adopt pet Available</a>

                                </li>
                                <li><a href="/contact">Contact</a></li>
                                <li>
                                    <a href="/shop">Shop</a>

                                </li>
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="/cart"><i class="fas fa-shopping-cart"></i></a>
                                        @yield('search-icon')


                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        @yield('search-icon')
    </div>



    <!-- end search area -->

    @yield('content')

    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About us</h2>
                        <p>
                            Being a pet owner is one of the best things in the world. And we
                            understand because we're pet parents too. In fact,
                            Petsfinder.com was founded by people who love helping pets
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Get in Touch</h2>
                        <ul>
                            <li>Jordan , Amman, Abdali</li>
                            <li>support@Petfinder.com</li>
                            <li>+962778086281</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Pages</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Shop</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6">
            <div class="footer-box subscribe">
              <h2 class="widget-title">Subscribe</h2>
              <p>Subscribe to our mailing list to get the latest updates.</p>
              <form action="index.html">
                <input type="email" placeholder="Email" />
                <button type="submit">
                  <i class="fas fa-paper-plane"></i>
                </button>
              </form>
            </div>
          </div> --}}
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>
                        Copyrights &copy; 2022 -
                        <a href="https://imransdesign.com/">Ahmad Alawneh</a>, All Rights
                        Reserved.<br />

                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src={{ asset('../../assets/js/jquery-1.11.3.min.js') }}></script>
    <!-- bootstrap -->
    <script src={{ asset('../../assets/bootstrap/js/bootstrap.min.js') }}></script>
    <!-- count down -->
    <script src={{ asset('../../assets/js/jquery.countdown.js') }}></script>
    <!-- isotope -->
    <script src={{ asset('../../assets/js/jquery.isotope-3.0.6.min.js') }}></script>
    <!-- waypoints -->
    <script src={{ asset('../../assets/js/waypoints.js') }}></script>
    <!-- owl carousel -->
    <script src={{ asset('../../assets/js/owl.carousel.min.js') }}></script>
    <!-- magnific popup -->
    <script src={{ asset('../../assets/js/jquery.magnific-popup.min.js') }}></script>
    <!-- mean menu -->
    <script src={{ asset('../../assets/js/jquery.meanmenu.min.js') }}></script>
    <!-- sticker js -->
    <script src={{ asset('../../assets/js/sticker.js') }}></script>
    <!-- main js -->
    <script src={{ asset('../../assets/js/main.js') }}></script>
</body>

</html>
