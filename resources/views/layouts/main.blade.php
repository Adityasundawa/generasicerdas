
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Generasi Cerdas Indonesia - {{$title}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/font-flaticon/flaticon.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/dripicons.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/slick.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/default.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/responsive.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
			height: 400px;
			width: 600px;
			max-width: 100%;
			max-height: 100%;
		}
        .card-img-custom {
    height: 200px;  /* You can set this to any desired height */
    width: 100%;
    object-fit: cover;
}
	</style>
    </head>
    <body>

     <!-- header -->

     @include('partials.navbar')
        <!-- header-end -->
        <!-- main-area -->
        <main>

@yield('content')

        </main>
        <!-- main-area-end -->
        <!-- footer -->
        <footer class="footer-bg footer-p pt-90">
            <div class="footer-top-heiding">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="section-title">
                                <h2> Have A Great Opportunity To Manage Your Finance Services</h2>

                            </div>
                        </div>
                         <div class="col-lg-4">
                            <a href="{{url('/')}}/assets/#" class="btn">Make Your Appointment</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-top pb-70">
                <div class="container">
                    <div class="row justify-content-between">

                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Contact Us</h5>
                                </div>
                                <div class="footer-link">
                                    <div class="f-contact">
                                    <ul>
                                    <li>
                                        <i class="icon far fa-clock"></i>
                                        <span>1800-121-3637<br>+91 555 234-8765</span>
                                    </li>
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                         <span><a href="{{url('/')}}/assets/mailto:info@example.com">info@example.com</a><br><a href="{{url('/')}}/assets/mailto:sale@example.com">sale@example.com</a></span>
                                    </li>
                                    <li>
                                      <i class="fal fa-map-marker-alt"></i>
                                         <span>380 St Kilda Road, Melbourne<br>VIC 3004, Australia</span>
                                    </li>
                                </ul>

                                    </div>


                                </div>
                            </div>
                        </div>
						<div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Our Links</h5>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> Partners</a></li>
										<li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                                        <li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> Career</a></li>
                                        <li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> Reviews</a></li>
                                        <li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> Terms & Conditions</a></li>
                                        <li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Other Links</h5>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> Home</a></li>
                                        <li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                                        <li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> Services</a></li>
                                        <li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> Project</a></li>
                                        <li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> Our Team</a></li>
                                        <li><a href="{{url('/')}}/assets/#"><i class="fas fa-chevron-right"></i> Latest Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Our Gallery</h5>
                                </div>
                                <div class="f-insta">
                                    <ul>
                                        <li><a href="{{url('/')}}/assets/#"><img src="{{url('/')}}/assets/img/instagram/f-galler-01.png" alt="img"></a></li>
                                        <li><a href="{{url('/')}}/assets/#"><img src="{{url('/')}}/assets/img/instagram/f-galler-02.png" alt="img"></a></li>
                                        <li><a href="{{url('/')}}/assets/#"><img src="{{url('/')}}/assets/img/instagram/f-galler-03.png" alt="img"></a></li>
                                        <li><a href="{{url('/')}}/assets/#"><img src="{{url('/')}}/assets/img/instagram/f-galler-04.png" alt="img"></a></li>
                                        <li><a href="{{url('/')}}/assets/#"><img src="{{url('/')}}/assets/img/instagram/f-galler-05.png" alt="img"></a></li>
                                        <li><a href="{{url('/')}}/assets/#"><img src="{{url('/')}}/assets/img/instagram/f-galler-06.png" alt="img"></a></li>
                                        <li><a href="{{url('/')}}/assets/#"><img src="{{url('/')}}/assets/img/instagram/f-galler-07.png" alt="img"></a></li>
                                        <li><a href="{{url('/')}}/assets/#"><img src="{{url('/')}}/assets/img/instagram/f-galler-08.png" alt="img"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-7">
                                &copy; 2020 Finco  All design Zcube.
                        </div>
                        <div class="col-4">
                            <div class="footer-social">
                                    <a href="{{url('/')}}/assets/#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{url('/')}}/assets/#"><i class="fab fa-twitter"></i></a>
                                    <a href="{{url('/')}}/assets/#"><i class="fab fa-instagram"></i></a>
                                    <a href="{{url('/')}}/assets/#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->


		<!-- JS here -->
        <script src="{{url('/')}}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="{{url('/')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{url('/')}}/assets/js/popper.min.js"></script>
        <script src="{{url('/')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/assets/js/one-page-nav-min.js"></script>
        <script src="{{url('/')}}/assets/js/slick.min.js"></script>
        <script src="{{url('/')}}/assets/js/ajax-form.js"></script>
        <script src="{{url('/')}}/assets/js/paroller.js"></script>
        <script src="{{url('/')}}/assets/js/wow.min.js"></script>
        <script src="{{url('/')}}/assets/js/js_isotope.pkgd.min.js"></script>
        <script src="{{url('/')}}/assets/js/imagesloaded.min.js"></script>
        <script src="{{url('/')}}/assets/js/parallax.min.js"></script>
        <script src="{{url('/')}}/assets/js/jquery.waypoints.min.js"></script>
        <script src="{{url('/')}}/assets/js/jquery.counterup.min.js"></script>
        <script src="{{url('/')}}/assets/js/jquery.scrollUp.min.js"></script>
        <script src="{{url('/')}}/assets/js/parallax-scroll.js"></script>
        <script src="{{url('/')}}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{url('/')}}/assets/js/element-in-view.js"></script>
        <script src="{{url('/')}}/assets/js/main.js"></script>
        @include('sweetalert::alert')
    </body>

</html>
