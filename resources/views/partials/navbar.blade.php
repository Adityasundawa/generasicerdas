<header class="header-area">
    <div class="header-top second-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 d-none d-md-block">
                    <div class="header-cta">
                        <ul>
                            <li>
                                <i class="icon dripicons-mail"></i>
                                <span>info@example.com</span>
                            </li>
                            <li>
                                <i class="icon far fa-clock"></i>
                                <span>Sen - Sab 8:00 - 18:00. Minggu TUTUP</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-none d-lg-block">
                    <div class="header-social text-right">
                        <span>
                            <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 d-none d-md-block">
                    <a href="#" class="top-btn">Appointment</a>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5">
                        <div class="logo">
                            <a href="index.html"><img src="{{url('/')}}/assets/img/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                        <div class="main-menu text-right text-xl-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="{{ route('dashboard.beranda') }}">Beranda</a></li>
                                    <li class="has-sub">
                                        <a href="{{ route('dashboard.tentangkami') }}">Tentang Kami</a>
                                        <ul>
                                            <li><a href="{{ route('dashboard.history') }}">History</a></li>
                                            <li><a href="{{ route('dashboard.visimisi') }}">Visi Misi</a></li>
                                            <li><a href="{{ route('dashboard.profilefounder') }}">Profile Founder</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a href="{{ route('dashboard.program') }}">Program</a>
                                        <ul>
                                            <li><a href="{{ route('dashboard.petadampak') }}">Peta Dampak</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a href="{{ route('dashboard.relawan') }}">Relawan</a>
                                        <ul>
                                            <li><a href="{{ route('dashboard.daftarrelawan') }}">Daftar Relawan</a></li>
                                            <li><a href="{{ route('dashboard.registrasi') }}">Registrasi</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a href="{{ route('dashboard.partner') }}">Partner</a>
                                        <ul>
                                            <li><a href="{{ route('dashboard.logoptcsr') }}">Logo PT/CSR</a></li>
                                            <li><a href="{{ route('dashboard.daftardonatur') }}">Daftar Donatur</a></li>
                                            <li><a href="{{ route('dashboard.countdana') }}">Count Jumlah Dana</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('dashboard.hubungikami') }}">Hubungi Kami</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
