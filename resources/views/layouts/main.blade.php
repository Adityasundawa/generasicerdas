
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Generasi Cerdas Indonesia - {{$title}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/assets/img/vicon.png">
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
        .leaflet-popup-content {
    width: 90px;
    height: 90px;
}
.leaflet-control{
    visibility: hidden;
}
.count-rp {
    font-size: 35px;
    color: #f3525a;
    font-family: 'Rubik', sans-serif;
    font-weight: 500;
    margin-bottom: 13px;
    line-height: 1;
    display: inline-block;
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
                                <h2> Tidak ada kekuatan yang lebih besar dalam membangun kedaulatan bangsa daripada pengetahuan yang diperoleh melalui pendidikan.</h2>

                            </div>
                        </div>
                         <div class="col-lg-4">
                            <a href="{{route('dashboard.registrasi')}}" class="btn">Register</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-top pb-70">
                <div class="container">
                    <div class="row justify-content-between">

                        <div class="col-xl-12 col-lg-12 col-sm-12">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h5>Contact Us</h5>
                                </div>
                                <div class="footer-link">
                                    <div class="f-contact">
                                    <ul>
                                    <li>
                                        <i class="icon far fa-clock"></i>
                                        <span>(0251) 7532444</span>
                                    </li>
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                         <span><a href="{{url('/')}}/assets/mailto:admin@generasicerdasindonesia.org">admin@generasicerdasindonesia.org</a></span>
                                    </li>
                                    <li>
                                      <i class="fal fa-map-marker-alt"></i>
                                         <span>Taman Sari Persada, B1 No 2B, Bogor 16166</span>
                                    </li>
                                </ul>

                                    </div>


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
                                &copy; 2023 Generasi Cerdas Indonesia.
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



    <script>
        $(document).ready(function() {
            // Sembunyikan form minat_bakat dan foto saat halaman dimuat
            $("#relawan_card, #donatur_card").hide();

            // Ketika radio button "Donatur" dipilih
            $("#donatur").on("click", function() {
                // Sembunyikan form minat_bakat dan foto
                $("#relawan_card").hide();
                $("#donatur_card").show();
                $("#donatur, #relawan,#jenis").hide();
            });

            // Ketika radio button "Relawan" dipilih
            $("#relawan").on("click", function() {
                // Tampilkan form minat_bakat dan foto
                $("#donatur_card").hide();
                $("#relawan_card").show();
                $("#donatur, #relawan,#jenis").hide();
            });
        });
    </script>
    </body>

</html>
