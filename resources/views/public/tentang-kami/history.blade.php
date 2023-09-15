@extends('layouts.main')

@section('content')
@include('partials.breadcrumb-area')
<section class="project-detail">
    <div class="container">
        <!-- Upper Box -->
        <div class="upper-box">
            <div class="single-item-carousel owl-carousel owl-theme">
                <figure class="image"><img src="img/blog/inner_b1.jpg" alt=""></figure>
            </div>
        </div>

        <!-- Lower Content -->
        <div class="lower-content">
            <div class="row">
                <div class="text-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Sejarah Generasi Cerdas Indonesia</h2>
                        <p>Berawal kegemarannya dalam bidang IPA (Science) matematika, sejak sekolah dasar dan berlanjut pada bidang fisika, kimia serta biologi di SMP serta SMA, Taqaufa Prasetyo sejak kelas 4 SD hingga SMA mendapatkan kesempatan untuk mengikuti olimpiade matematika dan olimpiade fisika baik di ajang nasional serta internasional dan rutin mendapatkan berbagai medali perak, perunggu serta emas setiap tahunnya.</p>

                        <p>Sejak SD seringkali di percaya oleh para guru untuk membantu teman-teman lainnya untuk membantu berbagai cara mudah untuk menyelesaikan soal-soal matematika, fisika. Hal ini membuat Taqaufa semakin tertarik dengan pelajaran-pelajaran tersebut dan mulai menemukan hal-hal baru saat berbagi ilmu kepada teman-temannya.</p>

                        <p>Taqaufa teringat akan pesan kedua orang tuanya, bahwa cara belajar yang terbaik adalah dengan cara berbagi kepada teman-temannya. Dengan berbagi ilmu, maka ilmu tersebut akan lebih bermanfaat untuk orang lain serta pada dirinya sendiri. Dimulai dengan membantu adik kandungnya sendiri sehingga seiring waktu, adik Taqaufa juga mulai menggemari bidang yang sama.</p>

                        <p>Kegiatan berbagi secara informal ini berlanjut hingga pandemi mendera Indonesia, pada tahun 2021 bulan Sept, Taqaufa mendapatkan undangan berbagi kepada komunitas remaja di Jakarta melalui media online bersama peraih medali emas panahan berkuda dengan tema "How to focus your dream". Berbagi hal-hal positif, menebar kebaikan serta semangat kepada rekan-rekan lainnya secara lebih luas membuat Taqaufa semakin semangat untuk melanjutkan dan berkeinginan untuk membuat media yang lebih formal sehingga bisa memberikan dampak yang lebih luas kepada lebih banyak anak-anak di Indonesia.</p>

                        <p>Hal inilah yang menjadi tonggak awal komunitas/organisasi yang bernama “Generasi Cerdas Indonesia”, Taqaufa sebagai founder mengandeng Adik kandungnya yang bernama Ghazi Prasetyo serta M.Ichsan Elfaras Sofiandi sebagai Co-Founder yang memiliki mimpi yang sama di mulai pada akhir tahun 2021, dan secara legalitas diterbitkan pada pertengahan 2023.</p>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img" src="{{url('/')}}/assets/img/sejarah/1.jpeg" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img" src="{{url('/')}}/assets/img/sejarah/2.jpeg" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img" src="{{url('/')}}/assets/img/sejarah/3.jpeg" alt="" srcset="">
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>

                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>Detail Organisasi</h3>
                        <p>Informasi mendalam tentang "Generasi Cerdas Indonesia".</p>
                        <!-- You can add more information here as needed -->
                        <ul class="project-info clearfix">
                            <li>
                                <span class="icon fa fa-user"></span>
                                <strong>Pendiri</strong>
                                <p>Taqaufa Prasetyo</p>
                            </li>
                            <li>
                                <span class="icon fa fa-user-friends"></span>
                                <strong>Co-Founder</strong>
                                <p>Ghazi Prasetyo & M.Ichsan Elfaras Sofiandi</p>
                            </li>
                            <li>
                                <span class="icon fa fa-calendar-alt"></span>
                                <strong>Tanggal Pendirian</strong>
                                <p>Akhir 2021</p>
                            </li>
                            <li>
                                <span class="icon fa fa-file"></span>
                                <strong>Legalitas</strong>
                                <p>Diterbitkan pada pertengahan 2023</p>
                            </li>
                            <!-- You can add more information here as needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Option -->

    </div>
</section>

@endsection
