@extends('layouts.main')

@section('content')
@include('partials.breadcrumb-area')
<section id="team" class="team-area pt-100 pb-70">
    <div class="container">

        <div class="row">
            {{-- <div class="col-lg-12 justify-content-center">
                <img src="{{url('/')}}/assets/img/direktur/struktur_direktur.png" class="img" alt="" srcset="">
            </div> --}}
            <div class="col-lg-4 col-md-6">
                <div class="single-team text-center mb-30 ">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="{{url('/')}}/assets/img/direktur/2.png" class="img" alt="Gambar tentang kami">
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Taqaufa Sadiid Priya Prasetyo</h4>
                        <span>Founder</span>
                        <div class="team-social mt-15">
                            <p><strong>Minat Bakat:</strong> <br>Matematika,Bahasa Inggris,Ilmu Pengetahuan Alam</p>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="single-team text-center mb-30 ">
                    <div class="team-thumb">
                      <div class="brd">
                        <img src="{{url('/')}}/assets/img/direktur/1.png" class="img" alt="Gambar tentang kami">
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Ichsan Elfarras Sofiandy</h4>
                        <span>Co-Founder</span>
                        <div class="team-social mt-15">
                            <p><strong>Minat Bakat:</strong> <br>Olahraga,Sejarah,Bahasa Indonesia</p>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-team text-center mb-30 ">
                    <div class="team-thumb">
                         <div class="brd">
                            <img src="{{url('/')}}/assets/img/direktur/3.png" class="img" alt="Gambar tentang kami">
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Pandu Damar Wicaksono</h4>
                        <span>Pengajar</span>
                        <div class="team-social mt-15">
                            <p><strong>Minat Bakat:</strong> <br>Matematika,Bahasa Inggris,Bahasa Jawa</p>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="single-team text-center mb-30 ">
                    <div class="team-thumb">
                         <div class="brd">
                            <img src="{{url('/')}}/assets/img/direktur/4.png" class="img" alt="Gambar tentang kami">
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Latasha Kirsty Wijaya</h4>
                        <span>Pengajar</span>
                        <div class="team-social mt-15">
                            <p><strong>Minat Bakat:</strong> <br>Matematika,Bahasa Inggris,Bahasa Indonesia</p>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
