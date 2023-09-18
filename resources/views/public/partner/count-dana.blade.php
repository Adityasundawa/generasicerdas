@extends('layouts.main')

@section('content')
    @include('partials.breadcrumb-area')
    <section id="team" class="pt-100 pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title text-center">
                        <h2>Persentase jumlah dana yang disetor</h2>
                        <img src="{{ url('/') }}/assets/img/bg/t-c-line.png">
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="cardmt-3">
                        <div class="card-body">
                       <center>       <img src="{{ url('') }}/assets/img/cgi/presentase.png"></center>
                            <div class="single-counter ">
                                <div class="counter p-relative text-center">
                                    <div class="count-rp">Rp.</div><span class="count">76000000</span><small>+</small>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </section>
@endsection
