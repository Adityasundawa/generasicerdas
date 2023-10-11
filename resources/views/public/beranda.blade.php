@extends('layouts.main')

@section('content')

    <section id="home" class="slider-area fix p-relative">
        <div class="">
            <div class="single-slider slider-bg d-flex"
                style="background-image:url({{url('/')}}/assets/img/breadcrumb/beranda.jpg)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="slider-content s-slider-content text-center mt-170">
                                <h2 data-animation="fadeInUp" data-delay=".4s">Membangun <span>Generasi Cerdas</span>
                                    Indonesia untuk Masa Depan yang Lebih Cerah</h2>
                                <p data-animation="fadeInUp" data-delay=".6s">Kami percaya pada potensi generasi muda
                                    Indonesia. Melalui pendidikan yang berkualitas,<br>
                                    kita dapat mewujudkan masa depan yang cemerlang untuk bangsa kita.</p>
                                <div class="slider-btn mt-40">
                                    <a href="#" class="btn ss-btn" data-animation="fadeInRight"
                                        data-delay=".8s">Selengkapnya</a>
                                    <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="feature-top" class="services-area services-bg services-two">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="s-single-services active">
                        <div class="services-icon">
                            <div class="glyph-icon flaticon-document"></div>
                        </div>
                        <div class="services-icon2">
                            <div class="glyph-icon flaticon-document"></div>
                        </div>
                        <div class="second-services-content">
                            <h5><a href="#">Jadi Mitra Indonesia Mengajar</a></h5>
                            <p>Anda bisa menjangkau seluruh Indonesia dan mengambil peran membangun pendidikan melalui kolaborasi proyek sosial. Mari ciptakan dampak positif untuk pendidikan di seluruh Indonesia!.</p>
                            <a href="#" class="btn2 mt-20">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="s-single-services">
                        <div class="services-icon icon-f2">
                            <div class="glyph-icon flaticon-agreement"></div>
                        </div>
                        <div class="services-icon2">
                            <div class="glyph-icon flaticon-agreement"></div>
                        </div>
                        <div class="second-services-content">
                            <h5><a href="#">Ambil Peran Melalui Donasi Publik</a></h5>
                            <p>Kami percaya, peran dalam pendidikan adalah milik semua orang. Ambil bagianmu dengan bekerja dan bergabung bersama!                                .</p>
                            <a href="#" class="btn2 mt-20">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="s-single-services">
                        <div class="services-icon">
                            <div class="glyph-icon flaticon-edition"></div>
                        </div>
                        <div class="services-icon2">
                            <div class="glyph-icon flaticon-edition"></div>
                        </div>
                        <div class="second-services-content">
                            <h5><a href="#">Mengabdi Sebagai Pengajar Muda</a></h5>
                            <p>Mendidik adalah tugas tiap orang terdidik. Ketika seseorang mendapatkan suatu ilmu, maka sesungguhnya ia langsung mengemban tugas menyebarkan ilmu itu pada yang lain.</p>
                            <a href="#" class="btn2 mt-20">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>

                    </div>
                </div>


            </div>

        </div>
    </section>
    <section id="about" class="about-area about-p pt-100 pb-160 p-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content">
                        <div class="about-title second-atitle">
                            <h2>Kami Dedikasikan untuk Membangun Generasi Cerdas Indonesia</h2>
                        </div>
                        <p>Kami percaya pada potensi luar biasa yang dimiliki oleh generasi muda Indonesia. Melalui pendidikan berkualitas, kita dapat mewujudkan masa depan yang lebih cerah untuk bangsa ini.</p>
                        <p>Program-program kami dirancang untuk memberikan keterampilan dan pengetahuan yang esensial bagi generasi mendatang, agar mereka dapat bersaing di kancah internasional.</p>
                        <p>Melalui kerjasama dengan berbagai pihak, kami berupaya untuk menciptakan lingkungan belajar yang kondusif bagi setiap individu agar dapat meraih potensi terbaiknya.</p>
                        <ul class="ab-coutner">
                            <li>
                                <div class="single-counter ">
                                    <div class="counter p-relative">
                                        <span class="count">500</span><small>+</small>
                                    </div>
                                    <p>Program Terlaksana</p>
                                </div>
                            </li>
                            <li>
                                <div class="single-counter ">
                                    <div class="counter p-relative">
                                        <span class="count">10,000</span><small>+</small>
                                    </div>
                                    <p>Siswa Terlibat</p>
                                </div>
                            </li>

                        </ul>
                        <div class="slider-btn mt-30">
                            <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Selengkapnya</a>
                            <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pl-70">
                    <div class="s-about-img p-relative">
                        <img src="{{url('/')}}/assets/img/direktur/2.png" alt="Gambar tentang kami">
                    </div>
                    <div class="sinature-box">
                        <div class="c-icon mb-30"><img src="{{url('/')}}/assets/img/features/c-Icon.png" alt="Ikon Khusus"></div>
                        <h2>"Pendidikan adalah kunci untuk masa depan."</h2>
                        <h3>Taqaufa Sadiid Priya Prasetyo</h3>
                        <img src="{{url('/')}}/assets/img/features/signature.png" alt="Tanda tangan Ketua">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="blog-area  p-relative pt-95 pb-90 fix" style="background: #f1f4ff;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title text-center mb-80">
                        <h2>Berita Terbaru</h2>
                        <img src="{{url('/')}}/assets/img/bg/t-c-line.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="single-post mb-30 ">
                        <div class="blog-thumb">
                            <a href="https://sindikasi.republika.co.id/berita/ptae2y423/network"><img src="https://static.republika.co.id/uploads/images/inpicture_slide/tim-kpm-mengikuti-olimpiade-matematika-di-malaysia-_190618154856-612.png" alt="img"></a>
                            <div class="b-meta">
                               <div class="row">
                                     <div class="col-lg-6 col-md-6">
                                       <i class="far fa-calendar-alt"></i> 18 Jun 2019
                                     </div>

                                 </div>
                            </div>
                        </div>
                        <div class="blog-content text-center">
                            <h4><a href="https://sindikasi.republika.co.id/berita/ptae2y423/network">Tim KPM Ukir Prestasi Membanggakan pada Olimpiade Matematika</p>

                             <div class="blog-btn"><a href="https://sindikasi.republika.co.id/berita/ptae2y423/network">Lihat Lainnya<i class="fas fa-chevron-right"></i></a></div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="single-post active mb-30 ">
                        <div class="blog-thumb">
                               <a href="https://www.bogorplus.com/index.php/pendidikan/item/10329-prestasi-tim-merah-putih-dalam-aimo-2016"><img src="https://www.bogorplus.com/media/k2/items/cache/656dbb09fd174600a610d0489b4c2908_L.jpg" alt="img"></a>
                             <div class="b-meta">
                               <div class="row">
                                     <div class="col-lg-6 col-md-6">
                                       <i class="far fa-calendar-alt"></i>  15 August 2016
                                     </div>
                                    <div class="col-lg-6 col-md-6">
                                       <i class="fas fa-user"></i> By Jhone Doe
                                     </div>
                                 </div>
                            </div>
                        </div>
                         <div class="blog-content text-center">

                            <h4><a href="https://www.bogorplus.com/index.php/pendidikan/item/10329-prestasi-tim-merah-putih-dalam-aimo-2016">Prestasi Tim Merah Putih dalam AIMO 2016</p>
                             <div class="blog-btn"><a href="#">Read More<i class="fas fa-chevron-right"></i></a></div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="single-post mb-30 ">                                 <div class="blog-thumb">
                            <a href="https://steamindonesia.id/project/sa-sentul-g10-jasmine-angel-jlita-eilada-kaylie-aruneendria-taqaufa-sadiid-priya-prasetyo-how-to-protect-yourselfan-egg-from-an-explosion-shockwave/"><img src="https://steamindonesia.id/wp-content/uploads/2022/03/sa-steam-sentul-cover-image.jpg" alt="img"></a>
                        <div class="b-meta">
                               <div class="row">
                                     <div class="col-lg-6 col-md-6">
                                       <i class="far fa-calendar-alt"></i>  7 March, 2019
                                     </div>
                                    <div class="col-lg-6 col-md-6">
                                       <i class="fas fa-user"></i> By Jhone Doe
                                     </div>
                                 </div>
                            </div>
                        </div>
                        <div class="blog-content text-center">

                            <h4><a href="https://steamindonesia.id/project/sa-sentul-g10-jasmine-angel-jlita-eilada-kaylie-aruneendria-taqaufa-sadiid-priya-prasetyo-how-to-protect-yourselfan-egg-from-an-explosion-shockwave/">SA SENTUL G10 JASMINE ANGEL JLITA, EILADA KAYLIE ARUNEENDRIA , & TAQAUFA SADIID PRIYA PRASETYO</p>

                             <div class="blog-btn"><a href="#">Read More <i class="fas fa-chevron-right"></i></a></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
